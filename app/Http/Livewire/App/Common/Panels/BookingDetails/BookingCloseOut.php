<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\Payment;
use Carbon\Carbon;
use Livewire\Component;

class BookingCloseOut extends Component
{
    public $showForm, $booking, $providers, $close_out = [], $booking_total_amount = 0, $override = false, $override_amount = 0;
    public $service_charges = [];
    protected $listeners = ['showList' => 'resetForm', 'closeBooking'];

    public function render()
    {
        return view('livewire.app.common.panels.booking-details.booking-close-out');
    }
    public function rules()
    {
        return [
            'close_out.*.*.actual_end_hour' => 'required|numeric|between:0,23',
            'close_out.*.*.actual_end_min' => 'required|numeric|between:0,59',
            'close_out.*.*.actual_start_hour' => 'required|numeric|between:0,23',
            'close_out.*.*.actual_start_min' => 'required|numeric|between:0,59'
        ];
    }

    public function closeBooking()
    {
        $this->validate();

        foreach ($this->close_out as $booking_service_id => $service) {
            $booking_service = BookingServices::find($booking_service_id);
            foreach ($service as $provider_id => $closing_details) {

                $booking_provider = BookingProvider::where(['booking_service_id' => $booking_service_id, 'provider_id' => $provider_id])->first();
                $booking_provider->check_in_status = 3;
                $booking_provider->return_status = 1;

                $checkin = $booking_provider->check_in_procedure_values;
                // dd($checkin);

                $checkin['actual_start_hour'] = $closing_details['actual_start_hour'];
                $checkin['actual_start_min'] = $closing_details['actual_start_min'];
                $checkin['actual_start_timestamp'] = Carbon::createFromFormat('m/d/Y H:i', date_format(date_create($booking_service->start_time), 'm/d/Y') . ' ' . $closing_details['actual_start_hour'] . ':' . $closing_details['actual_start_min']);
                $booking_provider->check_in_procedure_values = $checkin;

                $checkout = $booking_provider->check_out_procedure_values;
                $checkout['actual_end_hour'] = $closing_details['actual_end_hour'];
                $checkout['actual_end_min'] = $closing_details['actual_end_min'];
                $checkout['actual_end_timestamp'] = Carbon::createFromFormat('m/d/Y H : i', date_format(date_create($booking_service->end_time), 'm/d/Y') . ' ' . $closing_details['actual_end_hour'] . ' : ' . $closing_details['actual_end_min']);

                $booking_provider->check_out_procedure_values = $checkout;

                $booking_provider->total_amount = $closing_details['total_amount'];
                $booking_provider->is_override_price = 1;
                $booking_provider->override_price = $closing_details['total_amount'];

                $booking_provider->save();
            }

            $checkedout_providers = BookingProvider::where('booking_service_id', $booking_service_id)->where('check_in_status', 3)->count();
            //check if all providers have checked out -> then close service
            if ($booking_service->provider_count == $checkedout_providers) {
                $booking_service->is_closed = true;
            }

            if ($this->service_charges[$booking_service_id]['override'] == true) {
                $booking_service->billed_total = $this->service_charges[$booking_service_id]['charges']!="" ? $this->service_charges[$booking_service_id]['charges'] : 0;
            }
            $booking_service->save();
        }

        if (count($this->booking->booking_services) == count($this->booking->closed_booking_services)) {
            $this->booking->is_closed = true;
        }
        //override booking total amound
        if ($this->override) {
            Payment::where('booking_id', $this->booking->id)->update(['is_override' => '1', 'override_amount' => $this->override_amount!="" ? $this->override_amount: 0]);
        }
        $this->booking->save();

        $this->dispatchBrowserEvent('close-out-booking');
        $this->emit('showConfirmation', 'Booking has been successfully closed');
    }

    public function overrideBookingAmount()
    {
        $this->override = true;
        $this->booking_total_amount = $this->override_amount;
    }
    public function overrideServiceCharges($booking_service_id)
    {
        $this->service_charges[$booking_service_id]['override'] = true;
        $sum = 0;
        foreach ($this->service_charges as $sc) {
            if ($sc['charges'] == '')
                $sc['charges'] = 0;
            $sum = $sum + $sc['charges'];
        }
        $this->override_amount = $sum;
        $this->overrideBookingAmount();
    }

    public function mount()
    {
        foreach ($this->booking->booking_services as $booking_service) {
            $this->providers[$booking_service->id] = BookingProvider::where('booking_service_id', $booking_service->id)->join('users', 'users.id', 'provider_id')->join('user_details', 'users.id', 'user_details.user_id')
                ->select(['booking_providers.*', 'users.name', 'user_details.profile_pic', 'users.email'])->get()->toArray();
            if ($this->providers[$booking_service->id] && count($this->providers[$booking_service->id])) {
                foreach ($this->providers[$booking_service->id] as $provider) {
                    $start = Carbon::parse(($provider['check_in_procedure_values'] && isset($provider['check_in_procedure_values']['actual_start_timestamp']) && $provider['check_in_procedure_values']['actual_start_timestamp']) ? $provider['check_in_procedure_values']['actual_start_timestamp'] : $booking_service->start_time);
                    $this->close_out[$booking_service->id][$provider['provider_id']]['actual_start_hour'] = $start->format('H');
                    $this->close_out[$booking_service->id][$provider['provider_id']]['actual_start_min'] = $start->format('i');
                    $end = Carbon::parse(($provider['check_out_procedure_values']  && isset($provider['check_out_procedure_values']['actual_end_timestamp']) && $provider['check_out_procedure_values']['actual_end_timestamp']) ? $provider['check_out_procedure_values']['actual_end_timestamp'] : $booking_service->end_time);
                    $this->close_out[$booking_service->id][$provider['provider_id']]['actual_end_hour'] = $end->format('H');
                    $this->close_out[$booking_service->id][$provider['provider_id']]['actual_end_min'] = $end->format('i');

                    $this->close_out[$booking_service->id][$provider['provider_id']]['total_amount'] = $provider['total_amount'];
                }
            }
            $this->service_charges[$booking_service->id]['charges'] = $booking_service->billed_total ?? 0;
            $this->service_charges[$booking_service->id]['override'] = false;
        }
        $this->booking_total_amount = $this->booking->getInvoicePrice();
        $this->override_amount = $this->booking->getInvoicePrice();
    }



    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}
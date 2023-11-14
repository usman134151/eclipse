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
    public $durationLabel = '', $showSpecialization = false;
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

                $closing_details['service_payment_details']['duration_hour'] = $closing_details['actual_duration_hour'];
                $closing_details['service_payment_details']['duration_min'] = $closing_details['actual_duration_min'];
                $booking_provider->service_payment_details = $closing_details['service_payment_details'];


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
                $booking_service->billed_total = $this->service_charges[$booking_service_id]['charges'] != "" ? $this->service_charges[$booking_service_id]['charges'] : 0;
            }
            $booking_service->save();
        }

        if (count($this->booking->booking_services) == count($this->booking->closed_booking_services)) {
            $this->booking->is_closed = true;
        }
        //override booking total amound
        if ($this->override) {
            Payment::where('booking_id', $this->booking->id)->update(['is_override' => '1', 'override_amount' => $this->override_amount != "" ? $this->override_amount : 0]);
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
            $booking_service['service_details'] = $booking_service->service_calculations ? json_decode($booking_service->service_calculations, true) : null;

            if ($this->providers[$booking_service->id] && count($this->providers[$booking_service->id])) {
                foreach ($this->providers[$booking_service->id] as $provider) {
                    $start = Carbon::parse(($provider['check_in_procedure_values'] && isset($provider['check_in_procedure_values']['actual_start_timestamp']) && $provider['check_in_procedure_values']['actual_start_timestamp']) ? $provider['check_in_procedure_values']['actual_start_timestamp'] : $booking_service->start_time);
                    $this->close_out[$booking_service->id][$provider['provider_id']]['actual_start_hour'] = $start->format('H');
                    $this->close_out[$booking_service->id][$provider['provider_id']]['actual_start_min'] = $start->format('i');
                    $end = Carbon::parse(($provider['check_out_procedure_values']  && isset($provider['check_out_procedure_values']['actual_end_timestamp']) && $provider['check_out_procedure_values']['actual_end_timestamp']) ? $provider['check_out_procedure_values']['actual_end_timestamp'] : $booking_service->end_time);
                    $this->close_out[$booking_service->id][$provider['provider_id']]['actual_end_hour'] = $end->format('H');
                    $this->close_out[$booking_service->id][$provider['provider_id']]['actual_end_min'] = $end->format('i');

                    $this->close_out[$booking_service->id][$provider['provider_id']]['total_amount'] = $provider['total_amount'];
                    $this->close_out[$booking_service->id][$provider['provider_id']]['actual_duration_hour'] = abs($this->close_out[$booking_service->id][$provider['provider_id']]['actual_end_hour'] - $this->close_out[$booking_service->id][$provider['provider_id']]['actual_start_hour']);
                    $this->close_out[$booking_service->id][$provider['provider_id']]['actual_duration_min'] = abs($this->close_out[$booking_service->id][$provider['provider_id']]['actual_end_min'] - $this->close_out[$booking_service->id][$provider['provider_id']]['actual_start_min']);
                    $this->close_out[$booking_service->id][$provider['provider_id']]['service_payment_details'] = $provider['service_payment_details'];
                    // if(count($booking_service['service_details']['specialization_charges'])){
                    //     $this->showSpecialization =true;
                    // }
                }
            }
            $this->service_charges[$booking_service->id]['charges'] = $booking_service->billed_total ?? 0;
            $this->service_charges[$booking_service->id]['override'] = false;
        }
        $this->booking_total_amount = $this->booking->getInvoicePrice();
        $this->override_amount = $this->booking->getInvoicePrice();
        $this->durationLabel = 'hour(s)';
    }

    public function updateTotal($booking_service_id, $provider_id)
    {
        $this->validate();
        // dd($this->close_out[$booking_service_id][$provider_id]['override_price']);
        if (!isset($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['b_hours_rate']) || trim($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['b_hours_rate']) == '')
            $this->close_out[$booking_service_id][$provider_id]['service_payment_details']['b_hours_rate'] = 0;
        if (!isset($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['a_hours_rate']) || trim($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['a_hours_rate']) == '')
            $this->close_out[$booking_service_id][$provider_id]['service_payment_details']['a_hours_rate'] = 0;
        if (!isset($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['b_hours_duration']) || trim($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['b_hours_duration']) == '')
            $this->close_out[$booking_service_id][$provider_id]['service_payment_details']['b_hours_duration'] = 0;
        if (!isset($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['a_hours_duration']) || trim($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['a_hours_duration']) == '')
            $this->close_out[$booking_service_id][$provider_id]['service_payment_details']['a_hours_duration'] = 0;
        if (!isset($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['expedited_rate']) || trim($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['expedited_rate']) == '')
            $this->close_out[$booking_service_id][$provider_id]['service_payment_details']['expedited_rate'] = 0;
        if (!isset($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['expedited_duration']) || trim($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['expedited_duration']) == '')
            $this->close_out[$booking_service_id][$provider_id]['service_payment_details']['expedited_duration'] = 0;
        if (!isset($this->close_out[$booking_service_id][$provider_id]['additional_payments']))
            $this->close_out[$booking_service_id][$provider_id]['additional_payments'] = [];

        if ($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['day_rate'] == true) {

            $subTotal = (float)$this->close_out[$booking_service_id][$provider_id]['service_payment_details']['rate'] * $this->close_out[$booking_service_id][$provider_id]['service_payment_details']['total_duration'];
        } elseif ($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['fixed_rate'] == true) {

            $subTotal = (float)$this->close_out[$booking_service_id][$provider_id]['service_payment_details']['rate'];
        } else {
            $subTotal = ($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['b_hours_rate'] * $this->close_out[$booking_service_id][$provider_id]['service_payment_details']['b_hours_duration']) + ($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['a_hours_rate'] * $this->close_out[$booking_service_id][$provider_id]['service_payment_details']['a_hours_duration']);
        }

        $this->close_out[$booking_service_id][$provider_id]['total_amount'] =  number_format($subTotal + ($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['expedited_rate'] * $this->close_out[$booking_service_id][$provider_id]['service_payment_details']['expedited_duration']), 2, '.', '');




        if (key_exists('specialization_charges', $this->close_out[$booking_service_id][$provider_id]['service_payment_details'])) {
            foreach ($this->close_out[$booking_service_id][$provider_id]['service_payment_details']['specialization_charges'] as $key => $specialization) {
                $this->close_out[$booking_service_id][$provider_id]['total_amount'] = $this->close_out[$booking_service_id][$provider_id]['total_amount'] + $this->close_out[$booking_service_id][$provider_id]['service_payment_details']['specialization_charges'][$key]['provider_charges'] ?? 0;
            }
        }







        return $this->close_out[$booking_service_id][$provider_id]['total_amount'];
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

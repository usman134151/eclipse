<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\Payment;
use Carbon\Carbon;
use Livewire\Component;

class BookingCloseOut extends Component
{
    public $showForm, $booking, $providers, $closeOut = [], $booking_total_amount = 0, $override = false, $override_amount = 0;
    public $service_charges = [];
    public $durationLabel = [], $showSpecialization = false;
    protected $listeners = ['showList' => 'resetForm', 'closeBooking'];

    public function render()
    {
        return view('livewire.app.common.panels.booking-details.booking-close-out');
    }
    public function rules()
    {
        return [
            'closeOut.*.*.actual_end_hour' => 'required|numeric|between:0,23',
            'closeOut.*.*.actual_end_min' => 'required|numeric|between:0,59',
            'closeOut.*.*.actual_start_hour' => 'required|numeric|between:0,23',
            'closeOut.*.*.actual_start_min' => 'required|numeric|between:0,59',
            'closeOut.*.*.actual_duration_hour' => 'required|numeric',
            'closeOut.*.*.actual_duration_min' => 'required|numeric',
            'closeOut.*.*.service_payment_details.total_duration' => 'nullable|numeric',
            'closeOut.*.*.service_payment_details.b_hours_duration' => 'nullable|numeric',
            'closeOut.*.*.service_payment_details.a_hours_duration' => 'nullable|numeric',
            'closeOut.*.*.service_payment_details.b_hours_rate' => 'nullable|numeric',
            'closeOut.*.*.service_payment_details.rate' => 'nullable|numeric',
            'closeOut.*.*.service_payment_details.a_hours_rate' => 'nullable|numeric',
            'closeOut.*.*.service_payment_details.expedited_rate' => 'nullable|numeric',
            'closeOut.*.*.service_payment_details.expedited_duration' => 'nullable|numeric',

            'closeOut.*.*.service_payment_details.specialization_charges.*.provider_charges' => 'nullable|numeric',
        ];
    }

    public function messages()
    {
        return [
            'closeOut.*.*.service_payment_details.b_hours_duration.numeric' => 'Average rate should be a number',
            'closeOut.*.*.service_payment_details.a_hours_duration.numeric' => 'Average rate should be a number',
            'closeOut.*.*.service_payment_details.b_hours_rate.numeric' => 'Average rate should be a number',
            'closeOut.*.*.service_payment_details.a_hours_rate.numeric' => 'Average rate should be a number',
            'closeOut.*.*.service_payment_details.total_duration.numeric' => 'Duration should be a number',
            'closeOut.*.*.service_payment_details.expedited_duration.numeric' => 'Expedited Duration should be a number',

            'closeOut.*.*.service_payment_details.expedited_rate.numeric' => 'Average rate should be a number',
            'closeOut.*.*.service_payment_details.rate.numeric' => 'Rate should be a number',
            'closeOut.*.*.service_payment_details.specialization_charges.*.provider_charges.numeric' => 'Average rate should be a number',

        ];
    }

    public function updateTimeExtension($bookingServiceId, $providerId, $status)
    {
        $this->closeOut[$bookingServiceId][$providerId]['time_extension_status'] = $status;

        $booking_provider = BookingProvider::where(['booking_service_id' => $bookingServiceId, 'provider_id' => $providerId])->first();
        $bookingService = $this->booking->booking_services->where('id', $bookingServiceId)->first();

        $booking_provider->check_in_status = 3;
        if ($status == 2) {
            //rejecting the time extension and changing values back to assignment-default
            $start = Carbon::parse($bookingService->start_time);
            $this->closeOut[$bookingService->id][$booking_provider['provider_id']]['actual_start_hour'] = $start->format('H');
            $this->closeOut[$bookingService->id][$booking_provider['provider_id']]['actual_start_min'] = $start->format('i');
            $end = Carbon::parse($bookingService->end_time);
            $this->closeOut[$bookingService->id][$booking_provider['provider_id']]['actual_end_hour'] = $end->format('H');
            $this->closeOut[$bookingService->id][$booking_provider['provider_id']]['actual_end_min'] = $end->format('i');

            $this->closeOut[$bookingService->id][$booking_provider['provider_id']]['actual_duration_hour'] = abs($this->closeOut[$bookingService->id][$booking_provider['provider_id']]['actual_end_hour'] - $this->closeOut[$bookingService->id][$booking_provider['provider_id']]['actual_start_hour']);
            $this->closeOut[$bookingService->id][$booking_provider['provider_id']]['actual_duration_min'] = abs($this->closeOut[$bookingService->id][$booking_provider['provider_id']]['actual_end_min'] - $this->closeOut[$bookingService->id][$booking_provider['provider_id']]['actual_start_min']);
        }

        $details['actual_start_hour'] = $this->closeOut[$bookingServiceId][$providerId]['actual_start_hour'];
        $details['actual_start_min'] = $this->closeOut[$bookingServiceId][$providerId]['actual_start_min'];
        $details['actual_start_timestamp'] = Carbon::createFromFormat('m/d/Y H:i', date_format(date_create($bookingService->start_time), 'm/d/Y') . ' ' . $this->closeOut[$bookingServiceId][$providerId]['actual_start_hour'] . ':' . $this->closeOut[$bookingServiceId][$providerId]['actual_start_min']);

        $details['actual_end_hour'] = $this->closeOut[$bookingServiceId][$providerId]['actual_end_hour'];
        $details['actual_end_min'] = $this->closeOut[$bookingServiceId][$providerId]['actual_end_min'];
        $details['actual_end_timestamp'] = Carbon::createFromFormat('m/d/Y H : i', date_format(date_create($bookingService->end_time), 'm/d/Y') . ' ' . $this->closeOut[$bookingServiceId][$providerId]['actual_end_hour'] . ' : ' . $this->closeOut[$bookingServiceId][$providerId]['actual_end_min']);

        $details['actual_duration_hour'] = $this->closeOut[$bookingServiceId][$providerId]['actual_duration_hour'];
        $details['actual_duration_min'] = $this->closeOut[$bookingServiceId][$providerId]['actual_duration_min'];
        $details['time_extension_status'] = $status;

        $booking_provider->admin_approved_payment_detail = $details;        //saving approved extension details
        $booking_provider->service_payment_details = $this->closeOut[$bookingServiceId][$providerId]['service_payment_details'];

        if($booking_provider->check_in_procedure_values == null){
            //provider has not checked in, add values from admin entered values
            $checkin['actual_start_hour'] = $details['actual_start_hour'];
            $checkin['actual_start_min'] = $details['actual_start_min'];
            $checkin['actual_start_timestamp'] = Carbon::createFromFormat('m/d/Y H:i', date_format(date_create($bookingService->start_time), 'm/d/Y') . ' ' . $details['actual_start_hour'] . ':' . $details['actual_start_min']);
            $booking_provider->check_in_procedure_values = $checkin;
        }

        if ($booking_provider->check_out_procedure_values == null) {
            //provider has not checked out, add values from admin entered values
            $checkout['actual_end_hour'] = $details['actual_end_hour'];
            $checkout['actual_end_min'] = $details['actual_end_min'];
            $checkout['actual_end_timestamp'] = Carbon::createFromFormat('m/d/Y H : i', date_format(date_create($bookingService->end_time), 'm/d/Y') . ' ' . $details['actual_end_hour'] . ' : ' . $details['actual_end_min']);
            $booking_provider->check_out_procedure_values = $checkout;

        }
        $booking_provider->total_amount = $this->closeOut[$bookingServiceId][$providerId]['total_amount'];
        // $booking_provider->is_override_price = 1;
        $booking_provider->override_price = $this->closeOut[$bookingServiceId][$providerId]['total_amount'];
        $booking_provider->save();
        $this->closeOut[$bookingServiceId][$providerId]['saved'] = true;
    }
    public function closeBooking()
    {
        $this->validate();

        foreach ($this->closeOut as $bookingServiceId => $service) {
            $bookingService = BookingServices::find($bookingServiceId);
            foreach ($service as $provider_id => $closingDetails) {
                if (key_exists('saved', $closingDetails) && $closingDetails['saved'] == true)
                    continue;   //this provider has been updated already, skip to next

                $booking_provider = BookingProvider::where(['booking_service_id' => $bookingServiceId, 'provider_id' => $provider_id])->first();
                $booking_provider->check_in_status = 3;

                $checkin = $booking_provider->check_in_procedure_values;
                // dd($checkin);

                $checkin['actual_start_hour'] = $closingDetails['actual_start_hour'];
                $checkin['actual_start_min'] = $closingDetails['actual_start_min'];
                $checkin['actual_start_timestamp'] = Carbon::createFromFormat('m/d/Y H:i', date_format(date_create($bookingService->start_time), 'm/d/Y') . ' ' . $closingDetails['actual_start_hour'] . ':' . $closingDetails['actual_start_min']);
                $booking_provider->check_in_procedure_values = $checkin;

                $checkout = $booking_provider->check_out_procedure_values;
                $checkout['actual_end_hour'] = $closingDetails['actual_end_hour'];
                $checkout['actual_end_min'] = $closingDetails['actual_end_min'];
                $checkout['actual_end_timestamp'] = Carbon::createFromFormat('m/d/Y H : i', date_format(date_create($bookingService->end_time), 'm/d/Y') . ' ' . $closingDetails['actual_end_hour'] . ' : ' . $closingDetails['actual_end_min']);
                $booking_provider->check_out_procedure_values = $checkout;

                $closingDetails['service_payment_details']['actual_duration_hour'] = $closingDetails['actual_duration_hour'];
                $closingDetails['service_payment_details']['actual_duration_min'] = $closingDetails['actual_duration_min'];
                $booking_provider->service_payment_details = $closingDetails['service_payment_details'];


                $booking_provider->total_amount = $closingDetails['total_amount'];
                $booking_provider->is_override_price = 1;
                $booking_provider->override_price = $closingDetails['total_amount'];

                $booking_provider->save();
            }

            $checkedout_providers = BookingProvider::where('booking_service_id', $bookingServiceId)->where('check_in_status', 3)->count();
            //check if all providers have checked out -> then close service
            if ($bookingService->provider_count == $checkedout_providers) {
                $bookingService->is_closed = true;
            }

            if ($this->service_charges[$bookingServiceId]['override'] == true) {
                $bookingService->billed_total = $this->service_charges[$bookingServiceId]['charges'] != "" ? $this->service_charges[$bookingServiceId]['charges'] : 0;
            }
            $bookingService->save();
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
    public function overrideServiceCharges($bookingServiceId)
    {
        $this->service_charges[$bookingServiceId]['override'] = true;
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
        // time_extension_status -> 0 does not require time extension
        // time_extension_status -> 1 approved time extension
        // time_extension_status -> 2 denied time extension
        // time_extension_status -> 3 requires time extension

        foreach ($this->booking->booking_services as $bookingService) {
            //for each service
            $this->providers[$bookingService->id] = BookingProvider::where('booking_service_id', $bookingService->id)->join('users', 'users.id', 'provider_id')->join('user_details', 'users.id', 'user_details.user_id')
                ->select(['booking_providers.*', 'users.name', 'user_details.profile_pic', 'users.email'])->get()->toArray();
            $bookingService['service_details'] = $bookingService->service_calculations ? json_decode($bookingService->service_calculations, true) : null;

            if ($this->providers[$bookingService->id] && count($this->providers[$bookingService->id])) {
                foreach ($this->providers[$bookingService->id] as $provider) {
                    // for each provider assign to the service

                    if ($provider['admin_approved_payment_detail'] == null) {
                        $start = Carbon::parse(($provider['check_in_procedure_values'] && isset($provider['check_in_procedure_values']['actual_start_timestamp']) && $provider['check_in_procedure_values']['actual_start_timestamp']) ? $provider['check_in_procedure_values']['actual_start_timestamp'] : $bookingService->start_time);
                        $this->closeOut[$bookingService->id][$provider['provider_id']]['actual_start_hour'] = $start->format('H');
                        $this->closeOut[$bookingService->id][$provider['provider_id']]['actual_start_min'] = $start->format('i');
                        $end = Carbon::parse(($provider['check_out_procedure_values']  && isset($provider['check_out_procedure_values']['actual_end_timestamp']) && $provider['check_out_procedure_values']['actual_end_timestamp']) ? $provider['check_out_procedure_values']['actual_end_timestamp'] : $bookingService->end_time);
                        $this->closeOut[$bookingService->id][$provider['provider_id']]['actual_end_hour'] = $end->format('H');
                        $this->closeOut[$bookingService->id][$provider['provider_id']]['actual_end_min'] = $end->format('i');

                        if (!isset($provider['admin_approved_payment_detail']['actual_duration_hour']))
                            $this->closeOut[$bookingService->id][$provider['provider_id']]['actual_duration_hour'] = abs($this->closeOut[$bookingService->id][$provider['provider_id']]['actual_end_hour'] - $this->closeOut[$bookingService->id][$provider['provider_id']]['actual_start_hour']);
                        else
                            $this->closeOut[$bookingService->id][$provider['provider_id']]['actual_duration_hour'] = $provider['admin_approved_payment_detail']['actual_duration_hour'];

                        if (!isset($provider['admin_approved_payment_detail']['actual_duration_min']))
                            $this->closeOut[$bookingService->id][$provider['provider_id']]['actual_duration_min'] = abs($this->closeOut[$bookingService->id][$provider['provider_id']]['actual_end_min'] - $this->closeOut[$bookingService->id][$provider['provider_id']]['actual_start_min']);
                        else
                            $this->closeOut[$bookingService->id][$provider['provider_id']]['actual_duration_min'] = $provider['admin_approved_payment_detail']['actual_duration_min'];

                        $bookingStart = Carbon::parse($bookingService->start_time);
                        $bookingEnd = Carbon::parse($bookingService->end_time);
                        //checking difference between assignment duration and provider duration 
                        if ($bookingEnd->diffInSeconds($bookingStart) - $end->diffInSeconds($start) < 0)
                            //requires time extension
                            $this->closeOut[$bookingService->id][$provider['provider_id']]['time_extension_status'] = 3;
                        else
                            $this->closeOut[$bookingService->id][$provider['provider_id']]['time_extension_status'] = 0;
                    } else {
                        //time extension already approved/rejected
                        $this->closeOut[$bookingService->id][$provider['provider_id']]    = $provider['admin_approved_payment_detail'];
                        // if($provider['admin_approved_payment_detail']['time_extension_status'] == 2)
                        //     // display provider checkin-checkout times 
                    }
                    $this->closeOut[$bookingService->id][$provider['provider_id']]['total_amount'] = $provider['total_amount'];
                    $this->closeOut[$bookingService->id][$provider['provider_id']]['service_payment_details'] = $provider['service_payment_details'];



                    // dd($bookingEnd->diffInSeconds($bookingStart), $end->diffInSeconds($start) , $bookingEnd->diffInSeconds($bookingStart)- $end->diffInSeconds($start));


                }
            }
            $this->service_charges[$bookingService->id]['charges'] = $bookingService->billed_total ?? 0;
            $this->service_charges[$bookingService->id]['override'] = false;
            if (isset($bookingService['service_details']['day_rate']) && $bookingService['service_details']['day_rate'])
                $this->durationLabel[$bookingService->id] = "days(s)";
            else
                $this->durationLabel[$bookingService->id] = "hour(s)";
        }
        $this->booking_total_amount = $this->booking->getInvoicePrice();
        $this->override_amount = $this->booking->getInvoicePrice();
    }

    public function updateTotal($bookingServiceId, $provider_id)
    {
        $this->validate();
        //checking for null values
        if (!isset($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['b_hours_rate']) || trim($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['b_hours_rate']) == '')
            $this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['b_hours_rate'] = 0;
        if (!isset($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['a_hours_rate']) || trim($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['a_hours_rate']) == '')
            $this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['a_hours_rate'] = 0;
        if (!isset($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['b_hours_duration']) || trim($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['b_hours_duration']) == '')
            $this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['b_hours_duration'] = 0;
        if (!isset($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['a_hours_duration']) || trim($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['a_hours_duration']) == '')
            $this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['a_hours_duration'] = 0;
        if (!isset($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['expedited_rate']) || trim($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['expedited_rate']) == '')
            $this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['expedited_rate'] = 0;
        if (!isset($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['expedited_duration']) || trim($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['expedited_duration']) == '')
            $this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['expedited_duration'] = 0;
        if (!isset($this->closeOut[$bookingServiceId][$provider_id]['additional_payments']))
            $this->closeOut[$bookingServiceId][$provider_id]['additional_payments'] = [];

        if ($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['day_rate'] == true) {

            $subTotal = (float)$this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['rate'] * $this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['total_duration'];
        } elseif ($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['fixed_rate'] == true) {

            $subTotal = (float)$this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['rate'];
        } else {
            $subTotal = (float)($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['b_hours_rate'] * $this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['b_hours_duration']) + (float)($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['a_hours_rate'] * $this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['a_hours_duration']);
        }

        $this->closeOut[$bookingServiceId][$provider_id]['total_amount'] =  number_format($subTotal + (float)($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['expedited_rate'] * (float)$this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['expedited_duration']), 2, '.', '');

        // adding specialization charges to total_amount
        if (key_exists('specialization_charges', $this->closeOut[$bookingServiceId][$provider_id]['service_payment_details'])) {
            foreach ($this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['specialization_charges'] as $key => $specialization) {
                $this->closeOut[$bookingServiceId][$provider_id]['total_amount'] = (float)$this->closeOut[$bookingServiceId][$provider_id]['total_amount'] + (float)$this->closeOut[$bookingServiceId][$provider_id]['service_payment_details']['specialization_charges'][$key]['provider_charges'] ?? 0;
            }
        }
        return $this->closeOut[$bookingServiceId][$provider_id]['total_amount'];
    }

    // function to reset values of specific provider
    public function resetVals($bookingServiceId, $provider_id)
    {
        $bookingService = $this->booking->booking_services->where('id', $bookingServiceId)->first();
        $start = Carbon::parse($bookingService->start_time);
        $this->closeOut[$bookingServiceId][$provider_id]['actual_start_hour'] = $start->format('H');
        $this->closeOut[$bookingServiceId][$provider_id]['actual_start_min'] = $start->format('i');
        $end = Carbon::parse($bookingService->end_time);
        $this->closeOut[$bookingServiceId][$provider_id]['actual_end_hour'] = $end->format('H');
        $this->closeOut[$bookingServiceId][$provider_id]['actual_end_min'] = $end->format('i');

        $this->closeOut[$bookingServiceId][$provider_id]['actual_duration_hour'] = abs($this->closeOut[$bookingServiceId][$provider_id]['actual_end_hour'] - $this->closeOut[$bookingServiceId][$provider_id]['actual_start_hour']);
        $this->closeOut[$bookingServiceId][$provider_id]['actual_duration_min'] = abs($this->closeOut[$bookingServiceId][$provider_id]['actual_end_min'] - $this->closeOut[$bookingServiceId][$provider_id]['actual_start_min']);
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

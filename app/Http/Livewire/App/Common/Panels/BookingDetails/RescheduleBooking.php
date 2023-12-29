<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use App\Models\Tenant\Booking;
use App\Models\Tenant\RescheduleBookingLog;
use App\Services\App\BookingOperationsService;
use Carbon\Carbon;
use Livewire\Component;
use App\Services\App\NotificationService;

class RescheduleBooking extends Component
{
    public $showForm, $booking, $reschedule_details = ['setting' => "only_this_booking"], $override_charges = '', $previousReschedulings = null;
    protected $listeners = ['showList' => 'resetForm', 'getRescheduleBookingData', 'updateVal'];
    public $serviceTypes = [
        '1' => ['class' => 'inperson-rate', 'postfix' => '', 'title' => 'In-Person'],
        '2' => ['class' => 'virtual-rate', 'postfix' => '_v', 'title' => 'Virtual'],
        '4' => ['class' => 'phone-rate', 'postfix' => '_p', 'title' => 'Phone'],
        '5' => ['class' => 'teleconference-rate', 'postfix' => '_t', 'title' => 'Teleconference'],
    ];
    public function render()
    {
        return view('livewire.app.common.panels.booking-details.reschedule-booking');
    }

    public function getRescheduleBookingData($booking_id)
    {
        //fetch booking with rescheduling charges
        $this->booking = BookingOperationsService::getBookingDetails($booking_id, $this->serviceTypes, 'rescheduling', 'cancellation_hour1');
        if (!is_null($this->booking->payment)) {
            //fetch rescheduling history
            $this->previousReschedulings = RescheduleBookingLog::where('booking_id', $this->booking->id)->get();
            //sum charges if found

            $this->override_charges = number_format(round($this->booking->payment->reschedule_booking_charges, 1),2);
            $start = Carbon::parse($this->booking->booking_start_at);
            $end = Carbon::parse($this->booking->booking_end_at);
            $this->reschedule_details['booking_start_at'] = $start->format('m/d/Y');
            $this->reschedule_details['booking_start_hour'] = $start->format('H');
            $this->reschedule_details['booking_start_min'] = $start->format('i');
            $this->reschedule_details['booking_end_at'] = $end->format('m/d/Y');
            $this->reschedule_details['booking_end_hour'] = $end->format('H');
            $this->reschedule_details['booking_end_min'] = $end->format('i');
            $this->reschedule_details['setting'] = "only_this_booking";
            $this->reschedule_details['reschedule_until'] = Carbon::parse($this->booking->recurring_end_at)->format('m/d/Y');
            $this->resetValidation();
        }
    }

    public function rules()
    {
        $rules =  [
            'reschedule_details.booking_start_at' => 'required|date',
            'reschedule_details.booking_start_hour' => 'required|numeric|between:0,23',
            'reschedule_details.booking_start_min' => 'required|numeric|between:0,59',
            'reschedule_details.booking_end_at' => 'required|date|after_or_equal:reschedule_details.booking_start_at',
            'reschedule_details.booking_end_hour' => 'required|numeric|between:0,23',
            'reschedule_details.booking_end_min' => 'required|numeric|between:0,59',
            'override_charges' => 'nullable|numeric'
        ];

        if ($this->reschedule_details['setting'] == 'bookings_until')
            $rules['reschedule_details.reschedule_until'] = 'required|date';
        return $rules;
    }

    public function saveBooking()
    {
        $this->validate();

        if ($this->override_charges != '' && is_numeric($this->override_charges)) {
            $this->booking->payment->reschedule_booking_charges = (float)$this->override_charges;
        }
        $prev_charges = $this->previousReschedulings->count() ?  $this->previousReschedulings->sum('charges') : 0;

        $this->reschedule_details['charges'] = $this->booking->payment->reschedule_booking_charges;
        $this->reschedule_details['prev_charges'] = $prev_charges;

        BookingOperationsService::rescheduleBooking($this->booking, $this->reschedule_details);
        $data['bookingData'] = $this->booking;
        $data['rescheduleData'] = $this->reschedule_details;
        NotificationService::sendNotification('Booking: Reschedule Request (after service parameter)', $data);
        $this->emit('showConfirmation', 'Booking status updated successfully');

        $this->dispatchBrowserEvent('close-reschedule');
    }


    function updateVal($attrName, $val)
    {

        $this->reschedule_details[$attrName] = $val;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}

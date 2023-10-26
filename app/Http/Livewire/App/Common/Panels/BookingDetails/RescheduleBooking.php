<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use App\Models\Tenant\Booking;
use App\Services\App\BookingOperationsService;
use Carbon\Carbon;
use Livewire\Component;

class RescheduleBooking extends Component
{
    public $showForm, $booking, $reschedule_details = [], $override_charges=0;
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
    }

    public function saveBooking()
    {
        if ($this->override_charges != '' && is_numeric($this->override_charges)) {
            $this->booking->payment->reschedule_booking_charges = (float)$this->override_charges;
        }
        $this->reschedule_details['charges'] = $this->booking->payment->reschedule_booking_charges;


        BookingOperationsService::rescheduleBooking($this->booking,$this->reschedule_details);
        $this->emit('showConfirmation', 'Booking status updated successfully');
       
        // $this->dispatchBrowserEvent('close-reschedule');
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

<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use App\Models\Tenant\Booking;
use Carbon\Carbon;
use Livewire\Component;

class RescheduleBooking extends Component
{
    public $showForm, $booking, $reschedule_details = [];
    protected $listeners = ['showList' => 'resetForm', 'getRescheduleBookingData', 'updateVal'];

    public function render()
    {
        return view('livewire.app.common.panels.booking-details.reschedule-booking');
    }

    public function getRescheduleBookingData($booking_id)
    {
        $this->booking = Booking::find($booking_id);
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


    function updateVal($attrName, $val)
    {
        $this->reschedule_details[$attrName] = $val;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}

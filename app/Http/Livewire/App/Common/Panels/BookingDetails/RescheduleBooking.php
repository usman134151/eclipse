<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use App\Models\Tenant\Booking;
use Livewire\Component;

class RescheduleBooking extends Component
{
    public $showForm,$booking;
    protected $listeners = ['showList' => 'resetForm', 'getRescheduleBookingData'];

    public function render()
    {
        return view('livewire.app.common.panels.booking-details.reschedule-booking');
    }

    public function getRescheduleBookingData($booking_id)
    {
       $this->booking= Booking::find($booking_id);
       
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}

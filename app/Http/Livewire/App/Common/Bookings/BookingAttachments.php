<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;

class BookingAttachments extends Component
{
    public $showForm, $booking_id=0;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.bookings.booking-attachments');
    }

    public function mount()
    {
       
       
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

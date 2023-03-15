<?php

namespace App\Http\Livewire\App\Customer\Booking;

use Livewire\Component;

class BookingList extends Component
{
    public $showForm;
    public $showBookingDetails;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.customer.booking.booking-list');
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
    public function showBookingDetails()
	{
		$this->showBookingDetails = true;
	}
}

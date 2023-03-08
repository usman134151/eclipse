<?php

namespace App\Http\Livewire\App\Provider\Bookings;

use Livewire\Component;

class BookingList extends Component
{
	public $bookingType;
	public $showBookingDetails;

	protected $listeners = ['showList' => 'resetForm'];

	public function render()
	{
		return view('livewire.app.provider.bookings.booking-list');
	}

	public function mount()
	{}

	public function resetForm()
	{
		$this->showBookingDetails = false;
	}

	public function showBookingDetails()
	{
		$this->showBookingDetails = true;
	}
}

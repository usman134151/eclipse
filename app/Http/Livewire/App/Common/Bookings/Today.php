<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;

class Today extends Component
{
	public $bookingType;
	public $showBookingDetails;
	protected $listeners = ['showList' => 'resetForm'];

	public function render()
	{
		return view('livewire.app.common.bookings.today');
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

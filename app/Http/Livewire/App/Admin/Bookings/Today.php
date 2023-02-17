<?php

namespace App\Http\Livewire\App\Admin\Bookings;

use Livewire\Component;

class Today extends Component
{
	public $bookingType;
	public $showBookingDetails;
	protected $listeners = ['showList' => 'resetForm'];

	public function render()
	{
		return view('livewire.app.admin.bookings.today');
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

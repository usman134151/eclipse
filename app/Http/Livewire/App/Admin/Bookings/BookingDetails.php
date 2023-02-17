<?php

namespace App\Http\Livewire\App\Admin\Bookings;

use Livewire\Component;

class BookingDetails extends Component
{

	public function render()
	{
		return view('livewire.app.admin.bookings.booking-details');
	}

	public function mount()
	{}

	public function showList()
	{
		$this->emit('showList');
	}
}
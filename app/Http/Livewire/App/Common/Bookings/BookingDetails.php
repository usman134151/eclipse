<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;

class BookingDetails extends Component
{

	public function render()
	{
		return view('livewire.app.common.bookings.booking-details');
	}

	public function mount()
	{}

	public function showList()
	{
		$this->emit('showList');
	}
}
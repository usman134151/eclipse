<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;

class BookingDetails extends Component
{
	public $component = 'booking-details';

	public function render()
	{
		return view('livewire.app.common.bookings.booking-details', ['component' => $this->component,]);
	}

	public function mount()
	{}

	public function showList()
	{
		$this->emit('showList');
	}

	public function switch($component)
	{
		$this->component = $component;
	}
}
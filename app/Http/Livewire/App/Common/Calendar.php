<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Booking;
use Livewire\Component;

class Calendar extends Component
{
	public $events = [];

	public function render()
	{
		$this->events = $this->getCalendarEvents();

		return view('livewire.app.common.calendar');
	}

	public function mount()
	{}

	// Updated by Sohail Asghar to get booking events for dashboard calendar
	private function getCalendarEvents()
	{
		$events = Booking::select('booking_number', 'booking_start_at', 'booking_end_at', 'phone')
			->get();

		$keys = ['title', 'start', 'end', 'phone'];
		$newEvents = [];
		$count = 0;

		foreach($events as $key => $event)
		{
			$newEvent = collect($event);
			foreach($newEvent as $index => $item)
			{
				$newKey = $keys[$count++];
				$newEvents[$key][$newKey] = $item;
			}
			$count = 0;
		}

		return json_encode($newEvents);
	}
	// End of update by Sohail Asghar
}

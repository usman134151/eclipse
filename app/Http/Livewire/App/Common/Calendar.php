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
		$description = '';
		$tooltipData = [
			[
				'label' => 'English to French Interpreting',
				'time' => '11:00 AM To 05:00 PM'
			],
			[
				'label' => 'English to German Interpreting',
				'time' => ''
			],
			[
				'label' => 'English to Arabic Sign Language',
				'time' => ''
			],
			[
				'label' => 'Inperson Dayrate (new)',
				'time' => '11:00 AM To 05:00 PM'
			],
		];

		$events = Booking::select('booking_number', 'booking_start_at', 'booking_end_at')
			->get();

		$keys = ['title', 'start', 'end'];
		$newEvents = [];
		$count = 0;

		foreach($events as $key => $event)
		{
			$newEvent = collect($event);
			foreach($newEvent as $item)
			{
				$newKey = $keys[$count++];
				$newEvents[$key][$newKey] = $item;
			}
			$count = 0;
		}

		foreach($newEvents as $key => $item)
		{
			// $date = Carbon::parse($newEvents[$key]['start'])->format('F d, Y');
			// $description .= '<div class="card" style="width: 18rem;">';
			// $description .= '<div class="card-header text-black fw-semibold">' . $date . '</div>';
			$description .= ' <ul class="list-group">';
			foreach($tooltipData as $tooltip)
			{
				$description .= '<li class="list-group-item fw-semibold rounded mb-2" style="color: purple;"><p class="mb-1">'. $tooltip["label"] .'</p><p class="mb-0">'. $tooltip["time"] .'</p></li>';
			}
			$description .= '</ul></div>';
			$newEvents[$key]['description'] = $description;
			$newEvents[$key]['backgroundColor'] = '#567ABF';
			$description = '';
		}

		return json_encode($newEvents);
	}
	// End of update by Sohail Asghar
}

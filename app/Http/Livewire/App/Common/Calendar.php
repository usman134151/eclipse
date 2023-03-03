<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\Specialization;

class Calendar extends Component
{
	public $events = '';

	public function render()
	{
		$events = Specialization::select('id', 'name', 'created_at')->get();
		$keys = ['id', 'title', 'start'];
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

		$this->events = json_encode($newEvents);

		return view('livewire.app.common.calendar');
	}

	public function mount()
	{}

	public function getevent()
	{
		$events = Specialization::select('id', 'name', 'added_by')->get();

		return json_encode($events);
	}

	public function addEvent($event)
	{
		$input['name'] = $event['title'];
		$input['added_by'] = $event['start'];
		Specialization::create($input);
		$this->emit('refreshCalendar');
	}

	public function eventDrop($event, $oldEvent)
	{
		$eventdata = Specialization::find($event['id']);
		$eventdata->id = $event['id'];
		$eventdata->save();
		$this->emit('refreshCalendar');
	}
}

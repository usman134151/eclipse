<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Booking;
use App\Models\Tenant\ProviderSpecificSchedule;
use App\Models\Tenant\Schedule;
use Livewire\Component;

class Calendar extends Component
{
	public $events = [], $model_id=0,$model_type=0,$displayAvailability=false;
	public $holidays =[], $specific=[];

	public function render()
	{

		if ($this->displayAvailability)
			$this->events=	$this->getUserSchedule();
		else
		$this->events = $this->getCalendarEvents();

		return view('livewire.app.common.calendar');
	}

	public function mount()
	{
	}

	// Updated by Sohail Asghar to get booking events for dashboard calendar
	private function getCalendarEvents()
	{
		// $description = '';
		// $tooltipData = [
		// 	[
		// 		'label' => 'English to French Interpreting',
		// 		'time' => '11:00 AM To 05:00 PM'
		// 	],
		// 	[
		// 		'label' => 'English to German Interpreting',
		// 		'time' => ''
		// 	],
		// 	[
		// 		'label' => 'English to Arabic Sign Language',
		// 		'time' => ''
		// 	],
		// 	[
		// 		'label' => 'Inperson Dayrate (new)',
		// 		'time' => '11:00 AM To 05:00 PM'
		// 	],
		// ];

		$events = Booking::select('booking_number', 'booking_title', 'booking_start_at', 'booking_end_at')
			->get()
			->toArray();

		// $keys = ['title', 'start', 'end'];
		$newEvents = [];
		// $count = 0;

		foreach($events as $key => $event)
		{
			// Updated by Sohail Asghar to update calendar event title
			extract($events[$key]);
			if (! empty($booking_title))
			{
				$newEvents[$key]['title'] = $booking_number . ': ' . $booking_title;
			}
			else
			{
				$newEvents[$key]['title'] = $booking_number;
			}
			
			$newEvents[$key]['start'] = $booking_start_at;
			$newEvents[$key]['end'] = $booking_end_at;
			// End of update by Sohail Asghar

			// $newEvent = collect($event);
			// foreach($newEvent as $item)
			// {
				// $newKey = $keys[$count++];
				// $newEvents[$key][$newKey] = $item;
			// }
			// $count = 0;
		}

		// foreach($newEvents as $key => $item)
		// {
		// 	$date = Carbon::parse($newEvents[$key]['start'])->format('F d, Y');
		// 	$description .= '<div class="card" style="width: 18rem;">';
		// 	$description .= '<div class="card-header text-black fw-semibold">' . $date . '</div>';
		// 	$description .= ' <ul class="list-group">';
		// 	foreach($tooltipData as $tooltip)
		// 	{
		// 		$description .= '<li class="list-group-item fw-semibold rounded mb-2" style="color: purple;"><p class="mb-1">'. $tooltip["label"] .'</p><p class="mb-0">'. $tooltip["time"] .'</p></li>';
		// 	}
		// 	$description .= '</ul></div>';
		// 	$newEvents[$key]['description'] = $description;
		// 	$newEvents[$key]['backgroundColor'] = '#567ABF';
		// 	$description = '';
		// }

		return json_encode($newEvents);
	}
	// End of update by Sohail Asghar

	public function getUserSchedule(){
		$events = [];
		$schedule = Schedule::where('model_id', $this->model_id)->where('model_type', $this->model_type)->get()->first();
		if($schedule){
			$daysOfWeek = ['Sunday'=>'0','Monday'=>'1','Tuesday'=>'2','Wednesday'=>'3','Thursday'=>'4','Friday'=>'5','Saturday'=>'6'];
			$activeDays = json_decode($schedule->working_days,true);
			foreach($schedule->timeslots->toArray() as $key=>  $timeslot){
				$events[$key]['className'] = 'general'; 

				$events[$key]['daysOfWeek'] = $daysOfWeek[$timeslot['timeslot_day']];	//recurring on week days
				$events[$key]['startTime'] = date_format(date_create($timeslot['timeslot_start_time']), "H:i:s");
				$events[$key]['endTime'] = date_format(date_create($timeslot['timeslot_end_time']), "H:i:s");
				$events[$key]['title'] = date_format(date_create($timeslot['timeslot_start_time']), "h:i A") . " to " . date_format(date_create($timeslot['timeslot_end_time']), "h:i A") ;
				if(!$activeDays[$timeslot['timeslot_day']])	//if day is inactive - set color gray
				$events[$key]['color'] = '#6C757D';
				elseif($timeslot['timeslot_type']==1)	//business hours
				$events[$key]['color'] = '#198754';
				else									//after hours
					$events[$key]['color'] = '#FFC107';

			}

			$count = count($events);

			foreach ($schedule->holidays->toArray() as  $holiday) {
				$events[$count]['className'] =' holiday fc-nonbusiness';
				$events[$count]['extendedProps'] = ['type'=>'holiday'];
				$events[$count]['overlap'] = false;



				$events[$count]['start'] = date_format(date_create($holiday['holiday_date']), "Y-m-d");
				
				$events[$count]['allDay'] = true;
				$events[$count]['title'] = 'Holiday';
				$events[$count]['color'] = '#6C757D';
				$events[$count]['rendering'] = 'background';
				
				$count++;
			}
			


			$this->holidays = $schedule->holidays->pluck('holiday_date');

			$specifiSchedule = ProviderSpecificSchedule::where('user_id',$this->model_id)->whereRaw("scheduled_date BETWEEN (ADDDATE(CURDATE(), INTERVAL -1 YEAR)) AND  (ADDDATE(CURDATE(), INTERVAL 1 YEAR))")->get();
			if(count($specifiSchedule)){
				$i = count($events);
				foreach($specifiSchedule->toArray() as  $ss){
					$events[$i]['className'] = ' specific'; 

					$events[$i]['extendedProps'] = ['type' => 'specific'];
					$events[$i]['overlap'] = false;


					$events[$i]['title'] = date_format(date_create($ss['from_time']), "h:i A") . " to " . date_format(date_create($ss['to_time']), "h:i A");
					$events[$i]['start'] =  date_format(date_create($ss['scheduled_date']), "Y-m-d")." ". date_format(date_create($ss['from_time']), "H:i:s");
					$events[$i]['end'] = date_format(date_create($ss['scheduled_date']), "Y-m-d") . " " . date_format(date_create($ss['to_time']), "H:i:s");
					$events[$i]['color'] = '#20c997';

					$i++;
				
				}
				$this->specific = $specifiSchedule->pluck('scheduled_date');
			}
		}
		// dd($events);
		return json_encode($events);

      }

	}


	


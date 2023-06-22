<?php
namespace app\Services\App;


use App\Models\Tenant\Schedule;
use App\Models\Tenant\ScheduleTimeslot;
use App\Models\Tenant\ScheduleHoliday;
use Carbon\Carbon;
class ScheduleService{

    public function storeSchedule($schedule){
    
       
       return $schedule->save();
    }

    public static function getSlots($scheduleId){
        $timeslots=[
            'business_hours'=>[],
            'after_business_hours'=>[]
        ];
        $timeslotsData = ScheduleTimeslot::where('schedule_id', $scheduleId)->get();

       

        foreach ($timeslotsData as $timeslot) {
            $startTime = Carbon::parse($timeslot->timeslot_start_time)->format('g:i A');
            $endTime = Carbon::parse($timeslot->timeslot_end_time)->format('g:i A');

            $slot = [
                'day' => $timeslot->timeslot_day,
                'start_time' => $startTime,
                'end_time' => $endTime,
                'type' => $timeslot->timeslot_type,
                'id'=>$timeslot->id
            ];

            if ($timeslot->timeslot_type == 1) {
                $timeslots['business_hours'][] = $slot;
            } elseif ($timeslot->timeslot_type == 2) {
                $timeslots['after_business_hours'][] = $slot;
            }
        }
        return $timeslots;
    }


}

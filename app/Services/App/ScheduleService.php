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

    public static function getSlots($scheduleId,$timeFormat){
        $timeslots=[
            'business_hours'=>[],
            'after_business_hours'=>[]
        ];
        $timeslotsData = ScheduleTimeslot::where('schedule_id', $scheduleId)->get();

       

        foreach ($timeslotsData as $timeslot) {
            $startTime = '';
            $endTime = '';

            if ($timeFormat == 1) {
                $startTime = Carbon::parse($timeslot->timeslot_start_time)->format('g:i A');
                $endTime = Carbon::parse($timeslot->timeslot_end_time)->format('g:i A');
            } else if ($timeFormat == 2) {
                $startTime = Carbon::parse($timeslot->timeslot_start_time)->format('H:i');
                $endTime = Carbon::parse($timeslot->timeslot_end_time)->format('H:i');
            }

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

    public static function saveHoliday($holidayDate,$repeatYearly,$scheduleId){
        // Convert the provided date to a DateTime object
    //    dd($holidayDate);
        $date = Carbon::createFromFormat('m/d/Y', $holidayDate);
        // Convert the holiday date to MySQL-supported format (Y-m-d)
        $holidayDate = $date->format('Y-m-d');
            
        // Get the day of the week from the DateTime object
        $dayOfWeek = $date->format('l');

        $attributes = [
           
            'holiday_day'=>$dayOfWeek,
            'repeat_yearly'=>$repeatYearly
        ];
    
        $holiday = ScheduleHoliday::updateOrCreate(
            ['holiday_date' => $holidayDate, 'schedule_id' => $scheduleId],
            $attributes
        );
    }


}

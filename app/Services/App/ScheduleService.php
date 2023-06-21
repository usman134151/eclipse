<?php
namespace app\Services\App;


use App\Models\Tenant\Schedule;
use App\Models\Tenant\ScheduleTimeSlot;
use App\Models\Tenant\ScheduleHoliday;
class ScheduleService{

    public function storeSchedule($schedule){
    
       
       return $schedule->save();
    }


}

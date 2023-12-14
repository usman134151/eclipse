<?php

namespace App\Http\Livewire\App\Common\Setup;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\ScheduleTimeslot;
use App\Models\Tenant\ScheduleHoliday;
use App\Services\App\ScheduleService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class BusinessHoursSetup extends Component
{
    public $schedule;
    public $model_id,$model_type,$timeslot_end_type='pm',$timeslot_start_type='am';
    public $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    public $holidays;
    protected $listeners = ['getRecord','saveSchedule1','updateDay','updateVal'],$rules=[];
   
    public $timeslot=[];
    public $timeslots=[
        'business_hours'=>[],
        'after_business_hours'=>[]
    ];
	public $setupValues = [
		
		'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',4,'setup_value_label',false,'schedule.timezone_id', '','timezone_id',4]]
	
	];
    public $holidayDate;
    public $repeatYearly;
    public $isForm=false;
    public function render()
    {  $this->refreshSlots();
        
        return view('livewire.app.common.setup.business-hours-setup');
    }

    public function rules(){

        $this->rules = [
             'schedule.timezone_id' => 'required',
             'schedule.time_format'=>'required',
         ];
         foreach ($this->days as $day) {
            $this->rules['schedule.working_days.'.$day] = 'nullable';
         }

         foreach($this->timeslot as $key=>$val){
            $this->rules['timeslot.'.$key] = 'nullable';
         }
        
         return $this->rules;
    }

    public function mount()
    {
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->schedule=new Schedule;
        $this->schedule->working_days=[];
        $this->schedule->time_format=1;


        $workingDays = [];
        $this->holidays=[];

        foreach ($this->days as $day) {
            $workingDays[$day] = true;
        }
    
        $this->schedule->setWorkingDays($workingDays);
       
       
    }

    function getRecord($scheduleId,$isForm=false){
       
        $this->schedule = Schedule::findOrFail($scheduleId);

        $this->schedule->working_days = json_decode($this->schedule->working_days, true);
        
        if (!is_array($this->schedule->working_days) || count($this->schedule->working_days) === 0) {
            $workingDays = [];
        
            foreach ($this->days as $day) {
                $workingDays[$day] = true;
            }
        
            $this->schedule->setWorkingDays($workingDays);
        }
      $this->isForm=$isForm;  
      $this->resetTimeSlot();  
      $this->getHolidays();
    }

    //to store timeslots and refresh schedule
    public function addSlot()
    {
        $this->schedule->save();
    
        $startHour = $this->timeslot['timeslot_start_hour'];
        $startMin = $this->timeslot['timeslot_start_min'];
        $startType = $this->timeslot_start_type;
    
        $endHour = $this->timeslot['timeslot_end_hour'];
        $endMin = $this->timeslot['timeslot_end_min'];
        $endType = $this->timeslot_end_type;
        if($this->schedule->time_format==1){

            if ($startHour > 12 || $endHour > 12) {
                // Start hour &  end hour cannot be greater than 12
                // You can handle the validation error here, e.g., show an error message or perform some other action
                $this->addError('timeValidation', 'Invalid time range. Time should be in a 12-hour format and within valid range.');
                return;
            }

            // Convert start and end hours to 24-hour format if the start type or end type is set to PM
            if (strtolower($startType) === 'pm') {
                $startHour = ($startHour % 12) + 12;
            }
            if (strtolower($endType) === 'pm') {
                $endHour = ($endHour % 12) + 12;
            }
        }

    
        // Check if the start hour is less than the end hour
        if ($startHour > $endHour) {
            // Start hour cannot be greater than end hour
            // You can handle the validation error here, e.g., show an error message or perform some other action
            $this->addError('timeValidation', 'Invalid time range. The start time must be before the end time.');
            return;
        } elseif (($startHour === $endHour) && ($startMin >= $endMin)) {
            // If start hour is equal to end hour, start minute cannot be greater than end minute
            // You can handle the validation error here, e.g., show an error message or perform some other action
            $this->addError('timeValidation', 'Invalid time range. The start time must be before the end time.');
            return;
        } 

        if($startHour < 0 || $startHour > 23 || $startMin < 0 || $startMin > 59 || $endHour < 0 || $endHour > 23 || $endMin < 0 || $endMin > 59){
            $this->addError('timeValidation', 'Invalid time range. Time should be in a 24-hour format and within valid range');
            return;
        }


        // Create Carbon instances for start time and end time
        $startTime = Carbon::createFromTime($startHour, $startMin);
        $endTime = Carbon::createFromTime($endHour, $endMin);

         // Check if the new timeslot overlaps with any existing timeslots in the schedule
         $existingSlots = ScheduleTimeslot::where('schedule_id', $this->schedule->id)->where('timeslot_day', $this->timeslot['timeslot_day'])->get();

         foreach ($existingSlots as $existingSlot) {
             $existingStartTime = $existingSlot->timeslot_start_time;
             $existingEndTime = $existingSlot->timeslot_end_time;

             $existingStartTimeCarbon = Carbon::parse($existingStartTime);
             $existingEndTimeCarbon = Carbon::parse($existingEndTime);
         
             // Check for overlapping conditions
             if (($startTime < $existingEndTimeCarbon && $endTime > $existingStartTimeCarbon)
                 || ($endTime > $existingStartTimeCarbon && $startTime < $existingEndTimeCarbon)) {
                 $this->addError('timeValidation', 'Time parameters should not overlap with existing slots.');
                 return;
             }

             if ($startTime <= $existingStartTimeCarbon && $endTime >= $existingEndTimeCarbon) {
                $this->addError('timeValidation', 'Time parameters should not overlap with existing slots.');
                return;
            }        
         
             // Check for overlap: If new timeslot's start time falls between an existing timeslot's start and end time
             if ($startTime->between($existingStartTime, $existingEndTime) || $endTime->between($existingStartTime, $existingEndTime)) {
                 $this->addError('timeValidation', 'Time parameters should not overlap with existing slots.');
                 return;
             }
         
             // Check for complete overlap: If new timeslot completely overlaps with an existing timeslot
             if ($startTime >= $existingStartTime && $endTime <= $existingEndTime) {
                 $this->addError('timeValidation', 'Time parameters should not overlap with existing slots.');
                 return;
             }
         }
     
    
        // Insert the timeslot into the database
        ScheduleTimeslot::create([
            'timeslot_type' => $this->timeslot['timeslot_type'],
            'timeslot_day' => $this->timeslot['timeslot_day'],
            'timeslot_start_time' => $startTime,
            'timeslot_end_time' => $endTime,
            'schedule_id' => $this->schedule->id
        ]);
    
        // Reset the timeslot array
        // $this->resetTimeSlot();
    }

    public function addTimeParametersToAllDays()
    {
        $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        foreach ($daysOfWeek as $day) {
            $this->timeslot['timeslot_day'] = $day;
            $this->addSlot();
        }
    }
    
    public function updateVal($attrName, $val)
	{
       $this->schedule[$attrName]=$val;
    


	}

    public function resetTimeSlot(){
        $this->timeslot=['timeslot_type'=>1,'timeslot_day'=>'Monday','timeslot_end_min'=>'00','timeslot_start_hour'=>"9",'timeslot_start_min'=>'00','timeslot_end_hour'=>"18"];
    }

    public function refreshSlots()
    {
      $this->timeslots=ScheduleService::getSlots($this->schedule->id,$this->schedule->time_format);
    }
    public function deleteSlot($timeslotId)
    {
        // Find the timeslot by its ID
        $timeslot = ScheduleTimeslot::find($timeslotId);
    
        // Check if the timeslot exists
        if ($timeslot) {
            // Delete the timeslot
            $timeslot->delete();
            
            // Show a success message or perform other actions after successful deletion
        } else {
            // The timeslot doesn't exist, show an error message or handle the scenario as needed
            return;
        }
        $this->refreshSlots();
    }

    public function saveSchedule(){
       
        $this->schedule->save();
        if($this->schedule)
        {
            Session::put('business_timezone_id' , $this->schedule->timezone_id  ?  $this->schedule->timezone_id: 61); // 61 => us
			Session::put('business_time_format' , $this->schedule->time_format == 1 ? 12 : 24);       
        }
        $model=null;
        if ($this->model_type == 1)
            $model = "system";
        if($this->model_type==2)
            $model = "company";
        if ($this->model_type == 3)
        $model = "user";
        elseif($this->model_type==4)
            $model= 'department';

        addLogs([
            'action_by'     => \Auth::id(),
            'action_to'     => $this->model_id,
            'item_type'     => $model,
            'type'          => 'update',
            'message'         => "Schedule updated by " . \Auth::user()->name,
            'ip_address'     => \request()->ip(),
        ]);

    }

    public function saveHoliday(){
       
        $this->saveSchedule();
        ScheduleService::saveHoliday($this->holidayDate,$this->repeatYearly,$this->schedule->id);
        $this->getHolidays();
    }

    public function updateDay($val){
        $this->holidayDate=$val;
      
    }

    public function getHolidays()
    {
        $holidays = ScheduleHoliday::where('schedule_id', $this->schedule->id)->orderBy('holiday_date')->get();

        $this->holidays = [];

        foreach ($holidays as $holiday) {
            $date = Carbon::createFromFormat('Y-m-d', $holiday->holiday_date);
            $formattedDate = $date->format('m/d/Y');

            $this->holidays[] = [
                'id' => $holiday->id,
                'holiday_date' => $formattedDate,
                'holiday_day' => $holiday->holiday_day,
                // Add other desired fields from the ScheduleHoliday model
            ];
        }
    }
    public function deleteHoliday($holidayId)
    {
        
        $holiday = ScheduleHoliday::find($holidayId);

        if ($holiday) {
            $holiday->delete();
        }
        $this->getHolidays();
    }


    

}

<?php

namespace App\Http\Livewire\App\Common\Setup;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\ScheduleTimeslot;
use App\Services\App\ScheduleService;
use Carbon\Carbon;



class BusinessHoursSetup extends Component
{
    public $schedule;
    public $model_id,$model_type,$timeslot_end_type='pm',$timeslot_start_type='am';
    public $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
   
    protected $listeners = ['getRecord','saveSchedule'],$rules=[];
   
    public $timeslot=[];
    public $timeslots=[
        'business_hours'=>[],
        'after_business_hours'=>[]
    ];
	public $setupValues = [
		
		'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',4,'setup_value_label',false,'schedule.timezone_id', '','timezone_id',4]]
	
	];
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
        } elseif ($startHour === $endHour && $startMin > $endMin) {
            // If start hour is equal to end hour, start minute cannot be greater than end minute
            // You can handle the validation error here, e.g., show an error message or perform some other action
            $this->addError('timeValidation', 'Invalid time range. The start time must be before the end time.');
            return;
        }
    
        // Create Carbon instances for start time and end time
        $startTime = Carbon::createFromTime($startHour, $startMin);
        $endTime = Carbon::createFromTime($endHour, $endMin);
    
        // Insert the timeslot into the database
        ScheduleTimeslot::create([
            'timeslot_type' => $this->timeslot['timeslot_type'],
            'timeslot_day' => $this->timeslot['timeslot_day'],
            'timeslot_start_time' => $startTime,
            'timeslot_end_time' => $endTime,
            'schedule_id' => $this->schedule->id
        ]);
    
        // Reset the timeslot array
        $this->resetTimeSlot();
    }
    

    public function resetTimeSlot(){
        $this->timeslot=['timeslot_type'=>1,'timeslot_day'=>'Monday','timeslot_end_min'=>'00','timeslot_start_hour'=>"9",'timeslot_start_min'=>'00','timeslot_end_hour'=>"18"];
    }

    public function refreshSlots()
    {
      $this->timeslots=ScheduleService::getSlots($this->schedule->id);
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
    }
    

}

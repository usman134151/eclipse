<?php

namespace App\Http\Livewire\App\Common\Setup;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\Schedule;

class BusinessHoursSetup extends Component
{
    public $schedule;
    public $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

    protected $listeners = ['getCompany'];
    protected $rules = [
        'schedule.schedule_timezone' => 'required',
    ];
	public $setupValues = [
		
		'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',4,'setup_value_label',false,'schedule.schedule_timezone', '','schedule_timezone',4]]
	
	];
    public function render()
    {
        return view('livewire.app.common.setup.business-hours-setup');
    }

    public function mount()
    {
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->schedule=new Schedule;
        $this->schedule->working_days=[];

        $workingDays = [];

        foreach ($this->days as $day) {
            $workingDays[$day] = true;
        }
    
        $this->schedule->setWorkingDays($workingDays);
       
    }

    function getRecord($record){
        $this->schedule=$record;
        if(is_null($this->schedule->working_days)){

            foreach ($this->days as $day) {
                $this->schedule->working_days[$day]=true;
            }
            
        }
        else{
            $this->schedule->working_days= json_decode($this->schedule->working_days, true);
        }
        
    }



}

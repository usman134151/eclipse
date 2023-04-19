<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;
use App\Helpers\SetupHelper;

class Booknow extends Component
{
    public $component = 'requester-info';
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $dates=[[
        'set_time_zone'=>'',
        'start_date'=>'',
        'start_time'=>'',
        'end_time'=>'',
        'Total_Billable_Service_duration'=>''

    ]];
    public $setupValues = [
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'timezone','','timezone']],
        'accomodations' => ['parameters' => ['Accommodation', 'id', 'name', '', '', 'name', false, 'accommodation','','accommodation']]
	];

    public $services=[
        [
            'meetings' =>
            [
                ['meeting_name' => '','phone_number' => '','access_code' => ''] //updated by Amna Bilal to define meeting links array within services array
            ]
        ]
    ];
        public function render()
    {
        return view('livewire.app.common.bookings.booknow');
    }

    public function mount()
    {
        $this->loadSetupValues();

    }

    function showForm()
    {
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }
    public function switch($component)
	{
		$this->component = $component;
	}
    public function addMeeting($serviceIndex)
    {
        $this->services[$serviceIndex]['meetings'][] = [
            'meeting_name' => '',
            'phone_number' => '',
            'access_code' => '',
        ]; //updated by Amna Bilal to add new item in meetings array within service array on index passed
    }
    public function removeMeeting($index,$serviceIndex)
    {
        unset($this->services[$serviceIndex]['meetings'][$index]);
        $this->services[$serviceIndex]['meetings'] = array_values($this->services[$serviceIndex]['meetings']); //updated by Amna Bilal to meeting remove link from service array
    }
    public function adddate(){
        $this->dates[] = [
            'set_time_zone'=>'',
            'start_date'=>'',
            'start_time'=>'',
            'end_time'=>'',
            'Total_Billable_Service_duration'=>''
        ];
    }
    public function removeDate($index)
    {
        unset($this->dates[$index]);
        $this->dates = array_values($this->dates);
    }
    public function addService(){
        $this->services[]= ['meetings' => [['meeting_name' => '','phone_number' => '','access_code' => '']]]; //updated by Amna Bilal to define meeting links array within services array

    }
    public function removeServices($index)
    {
        unset($this->services[$index]);
        $this->services = array_values($this->services);
    }
    public function loadSetupValues(){ //added by shanila to add function to get all setup values rendered on mount
		foreach($this->setupValues as $key=>$setupValue){

			$this->setupValues[$key]['rendered'] = SetupHelper::createDropDown($setupValue['parameters'][0], $setupValue['parameters'][1],$setupValue['parameters'][2], $setupValue['parameters'][3], $setupValue['parameters'][4], $setupValue['parameters'][5], $setupValue['parameters'][6],$setupValue['parameters'][7],$setupValue['parameters'][8],$setupValue['parameters'][9]);
		}


	}
}

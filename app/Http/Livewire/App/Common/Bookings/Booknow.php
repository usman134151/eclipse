<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;

class Booknow extends Component
{
    public $component = 'requester-info';
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $meetings = [[
        'meeting_name' => '',
        'phone_number' => '',
        'access_code' => '',
    ]];
    public $dates=[[
        'set_time_zone'=>'',
        'start_date'=>'',
        'start_time'=>'',
        'end_time'=>'',
        'Total_Billable_Service_duration'=>''

    ]];
    public $services=[[]];
        public function render()
    {
        return view('livewire.app.common.bookings.booknow');
    }

    public function mount()
    {


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
    public function addMeeting()
    {
        $this->meetings[] = [
            'meeting_name' => '',
            'phone_number' => '',
            'access_code' => '',
        ];
    }
    public function adddate(){
        $this->dates[] = [
            'meeting_name' => '',
            'phone_number' => '',
            'access_code' => '',
        ];
    }
    public function addService(){
        $this->services[]=[];
    }
}

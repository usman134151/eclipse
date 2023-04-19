<?php

namespace App\Http\Livewire\App\Customer\Booking;

use Livewire\Component;
use App\Helpers\SetupHelper;

class Booknow extends Component
{
    public $component = 'requester-info';
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $setupValues = [
        'industries'=>['parameters'=>['Industry', 'id', 'name', '', '', 'name', false, 'industry',	'','industry']],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'timezone','','timezone']],
        'accomodations' => ['parameters' => ['Accommodation', 'id', 'name', '', '', 'name', false, 'accommodation','','accommodation']]
	];

    public function render()
    {
        return view('livewire.app.customer.booking.booknow');
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
    public function loadSetupValues(){ //added by Amna Bilal function to get all setup values rendered on mount
		foreach($this->setupValues as $key=>$setupValue){

			$this->setupValues[$key]['rendered'] = SetupHelper::createDropDown($setupValue['parameters'][0], $setupValue['parameters'][1],$setupValue['parameters'][2], $setupValue['parameters'][3], $setupValue['parameters'][4], $setupValue['parameters'][5], $setupValue['parameters'][6],$setupValue['parameters'][7],$setupValue['parameters'][8],$setupValue['parameters'][9]);
		}


	}

}

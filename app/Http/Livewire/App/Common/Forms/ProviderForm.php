<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;

class ProviderForm extends Component
{
    public $ethnicity;
    public $timezone;
    public $gender;
    public $languages;

	public $component = 'profile';
    public $setupValues = [
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'languages', '','languages']],
        'ethnicities' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 3, 'setup_value_label', false,'ethnicity','','ethnicity']],
        'gender' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 2, 'setup_value_label', false,'gender','','gender']],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'timezone','','timezone']],
        'countries' => ['parameters' => ['Country', 'id', 'name', '', '', 'name', false, 'country','','country']]
	];

	public function render()
	{
		return view('livewire.app.common.forms.provider-form');
	}
    public function mount(){
		$this->loadSetupValues();

	}

	public function showList()
	{
		$this->emit('showList');
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

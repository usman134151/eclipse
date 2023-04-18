<?php

namespace App\Http\Livewire\App\Admin\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;

class AddCompany extends Component
{
	public $component = 'company-info';
	public $phoneNumbers=[['phone_title'=>'','phone_number'=>'']];
	public $setupValues = [
		'industries'=>['parameters'=>['Industry', 'id', 'name', '', '', 'name', false, 'industry',	'','industry']],
		
	];
	public function showList()
	{
		$this->emit('showList');
	}

	public function render()
	{
		return view('livewire.app.admin.forms.add-company');
	}

	public function mount(){
		$this->loadSetupValues();

	}

	public function switch($component)
	{
		$this->component = $component;
	}

	//front function

	public function addPhone(){
		$this->phoneNumbers[]=['phone_title'=>'','phone_number'=>''];
	}
	public function removePhone($index)
    {
        unset($this->phoneNumbers[$index]);
        $this->phoneNumbers = array_values($this->phoneNumbers);
    }

	public function loadSetupValues(){ //added by Amna Bilal function to get all setup values rendered on mount
		foreach($this->setupValues as $key=>$setupValue){
			
			$this->setupValues[$key]['rendered'] = SetupHelper::createDropDown($setupValue['parameters'][0], $setupValue['parameters'][1],$setupValue['parameters'][2], $setupValue['parameters'][3], $setupValue['parameters'][4], $setupValue['parameters'][5], $setupValue['parameters'][6],$setupValue['parameters'][7],$setupValue['parameters'][8],$setupValue['parameters'][9]);
		}

		
	}
}

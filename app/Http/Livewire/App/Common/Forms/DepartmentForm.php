<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;

class DepartmentForm extends Component
{
    public $phoneNumbers=[['phone_title'=>'','phone_number'=>'']];
	public $component = 'department-info';
    public $setupValues = [
        'industries'=>['parameters'=>['Industry', 'id', 'name', '', '', 'name', false, 'department.industry_id',	'','industry',0 ]],
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'department.languages_id', '','languages',1]]
	];
	public function showList()
	{
		$this->emit('showList');
	}

	public function mount()
	{
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
    }

	public function switch($component)
	{
		$this->component = $component;
	}

	public function render()
	{
		return view('livewire.app.common.forms.department-form');
	}
    public function addPhone(){
		$this->phoneNumbers[]=['phone_title'=>'','phone_number'=>''];
	}
	public function removePhone($index)
    {
        unset($this->phoneNumbers[$index]);
        $this->phoneNumbers = array_values($this->phoneNumbers);
    }
}

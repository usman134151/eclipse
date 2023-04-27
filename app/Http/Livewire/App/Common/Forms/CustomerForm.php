<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
class CustomerForm extends Component
{
    public $user;
    public $ethnicity;
    public $timezone;
    public $gender;
    public $languages;
	public $component = 'customer-info';
    public $setupValues = [
        'companies'=>['parameters'=>['Company', 'id', 'name', '', '', 'name', false, 'customer.company_id','','companies',0]],
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'customer.languges_id','','languages',1]],
        'ethnicities' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 3, 'setup_value_label', false,'customer.ethnicity_id','','ethnicity',2]],
        'gender' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 2, 'setup_value_label', false,'customer.gender_id','','gender',3]],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'customer.timezone_id','','timezone',4]],
	];

	public function render()
	{
		return view('livewire.app.common.forms.customer-form');
	}
    public function mount(User $user){
		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->user=$user;

	}

	public function showList()
	{
		$this->emit('showList');
	}

	public function switch($component)
	{
		$this->component = $component;
	}
}

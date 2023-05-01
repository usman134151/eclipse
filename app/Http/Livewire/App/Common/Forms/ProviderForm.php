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
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'provider.language_id', '','languages',0]],
        'ethnicities' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 3, 'setup_value_label', false,'provider.ethnicity_id','','ethnicity',1]],
        'gender' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 2, 'setup_value_label', false,'provider.gender_id','','gender',2]],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'provider.timezone_id','','timezone',3]],
        'countries' => ['parameters' => ['Country', 'id', 'name', '', '', 'name', false, 'provider.country_id','','country',4]]
	];
   public $step = 1;
	public function render()
	{
		return view('livewire.app.common.forms.provider-form');
	}
    public function mount(){
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);

	}

	public function showList()
	{
		$this->emit('showList');
	}

	public function switch($component)
	{
		$this->component = $component;
	}
    public function save(){
        $this->step = 2;
    }
    public function ProvideService(){
        $this->step = 3;
    }
}

<?php

namespace App\Http\Livewire\App\Provider;

use Livewire\Component;
use App\Helpers\SetupHelper;

class Profile extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $component = 'profile';
    public $setupValues = [
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'profile.languages_id', '','languages',0]],
        'ethnicities' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 3, 'setup_value_label', false,'profile.ethnicity_id','','ethnicity',1]],
        'gender' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 2, 'setup_value_label', false,'profile.gender_id','','gender',2]],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'profile.timezone_id','','timezone',3]],
        'countries' => ['parameters' => ['Country', 'id', 'name', '', '', 'name', false, 'profile.country_id','','country',4]]
	];
    public function render()
    {
        return view('livewire.app.provider.profile');
    }

    public function mount()
    {
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);

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

}

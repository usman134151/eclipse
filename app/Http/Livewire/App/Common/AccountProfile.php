<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;

class AccountProfile extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $user;
    public $setupValues = [
        'ethnicities' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 3, 'setup_value_label', false,'staff.ethnicity_id','','ethnicity',0]],
        'gender' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 2, 'setup_value_label', false,'staff.gender_id','','gender',1]],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'staff.timezone_id','','timezone',2]],
        'countries' => ['parameters' => ['Country', 'id', 'name', '', '', 'name', false, 'staff.country_id','','country',3]],
        'roles_permissions' => ['parameters' => ['SystemRole', 'system_role_id','system_role_name', '', '', '', false, 'staff.system_roles_id','','system_roles',4]]
	];

    public function render()
    {
        return view('livewire.app.common.account-profile');
    }

    public function mount(User $user)
    {
       
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->user=$user;
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}
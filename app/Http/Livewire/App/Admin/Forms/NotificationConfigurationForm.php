<?php

namespace App\Http\Livewire\App\Admin\Forms;
use App\Helpers\SetupHelper;
use Livewire\Component;
use App\Models\Tenant\NotificationTemplates;

class NotificationConfigurationForm extends Component
{
	public $notification;
	protected $listeners = ['editRecord' => 'edit'];

	public $setupValues = [
        'roles'=>['parameters'=>['SystemRole', 'system_role_id', 'system_role_name', '', '', 'system_role_name', false, 'roles.industry_id','','roles',1]],
	];

	public function mount(NotificationTemplates $notification){
		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->notification=$notification;
    }


	public function showList($message="")
	{
		$this->emit('showList',$message);
	}

	public function edit(NotificationTemplates $notification){
        $this->notification=$notification;    
       
    }


	public function render()
	{
		return view('livewire.app.admin.forms.notification-configuration-form');
	}
}

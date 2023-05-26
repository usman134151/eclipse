<?php

namespace App\Http\Livewire\App\Admin\Forms;
use App\Helpers\SetupHelper;
use Livewire\Component;
use App\Models\Tenant\NotificationTemplates;
use Illuminate\Validation\Rule;
use App\Services\App\NotificationService;



class NotificationConfigurationForm extends Component
{
	public $notification;
	protected $listeners = ['editRecord' => 'edit' ,'updateVal'];

	public $setupValues = [
        'roles'=>['parameters'=>['SystemRole', 'id', 'system_role_name', '', '', 'system_role_name', false, 'notification.role_id','','roles',1]],
	];

	public function mount(NotificationTemplates $notification){
        $this->notification=$notification;
		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);

    }

	public function updateVal($attrName, $val)
	{

		   $this->notification[$attrName] = $val;

	}
	public function showList($message="")
	{

		$this->emit('showList',$message);
	}

	public function rules()
	{
		return [
			'notification.name' => [
				'required',
				'string',
				'max:255',
				Rule::unique('notification_templates', 'name')->ignore($this->notification->id)],
			'notification.trigger' => 'required',
			'notification.role_id' => 'required',

		];
	}

	public function save(){
		$this->validate();
		$notificationService = new NotificationService;
		$this->notification->slug = 1;
		$this->notification->body = 1;
        $this->notification = $notificationService ->createNotification($this->notification);
		$this->showList("Company has been saved successfully");
		$this->notification = new NotificationTemplates;
	}

	public function edit(NotificationTemplates $notification){
        $this->notification=$notification;

    }


	public function render()
	{
		return view('livewire.app.admin.forms.notification-configuration-form');
	}
}

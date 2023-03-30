<?php

namespace App\Http\Livewire\App\Admin\Forms;

use Livewire\Component;
use App\Models\Tenant\NotificationTemplates;

class NotificationConfigurationForm extends Component
{
	public $notification;
	protected $listeners = ['editRecord' => 'edit'];

	public function mount(NotificationTemplates $notification){
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

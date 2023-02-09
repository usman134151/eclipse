<?php

namespace App\Http\Livewire\App\Admin\Forms;

use Livewire\Component;

class NotificationConfigurationForm extends Component
{
	public function showList()
	{
		$this->emit('showList');
	}

	public function render()
	{
		return view('livewire.app.admin.forms.notification-configuration-form');
	}
}

<?php

namespace App\Http\Livewire\App\Admin\Forms;

use Livewire\Component;

class RolePermissionForm extends Component
{
	public function render()
	{
		return view('livewire.app.admin.forms.role-permission-form');
	}

	public function showList()
	{
		$this->emit("showList");
	}
}
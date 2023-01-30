<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class AddAdminStaffTeam extends Component
{
    public function showList()
	{
		$this->emit('showList');
	}

	public function render()
	{
		return view('livewire.app.common.forms.add-admin-staff-team');
	}
}

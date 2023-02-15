<?php

namespace App\Http\Livewire\App\Admin\Team;

use Livewire\Component;

class TeamInfo extends Component
{
	public function showList()
	{
		$this->emit('showList');
	}

	public function render()
	{
		return view('livewire.app.admin.team.team-info');
	}
}
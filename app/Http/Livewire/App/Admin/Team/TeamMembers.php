<?php

namespace App\Http\Livewire\App\Admin\Team;

use App\Models\Tenant\AdminTeam;
use Livewire\Component;

class TeamMembers extends Component
{
    public $component = 'team-info';
	public $showForm,$teamMembers=[];
	protected $listeners = ['showList'=>'resetForm','editRecord'=>'setTeam'];

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
	}

	public function showList($message = "")
	{
		$this->emit('showList', $message);
	}

	public function save()
	{
		// save team members

		
			// $this->showList("Customer has been saved successfully");
			// $this->team = new AdminTeam;
	}


	public function setTeam($team)
	{
		$team=AdminTeam::find($team['id']);
		$this->teamMembers= $team->staff;

	}

	public function render()
	{
		return view('livewire.app.admin.team.team-members');
	}
    public function switch($component)
	{
		$this->component = $component;
	}
}

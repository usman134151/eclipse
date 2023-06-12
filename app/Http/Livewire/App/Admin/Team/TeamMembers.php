<?php

namespace App\Http\Livewire\App\Admin\Team;

use Livewire\Component;

class TeamMembers extends Component
{
    public $component = 'team-info';
	public $showForm,$team;
	protected $listeners = ['showList'=>'resetForm'];

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
	}


	public function save()
	{
		// save team members

		
			// $this->showList("Customer has been saved successfully");
			// $this->team = new AdminTeam;
	}


	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.admin.team.team-members');
	}
    public function switch($component)
	{
		$this->component = $component;
	}
}

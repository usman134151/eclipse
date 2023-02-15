<?php

namespace App\Http\Livewire\App\Admin\Team;

use Livewire\Component;

class TeamMembers extends Component
{
	public $showForm;
	protected $listeners = ['showList'=>'resetForm'];

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
	}

	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.admin.team.team-members');
	}
}
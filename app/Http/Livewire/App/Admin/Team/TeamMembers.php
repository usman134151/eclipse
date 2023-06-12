<?php

namespace App\Http\Livewire\App\Admin\Team;

use App\Models\Tenant\AdminTeam;
use App\Models\Tenant\User;
use Livewire\Component;

class TeamMembers extends Component
{
    public $component = 'team-info';
	public $showForm,$teamMembers,$adminStaff=[], $team;
	protected $listeners = ['showList'=>'resetForm','editRecord'=>'setTeam','updateComponent'=>'setTeam'];

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
		$this->team->staff()->sync($this->teamMembers);

		$this->showList("Admin Staff Team has been saved successfully");
		$this->team = new AdminTeam;
		$this->teamMembers = [];
	}

	public function mount(){
		$this->adminStaff= User::query()
			->where('status', 1)
			->whereHas('roles', function ($query) {
				$query->where('role_id', 1);
				$query->orWhere('role_id', 3);
			})
			->select('id', 'name')
			->with('userdetail')
			->get();
	}


	public function setTeam($team)
	{
		$this->team=AdminTeam::find($team['id']);
		$this->teamMembers= $this->team->staff()->allRelatedIds()->toArray();

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

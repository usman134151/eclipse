<?php

namespace App\Http\Livewire\App\Admin\Team;

use Livewire\Component;

class AdminTeam extends Component
{
	public $showForm;
    public $showProfile;
	protected $listeners = ['showList' => 'resetForm'];

	function showForm()
	{
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/admin-staff/create-staff']);
		$this->dispatchBrowserEvent('refreshSelects');
	}

	public function resetForm()
	{
        $this->showForm=false;
		$this->showProfile = false;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/admin-team']);
	}
    public function showProfile()
	{
		$this->showProfile = true;
	}

	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.admin.team.admin-team');
	}
}

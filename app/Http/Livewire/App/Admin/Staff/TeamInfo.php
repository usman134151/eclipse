<?php

namespace App\Http\Livewire\App\Admin\Staff;

use Livewire\Component;

class TeamInfo extends Component
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
		return view('livewire.app.admin.staff.team-info');
	}
}
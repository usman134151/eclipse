<?php

namespace App\Http\Livewire\App\Admin\Staff;

use Livewire\Component;

class SystemPermissions extends Component
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
		return view('livewire.app.admin.staff.system-permissions');
	}
}
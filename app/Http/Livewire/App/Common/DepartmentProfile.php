<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class DepartmentProfile extends Component
{
	public $showForm;
	public $department;
	protected $listeners = [
		'showDepartmentDetails'
	];

	public function render()
	{
		return view('livewire.app.common.department-profile');
	}

	public function mount()
	{}

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
	}

	public function showDepartmentDetails($department){
		$this->department=$department;
        $this->dispatchBrowserEvent('refreshSelects');

	}
}
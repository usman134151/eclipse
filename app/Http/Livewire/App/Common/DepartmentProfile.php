<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Department;
use App\Models\Tenant\User;
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

	public function mount($departmentId)
	{
		$this->department= Department::find($departmentId);
		$this->showDepartmentDetails($this->department);
	}

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
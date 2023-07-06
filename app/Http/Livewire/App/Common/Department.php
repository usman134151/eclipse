<?php

namespace App\Http\Livewire\App\Common;

use App\Http\Livewire\app\common\lists\Companies;
use App\Models\Tenant\Company;
use Livewire\Component;

class Department extends Component
{
	public $showForm;
	public $showProfile, $status, $companyId=0,$company, $department;
	protected $listeners = ['showList' => 'resetForm', 'showDepartmentProfile'=>'showProfile'];

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
		$this->showProfile = false;
	}

	public function showProfile($department)
	{
		$this->showProfile = true;
		$this->department= $department;
		$this->dispatchBrowserEvent('refreshSelects');
	}

	public function mount()
	{
		if (request()->companyID != null) {
			$this->companyId= request()->companyID;
		}
		$this->company = Company::find($this->companyId);

	}

	public function render()
	{
		return view('livewire.app.common.department');
	}
}

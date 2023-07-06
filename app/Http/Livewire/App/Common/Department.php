<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Company;
use Livewire\Component;

class Department extends Component
{
	public $showForm, $confirmationMessage;
	public $showProfile, $status, $companyId=0,$company, $department;
	public $du_counter = 0, $du_departmentId, $du_departmentLabel,  $du_departmentDetails = false; //for company users

	protected $listeners = ['showList' => 'resetForm', 'showDepartmentProfile'=>'showProfile', 'refreshDepartmentUsers'];

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm($message='',$companyId=0)
	{
		if($companyId){
		$this->company = Company::find($companyId);
		$this->companyId = $companyId;}


		$this->showForm=false;
		$this->showProfile = false;
		if ($message) {
			$this->confirmationMessage = $message;
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/department/'.$this->companyId]);
	}


	public function refreshDepartmentUsers($users_departmentId, $users_departmentLabel) //for company users
	{
		if ($this->du_counter == 0) {
			$this->du_departmentId = 0;
			$this->du_departmentLabel = $users_departmentLabel;
			$this->dispatchBrowserEvent('refresh-department-users', ['departmentId' => $users_departmentId, 'departmentLabel' => $users_departmentLabel]);
			$this->du_counter = 1;
			$this->du_departmentDetails = true;
		} else {
			$this->du_departmentId = $users_departmentId;
			$this->du_counter = 0;
		}
	}


	public function showProfile($department)
	{
		$this->department = $department;

		$this->showProfile = true;
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

<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Company;
use Livewire\Component;

class Department extends Component
{
	public $showForm, $confirmationMessage;
	public $showProfile, $status, $companyId=0,$company, $department;
	protected $listeners = ['showList' => 'resetForm', 'showDepartmentProfile'=>'showProfile'];

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm($message='')
	{
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

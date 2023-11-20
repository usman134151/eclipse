<?php

namespace App\Http\Livewire\App\Admin;

use App\Models\Tenant\SectionRight;
use App\Models\Tenant\SystemRole;
use App\Models\Tenant\SystemRoleUser;
use Livewire\Component;

class RolePermission extends Component
{
	public $sectionRight = null;
	public $showForm;
	public $confirmationMessage;

	public $systemRoleID;

	protected $listeners = [
		'showList' => 'resetForm',
		'showForm'=> 'showForm',
		'delete' => 'deleteRecord',
		'updateRecordId' => 'updateRecordId',
	];

	function showForm($id = null)
	{
		if ($id)
		{
			// $this->sectionRight = $sectionRight;
			$this->emit('editRecord', $id);
		}
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/role-permission/create']);
	}

	public function resetForm($message)
	{
		if ($message) {
			$this->confirmationMessage = $message;
			// $this->confirmationMessage = $message;
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
		$this->showForm=false;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/role-permission']);
	}

	public function updateRecordId($id)
	{
		$this->systemRoleID = $id;
	}

	public function deleteRecord()
	{
		// Delete the record from the database using the model
		SectionRight::where('system_role_id', $this->systemRoleID)->delete();
		SystemRoleUser::where('system_role_id', $this->systemRoleID)->delete();
		SystemRole::where('id', $this->systemRoleID)->delete();
        callLogs($this->systemRoleID,'Role & Permissions',"delete");
		// Emit an event to reset the form and display a confirmation message
		$this->emitSelf('showList', 'Role and permissions have been deleted');
	}

	public function mount()
	{}
	
	public function render()
	{
		return view('livewire.app.admin.role-permission');
	}
}

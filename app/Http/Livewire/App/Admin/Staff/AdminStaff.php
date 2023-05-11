<?php

namespace App\Http\Livewire\App\Admin\Staff;

use Livewire\Component;

class AdminStaff extends Component
{
	public $showForm;
	public $showProfile;

    protected $listeners = [
		'showList' => 'resetForm',
		'showProfile' => 'showProfile',
		'showForm' => 'showForm', // show form when the parent component requests it
		'updateRecordId' => 'updateRecordId', // update the ID of the record being edited/deleted
	];

	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.admin.staff.admin-staff');
	}

    function showForm($user = null)
	{
        if ($user) {
			$this->user = $user;
			$this->emit('editRecord', $user);
		}
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/admin-staff/create-staff']);
		$this->dispatchBrowserEvent('refreshSelects');
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
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/admin-staff']);
	}
	public function showProfile()
	{
		$this->showProfile=true;
	}

	public function editTeam()
	{
		$this->dispatchBrowserEvent('swal:modal', [
			'type' => 'success',
			'title' => 'Edit This Team Successfully!',
			'text' => 'This is a sweet alert!',
		]);
	}

	public function deleteConfirm()
	{
		$this->dispatchBrowserEvent('swal:confirm', [
			'type' => 'warning',
			'title' => 'Do you want to delete this team?',
			'text' => 'Please think twice, this action is irreversible',
		]);
	}

	public function delete()
	{
		$this->dispatchBrowserEvent('swal:modal', [
			'type' => 'success',
			'title' => 'Team Deleted Successfully!',
			'text' => 'This is a sweet alert!',
		]);
	}
    	// function to update the ID of the record being edited/deleted
	public function updateRecordId($id)
	{
		$this->recordId = $id;
	}
}

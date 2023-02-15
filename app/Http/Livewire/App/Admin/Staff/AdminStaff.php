<?php

namespace App\Http\Livewire\App\Admin\Staff;

use Livewire\Component;

class AdminStaff extends Component
{
	public $showForm;
	protected $listeners = ['showList' => 'resetForm', 'delete'];

	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.admin.staff.admin-staff');
	}

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
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
}
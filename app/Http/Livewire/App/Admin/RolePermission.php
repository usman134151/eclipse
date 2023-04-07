<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;

class RolePermission extends Component
{
	public $showForm;
	protected $listeners = ['showList' => 'resetForm'];

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm($message)
	{
		if ($message) {
			// $this->confirmationMessage = $message;
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
		$this->showForm=false;
	}

	public function mount()
	{}
	
	public function render()
	{
		return view('livewire.app.admin.role-permission');
	}
}

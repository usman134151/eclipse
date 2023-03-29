<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Setup as TenantAccommodation;
use Livewire\Component;

class Setup extends Component
{
	// Properties for displaying / hiding the form
	// and displaying confirmation message
	public $showForm;
	public $confirmationMessage;
	public $listTitle="Setup";
	public $listDescription="";

	// Property for holding the ID of the record being edited / deleted
	public $recordId;

	// Define event listeners for this component
	protected $listeners = [
		'showList' => 'resetForm', // Reset form when the parent component shows a list
		'showForm' => 'showForm', // Show form when the parent component requests it
		'delete' => 'deleteRecord', // Delete the record with the specified ID
		'updateRecordId' => 'updateRecordId', // Update the ID of the record being edited / deleted
	];

	// Show the form
	function showForm($setup = null)
	{
		if ($setup) {
			$this->setup = $setup;
			$this->emit('editRecord', $setup);
		}
		// Set the showForm property to true to display the form
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/setup/create-setup']);  //updated by Amna Bilal to set url
		
	}

	// Reset the form and display a confirmation message
	public function resetForm($message)
	{
		if ($message) {
			$this->confirmationMessage = $message;
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
		// Set the showForm property to false to hide the form
		$this->showForm=false;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/all-setup']); //updated by Amna Bilal to set url
	}

	// Update the ID of the record being edited / deleted
	public function updateRecordId($id)
	{
		$this->recordId = $id;
	}

	// Delete the record with the specified ID
	public function deleteRecord()
	{
		// Delete the record from the database using the model
		TenantAccommodation::where('id', $this->recordId)->delete();
		// Emit an event to reset the form and display a confirmation message
		$this->emitSelf('showList', 'Record has been deleted');
	}

	public function mount()
	{
		// This function runs when the component is mounted
		// No code here at the moment
	}

	public function render()
	{
		return view('livewire.app.common.setup');
	}
}

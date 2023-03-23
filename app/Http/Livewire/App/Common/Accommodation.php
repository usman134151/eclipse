<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Accommodation as TenantAccommodation;
use Livewire\Component;

class Accommodation extends Component
{
	// Properties for displaying / hiding the form
	// and displaying confirmation message
	public $showForm;
	public $confirmationMessage;
	public $listTitle="Accommodations";
	public $listDescription="Create unique categories by which to group your more specific services. You can organize services by setting (Conference Interpreting, Medical Interpreting, Legal Interpreting...), by language modality (Spoken Languages, Signed Languages, Caption Services...), or however you see fit (Spanish Interpreting, French Interpreting, German Interpreting...).";

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
	function showForm($accommodation = null)
	{
		if ($accommodation) {
			$this->accommodation = $accommodation;
			$this->emit('editRecord', $accommodation);
		}
		// Set the showForm property to true to display the form
		$this->showForm=true;
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
		return view('livewire.app.common.accommodation');
	}
}

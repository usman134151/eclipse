<?php

namespace App\Http\Livewire\App\Admin\Team;

use App\Models\Tenant\AdminTeam as AdminTeams;
use Livewire\Component;

class AdminTeam extends Component
{
    public $confirmationMessage;
	public $showForm;
	protected $listeners = [
		'showList' => 'resetForm', // Reset form when the parent component shows a list
		'showForm' => 'showForm', // Show form when the parent component requests it
		'delete' => 'deleteRecord', // Delete the record with the specified ID
		'updateRecordId' => 'updateRecordId', // Update the ID of the record being edited / deleted
	];
    public $recordId;

	function showForm($team = null)
	{
        if ($team) {
			$this->team = $team;
			$this->emit('editRecord', $team);
		}
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/admin-staff/create-staff']);
		$this->dispatchBrowserEvent('refreshSelects');
	}

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
        $this->showForm=false;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/admin-team']);
	}
    public function deleteRecord()
	{
		// Delete the record from the database using the model
		AdminTeams::where('id', $this->recordId)->delete();
		// Emit an event to reset the form and display a confirmation message
		$this->emitSelf('showList', 'Record has been deleted');
	}
	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.admin.team.admin-team');
	}
    public function updateRecordId($id)
	{
		$this->recordId = $id;
	}
}

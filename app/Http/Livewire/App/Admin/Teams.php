<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;
use App\Models\Tenant\Team;

class Teams extends Component
{
    public $showForm, $teamID;
    public $showProfile;
    public $listTitle="Provider Teams";
    protected $listeners = [
        'showForm' => 'showForm', // show form when the parent component requests it
        'showList' => 'resetForm', // Reset form when the parent component shows a list
        'delete' => 'deleteRecord', // Delete the record with the specified ID
		'updateRecordId' => 'updateRecordId', // Update the ID of the record being edited / deleted
	];

    public function render()
    {
        return view('livewire.app.admin.teams');
    }

    public function mount()
    {
		$this->teamID = intval(request()->teamID);
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
        $this->showProfile = false;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/teams']); //updated by Amna Bilal to set url
	}

    function showForm($id = null)
    {
        if ($id)
		{
			// $this->sectionRight = $sectionRight;
			$this->emit('editRecord', $id);
		}
       $this->showForm=true;
       $this->dispatchBrowserEvent('update-url', ['url' => '/admin/teams/create-team']);  //updated by Amna Bilal to set url
       $this->dispatchBrowserEvent('refreshSelects');
    }


    public function showProfile()
	{
		$this->showProfile = true;
	}

    public function updateRecordId($id)
	{
		$this->recordId = $id;
	}

	// Delete the record with the specified ID
	public function deleteRecord()
	{
		// Delete the record from the database using the model
		Team::where('id', $this->recordId)->delete();
		// Emit an event to reset the form and display a confirmation message
		$this->emitSelf('showList', 'Record has been deleted');
	}

}

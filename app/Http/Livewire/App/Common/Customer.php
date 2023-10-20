<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\User;
use Livewire\Component;
use App\Services\ExportDataFile;

class Customer extends Component
{
	public $showForm;
	public $showProfile;
	public $importFile;
	public $status,$user, $recordId;
	

	protected $listeners = [
		'showList' => 'resetForm',
		'showProfile' => 'showProfile',
		'showForm' => 'showForm', // show form when the parent component requests it
		'updateRecordId' => 'updateRecordId', // update the ID of the record being edited/deleted
		'delete'=> 'deleteRecord',
	];
	protected $exportDataFile;

	

	public function deleteRecord()
	{
		// Retrieve the user's email using the ID
		$user = User::find($this->recordId);
		$email = $user->email; // Retrieve the email
		// Generate a unique identifier (e.g., a timestamp or random string)
		$uniqueIdentifier = uniqid();
		// Create the new email address with the "delete-" prefix and unique identifier
		$newEmail = 'delete-' . $uniqueIdentifier . '-' . $email;
		
		// Delete the record from the database using the model
		User::where('id', $this->recordId)->update([
			'email' => $newEmail,
			'status' => 2,
		]);
		// Emit an event to reset the form and display a confirmation message
		$this->emitSelf('showList', 'Record has been deleted');
	}
    public function __construct()
    {
        $this->exportDataFile = new ExportDataFile;
    }

	public function mount($showProfile,$status=1){
		$this->status=$status;
		$this->showProfile = $showProfile;
		if($showProfile){
			$this->user = User::where('id',request()->customerID)->with(['userdetail','industries','company'])->first()->toArray();
		}

	}

    public function downloadExportFile()
    {
        return $this->exportDataFile->generateExcelTemplateCustomer();
    }

	public function render()
	{
		return view('livewire.app.common.customer');
	}


	

	function showForm($user=null)
	{
		
		if ($user) {
			$this->user = $user;
           
			$this->emit('editRecord', $user);
		}
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/customer/create-customer']);
		$this->dispatchBrowserEvent('refreshSelects');
	}

	public function importFile(){
		$this->importFile=true;

	}

	public function resetForm($message='')
	{
		$this->showForm=false;
		$this->showProfile = false;
		$this->importFile=false;
		if ($message) {
			$this->confirmationMessage = $message;
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/customer']);
	}

	public function showProfile($user=null)
	{
		if ($user) {
			$this->user = $user;
           
			$this->emit('showDetails', $user);
		}

		$this->showProfile = true;
	}
	
	// function to update the ID of the record being edited/deleted
	public function updateRecordId($id)
	{
		$this->recordId = $id;
	}
}
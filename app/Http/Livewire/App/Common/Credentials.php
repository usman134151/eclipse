<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\Industry;
use App\Services\ExportDataFile;
use App\Models\Tenant\Credential;

class Credentials extends Component
{
    // properties for displaying/hiding the form and displaying confirmation message
    public $showForm;
    public $confirmationMessage;
    public $listTitle="Credentials";
    public $listDescription="You can setup required credentials for providers based on Tags, Specializations or Accommodations & Services.";
    // property for holding the ID of the record being edited/deleted
    public $recordId;
    // define event listeners for this component
    protected $listeners = [
        'showList' => 'resetForm', // reset form when the parent component shows a list
        'showForm' => 'showForm', // show form when the parent component requests it
        'delete' => 'deleteRecord', // delete the record with the specified ID
        'updateRecordId' => 'updateRecordId', // update the ID of the record being edited/deleted
    ];
    protected $exportDataFile;
    public $importFile;
    public function mount()
    {
        // This function runs when the component is mounted
        // No code here at the moment
    }
	public function downloadExportFile()
    {
        return $this->exportDataFile->generateCredentialExcelTemplate();
    }
    public function __construct()
    {
        $this->exportDataFile = new ExportDataFile;
    }
    public function importFile(){
		$this->importFile=true;

	}
    // function to show the form
    function showForm($specialization = null)
    {
        if ($specialization) {
            $this->specialization = $specialization;
            $this->emit('editRecord', $specialization);
        }
        // set the showForm property to true to display the form
        $this->showForm = true;
        $this->dispatchBrowserEvent('update-url', ['url' => '/admin/credential/create-credential']);  //updated by Amna Bilal to set url
    }

    // function to reset the form and display a confirmation message
    public function resetForm($message)
    {
        if ($message) {
            $this->confirmationMessage = $message;
            // emit an event to display a success message using the SweetAlert package
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => $message,
            ]);
        }
        // set the showForm property to false to hide the form
        $this->showForm = false;
        $this->importFile=false;
        $this->dispatchBrowserEvent('update-url', ['url' => '/admin/credentials']); //updated by Amna Bilal to set url
    }

    // function to update the ID of the record being edited/deleted
    public function updateRecordId($id)
    {
        $this->recordId = $id;
    }

    // function to delete the record with the specified ID
    public function deleteRecord()
    {
        // delete the record from the database using the Industry model
        Credential::where('id', $this->recordId)->delete();
        // emit an event to reset the form and display a confirmation message
        $this->emitSelf('showList', 'Record has been deleted');
    }

    public function render()
    {
        // render the component view
        return view('livewire.app.common.credentials');
    }
}

<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\Specialization;
use App\Services\ExportDataFile;


class Specializationmain extends Component
{
    // properties for displaying/hiding the form and displaying confirmation message
    public $showForm;
    public $confirmationMessage;
    public $listTitle="Specializations";
    public $listDescription="Here you can create and manage service specializations. Deactivated specializations will not display in the service request form.";
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
    // hammad date:13/10/23
    public function downloadExportFile()
    {
        return $this->exportDataFile->generateSpecializationmainExcelTemplate();
    }
    public function __construct()
    {
        $this->exportDataFile = new ExportDataFile;
    }
    public function importFile(){
		$this->importFile=true;

	}
    // end work hammad
    // function to show the form
    function showForm($specialization = null)
    {
        if ($specialization) {
            $this->specialization = $specialization;
            $this->emit('editRecord', $specialization);
        }
        // set the showForm property to true to display the form
        $this->showForm = true;
        $this->dispatchBrowserEvent('update-url', ['url' => '/admin/specialization/create-specialization']);
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
        $this->importFile = false;
        $this->dispatchBrowserEvent('update-url', ['url' => '/admin/all-specialization']);
    }

    // function to update the ID of the record being edited/deleted
    public function updateRecordId($id)
    {
        $this->recordId = $id;
    }

    // function to delete the record with the specified ID
    public function deleteRecord()
    {
        // delete the record from the database using the Specialization model
        Specialization::where('id', $this->recordId)->delete();
        callLogs($this->recordId,'specialization',"delete");
        // emit an event to reset the form and display a confirmation message
        $this->emitSelf('showList', 'Record has been deleted');
    }

    public function render()
    {
        // render the component view
        return view('livewire.app.common.specialization');
    }
}

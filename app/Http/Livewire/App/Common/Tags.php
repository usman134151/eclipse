<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\Tag;
use App\Services\ExportDataFile;


class Tags extends Component
{
    // properties for displaying/hiding the form and displaying confirmation message
    public $showForm;
    public $confirmationMessage;
    public $listTitle = "Tags";
    public $listDescription = "Here you can create and manage service tags. Deactivated tags will not display in the service request form.";
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
    public $tag;

    public function downloadExportFile()
    {
        return $this->exportDataFile->generateTagsExcelTemplate();
    }

    public function __construct()
    {
        $this->exportDataFile = new ExportDataFile;
    }

    public function importFile()
    {
        $this->importFile = true;
    }

    // function to show the form
    function showForm($tag = null)
    {
        if ($tag) {
            $this->tag = $tag;
            $this->emit('editRecord', $tag);
        }
        // set the showForm property to true to display the form
        $this->showForm = true;
        $this->dispatchBrowserEvent('update-url', ['url' => '/admin/tags/create-tags']);
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
        $this->dispatchBrowserEvent('update-url', ['url' => '/admin/all-tags']);
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
        Tag::where('id', $this->recordId)->delete();
        callLogs($this->recordId,'tag',"delete");
        // emit an event to reset the form and display a confirmation message
        $this->emitSelf('showList', 'Record has been deleted');
    }


    public function render()
    {
        return view('livewire.app.common.tags');
    }

    public function mount()
    {
    }
}

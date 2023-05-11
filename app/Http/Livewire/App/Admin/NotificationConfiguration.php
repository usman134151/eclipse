<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;
use App\Models\Tenant\NotificationTemplates;

class NotificationConfiguration extends Component
{
    public $showForm;
    public $selectedRoleId;

    public $confirmationMessage;
    public $recordId;
    protected $listeners = [
        'showList' => 'resetForm', // reset form when the parent component shows a list
        'showForm' => 'showForm', // show form when the parent component requests it
        'delete' => 'deleteRecord', // delete the record with the specified ID
        'updateRecordId' => 'updateRecordId', // update the ID of the record being edited/deleted
    ];

    function showForm($notification = null)
    {
        if ($notification) {
            $this->notification = $notification;
            $this->emit('editRecord', $notification);
        }
       $this->showForm=true;
       $this->dispatchBrowserEvent('update-url', ['url' => '/admin/settings/create-notifications']);
       $this->dispatchBrowserEvent('refreshSelects');
    }

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
        $this->dispatchBrowserEvent('update-url', ['url' => '/admin/settings']);
    }

    public function updateRecordId($id)
    {
        $this->recordId = $id;
    }

    public function mount()
    {}

    public function render()
    {
        
    
    return view('livewire.app.admin.notification-configuration');
}

    }


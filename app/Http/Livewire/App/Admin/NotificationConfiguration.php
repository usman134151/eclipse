<?php

namespace App\Http\Livewire\App\Admin;

use App\Models\Tenant\BusinessSetup;
use Livewire\Component;
use App\Models\Tenant\NotificationTemplates;
use App\Models\Tenant\TriggerType;
use App\Services\ExportDataFile;

class NotificationConfiguration extends Component
{
	public $importFile;
	protected $exportDataFile;

    public $showForm;
    public $title;
    public $type;
    public $selectedRoleId;
    public $typeId;
	public $triggerTypes;
	public $toggleNotification = 1;
	public $notificationType = [
        1 => 'email_notifications',
        2 => 'system_notifications',
        3 => 'sms_notifications'
    ];

    public $confirmationMessage;
    public $recordId;
    protected $listeners = [
        'showList' => 'resetForm', // reset form when the parent component shows a list
        'showForm' => 'showForm', // show form when the parent component requests it
        'delete' => 'deleteRecord', // delete the record with the specified ID
        'updateRecordId' => 'updateRecordId', // update the ID of the record being edited/deleted
    ];

    public function __construct()
    {
        $this->exportDataFile = new ExportDataFile;
    }

    public function downloadExportFile()
    {
        return $this->exportDataFile->generateExcelTemplateNotifications($this->type);
    }

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

	public function importFile(){
		$this->importFile=true;
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
		$this->importFile=false;
        $this->dispatchBrowserEvent('update-url', ['url' => '/admin/settings']);
    }

    public function updateRecordId($id)
    {
        $this->recordId = $id;
    }

    public function excludeNotificationToggle()
    {
        BusinessSetup::first()->update([$this->notificationType[$this->type] => $this->toggleNotification ? 1 : 0]);
    }

    public function mount()
    {
		$this->triggerTypes=TriggerType::all();
        $this->toggleNotification = BusinessSetup::first()->pluck($this->notificationType[$this->type])[0];
    }

    public function render()
    {
        
    
    return view('livewire.app.admin.notification-configuration');
}

    }


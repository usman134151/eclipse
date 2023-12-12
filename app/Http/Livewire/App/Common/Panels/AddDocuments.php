<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingDocument;
use App\Models\Tenant\BookingDocumentUser;
use App\Services\App\UploadFileService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Services\App\NotificationService;

class AddDocuments extends Component
{
    use WithFileUploads;

    public $showForm, $booking_id = 0, $document = [], $files = [], $request_from_user = false, $permissions = [], $notification = [], $selectAll = false, $isProviderPanel = false;
    protected $listeners = ['showList' => 'resetForm', 'setBookingId', 'initFields'];

    public function render()
    {
        return view('livewire.app.common.panels.add-documents');
    }
    public function setBookingId($booking_id)
    {
        $this->booking_id = $booking_id;
        $this->initFields();
        if (session('isProvider'))
            $this->isProviderPanel = true;
    }

    public function selectAllCustomers()
    {
        $customers = ["5", "6", "7", "8", "9"];

        if (in_array(4, $this->permissions))
            $this->permissions = array_merge($this->permissions, $customers);
        else {
            $this->permissions = array_diff($this->permissions, $customers);
        }

        $this->permissions = array_values(array_unique($this->permissions));
    }

    public function rules()
    {
        return [
            'document.document_title' => [
                'required',
                'string',
                'max:255',
            ],
            'document.description' => 'nullable',
            'files.*' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',
            'document.permissions' => 'nullable',
        ];
    }

    public function save()
    {
        $this->validate();
        foreach ($this->files as $file) {
            if ($file != null) {
                $fileService = new UploadFileService();
                $this->document['document_name'] = $fileService->saveFile('bookings/' . $this->booking_id, $file);
                $this->document['document_type'] = $file->getClientOriginalExtension();
            }
            // dd($this->permissions);
            $this->document['permissions'] = null;
            if ($this->isProviderPanel) {
                $this->document['permissions']['attach_to_provider_confirmation'] = true;
                $this->document['permissions']['attach_to_customer_confirmation'] = true;
                $this->document['permissions']['customer_permissions'] = ['2', '4', '5', '6', '7', '8', '9'];
            } else
                $this->document['permissions']['customer_permissions'] = $this->permissions;

            $this->document['permissions'] = json_encode($this->document['permissions']);
            $this->document['booking_id'] = $this->booking_id;
            BookingDocument::create($this->document);
        }
        
        $data['bookingData'] = Booking::find($this->booking_id);
        $data['newAttachmentData'] = $this->document;
        NotificationService::sendNotification('Booking: New Attachment Upload', $data);

        $this->dispatchBrowserEvent('close-add-documents');
        $this->emit('showConfirmation', 'Document(s) added successfully');
        $this->initFields();
    }

    public function selectAllUsers()
    {
        if ($this->selectAll)
            $this->permissions = ['2', '4', '5', '6', '7', '8', '9'];
        else
            $this->permissions = [];
    }



    public function initFields()
    {
        $this->document = [
            'booking_id' => $this->booking_id,
            'document_title' => null,
            'document_name' => null,
            'document_type' => null,
            'description' => null,
            'shared' => 0,
            'added_by' => Auth::id(),
            'request_from_user' => false,
            'permissions' => [
                'attach_to_customer_confirmation' => false,
                'attach_to_provider_confirmation' => false
            ]
        ];
        $this->permissions = [];
        $this->request_from_user = false;
        $this->notification = [
            'requestee_id' => null,
            'notify' => 'now',
            'notify_before' => null,
            'repeat_notification' => false,
            'repeat_notify_type' => 'time',
            'repeat_notify_value' => null,
            'message_to_requestee' => null
        ];
        $this->files = [];
        $this->selectAll = false;
    }

    public function mount()
    {
        $this->initFields();
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}

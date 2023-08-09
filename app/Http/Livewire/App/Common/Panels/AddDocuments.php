<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingDocument;
use App\Models\Tenant\BookingDocumentUser;
use App\Services\App\UploadFileService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddDocuments extends Component
{
    use WithFileUploads;

    public $showForm,$booking_id=0, $document =[], $file=null, $request_from_user=false,$permissions=[], $notification=[];
    protected $listeners = ['showList' => 'resetForm', 'setBookingId'];

    public function render()
    {
        return view('livewire.app.common.panels.add-documents');
    }
    public function setBookingId($booking_id){
        $this->booking_id = $booking_id;
        $this->initFields(); 

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
            'file' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',
            'document.permissions' => 'nullable',
        ];
    }

    public function save(){
        $this->validate();
        if ($this->file != null) {
            $fileService = new UploadFileService();
            $this->document['document_name'] = $fileService->saveFile('bookings/' . $this->booking_id , $this->file);
            $this->document['document_type']= $this->file->getClientOriginalExtension();
        }
        $this->document['permissions']=json_encode($this->permissions);
        $this->document['booking_id']=$this->booking_id;
        $document = BookingDocument::create($this->document);
        $booking = Booking::where('id',$this->booking_id)->first();
        if($booking){
            //add document permissions
            
            if($this->permissions['all_users']){

            }
            if ($this->permissions['service_providers']) {
            }
            if ($this->permissions['customers']) {
                if($booking->customer_id)
                BookingDocumentUser::create(['user_id' => $booking->customer_id, 'document_id' => $document->id, 'booking_id' => $this->booking_id]);

            }
            if ($this->permissions['supervisor']) {
                if ($booking->supervisor)
                BookingDocumentUser::create(['user_id'=>$booking->supervisor,'document_id'=> $document->id,'booking_id'=>$this->booking_id]);
            }
            if ($this->permissions['billing_manager']) {
                if($booking->billing_manager)
                BookingDocumentUser::create(['user_id' => $booking->billing_manager, 'document_id' => $document->id, 'booking_id' => $this->booking_id]);

            }

            if ($this->permissions['requesters']) {
            }
            if ($this->permissions['service_consumers']) {
            }
            if ($this->permissions['participants']) {
            }
        }
        //how to implement Request From User? 
        // notification needs to be sent for that
        
        $this->dispatchBrowserEvent('close-add-documents');
        $this->emit('showConfirmation','Document added successfully');
        $this->initFields();
    }

	

    public function initFields(){
        $this->document=[
            'booking_id'=>$this->booking_id,
            'document_title'=>null,
            'document_name'=>null,
            'document_type'=>null,
            'description'=>null,
            'shared'=>0,
            'added_by'=>Auth::id(),
            'request_from_user'=>false,
            'permissions'=>[
                'attach_to_customer_confirmation'=>false,
                'attach_to_provider_confirmation' => false
                ]
        ];
        $this->permissions=[
            "all_users"=>false,
            'service_providers'=>false,
            'customers'=>false,
            'requesters'=>false,
            'supervisor'=>false,
            'billing_manager'=>false,
            'service_consumers'=>false,
            'participants'=>false
        ];
        $this->request_from_user = false;
        $this->notification =[
            'requestee_id'=>null,
            'notify'=>'now',
            'notify_before'=>null,
            'repeat_notification'=>false,
            'repeat_notify_type'=>'time',
            'repeat_notify_value'=>null,
            'message_to_requestee'=>null
        ];
        $this->file=null;
    }

    public function mount()
    {
        $this->initFields(); 

    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}

<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Credential;
use App\Models\Tenant\CredentialDocument;
use App\Models\Tenant\DriveUpload;
use Livewire\Component;

class PendingCredentials extends Component
{
    public $showForm, $user_id, $document_id=0,$document, $file=null;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.pending-credentials');
    }

    public function mount()
    {
       $this->document = CredentialDocument::where('id',$this->document_id)->first();
        
    }

    // public function upload(){
    //     if ($this->drive_file != null) {
    //         $fileService = new UploadFileService();
    //         $this->field['document_path'] = $fileService->saveFile('drive/' . $this->field['record_type'] . '/' . $this->field['record_id'], $this->drive_file);
    //     }
    //     if ($this->field['expiration_date'] != null) //convert before saving
    //     $this->field['expiration_date'] = Carbon::parse($this->field['expiration_date']);

    //     DriveUpload::create($this->field);
    //     $this->confirmation("File Uploaded to drive successfully");
    // }
    
    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}

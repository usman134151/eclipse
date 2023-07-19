<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Credential;
use App\Models\Tenant\DriveUpload;
use Livewire\Component;

class PendingCredentials extends Component
{
    public $showForm, $user_id, $credential_id,$documents, $file;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.pending-credentials');
    }

    public function mount()
    {
       $credential = Credential::where('id',$this->credential_id)->first();
        if($credential!=null){
            // $this->credential = $credential->toArray();
            $this->documents= $credential->documents->toArray();
        }
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

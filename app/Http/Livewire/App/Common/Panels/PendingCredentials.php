<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\CredentialDocument;
use App\Models\Tenant\ProviderCredentials;
use App\Services\App\UploadFileService;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class PendingCredentials extends Component
{
    use WithFileUploads;
    public $showForm, $user_id, $document_id=0,$document, $upload_file=null, $field;
    protected $listeners = ['showList' => 'resetForm', 'updateVal'];

    public function render()
    {
        $this->dispatchBrowserEvent('refreshSelects');

        return view('livewire.app.common.panels.pending-credentials');
    }

    public function mount()
    {

       $this->document = CredentialDocument::where('id',$this->document_id)->first();
        
    }
    public function rules()
    {
        $rules= [
            'field.file_path' => 'nullable',
            'field.expiry_date' => [
                'nullable',
                'date',
                'after:today'
            ],
        ];
        if($this->document->document_type != 'acknowledge_document')
            $rules['upload_file'] = 'required|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv';

        return $rules;
    }

    public function upload(){
        $this->validate();
        if ($this->upload_file != null) {
            $fileService = new UploadFileService();
            $this->field['file_path'] = $fileService->saveFile('drive/provider-credentials/', $this->upload_file, "credential_".$this->document_id.'_'.time());
        }
        if ($this->document['expiration_type']=="user_set_expiry"&&isset($this->field['expiry_date'])) 
            $this->field['expiry_date'] = Carbon::parse($this->field['expiry_date']); //convert before saving
        elseif($this->document['expiry']>0)
            $this->field['expiry_date'] = Carbon::now()->addMonths($this->document['expiry']);    //set expiration date from document details
        else
            $this->field['expiry_date'] = null;

        $this->field['expiry_status'] = false;
        $this->field['provider_id']=$this->user_id;
        $this->field['credential_document_id'] = $this->document_id;
        $u_doc = ProviderCredentials::where(['credential_document_id' => $this->document_id, 'provider_id' => $this->user_id])->first();
        if($u_doc)
            $u_doc->update($this->field);
            // ProviderCredentials::where(['credential_document_id' => $this->document_id, 'provider_id' => $this->user_id])->update($this->field);
        else
            ProviderCredentials::create($this->field);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('showConfirmation', "File Uploaded to drive successfully");
    }

    public function deleteFile(){
        $this->upload_file=null;
    }

    public function isImage($file)
    {
        $extension = $file->getClientOriginalExtension();
        $imgExtArr = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg'];
        if (in_array($extension, $imgExtArr)) {
            return true;
        }
        return false;
    }


    public function updateVal($attrName,$val)
    {
        $this->field[$attrName] = $val;
        // dd($this->field,$attrName,$val);
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

<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\DriveUpload;
use App\Services\App\UploadFileService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class DriveUploads extends Component
{
    use WithFileUploads;
    public $showForm, $showSearch = false,$field=null, $existingDocuments, $uploadDoc, $noExp, $file;
    protected $listeners = ['showList' => 'resetForm', 'updateVal'];


    public function render()
    {
        return view('livewire.app.common.forms.drive-uploads');
    }

    public function mount($showSearch,$record_id,$record_type)
    {
        $this->showSearch= $showSearch;
        $this->field = [
            'record_id' => $record_id,
            'record_type' => $record_type,
            'added_by' => Auth::id()];
       
        $this->refreshData();
       
       
    }

    function refreshData(){

        $this->uploadDoc=false;
        $this->noExp = true;
        $this->file=null;
        $this->field['document_title'] = null;
        $this->field['document_path'] = null;
        $this->field['expiration_date'] = null;
        $this->field['note'] = null;
        $this->existingDocuments = DriveUpload::where(['record_id'=>$this->field['record_id'], 'record_type' => $this->field['record_type']])->get();
        $this->resetValidation();
        $this->dispatchBrowserEvent('refreshSelects');


    }


    public function showForm()
    {
        $this->uploadDoc = !$this->uploadDoc;
        $this->dispatchBrowserEvent('refreshSelects');
    }
    public function resetForm()
    {
        $this->showForm=false;
    }
    public function setExpDate(){
        // $this->noExp = !$this->noExp;
        if(!$this->noExp){
            $this->field['expiration_date']=null;
        }
        $this->dispatchBrowserEvent('refreshSelects');


    }
    public function rules()
    {
        return [
            'field.document_title' => 'nullable|string|max:255',
            'field.document_path' => 'nullable',
            'field.expiration_date' => 'nullable',
            'field.note' => 'nullable',
            'file' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',
  
        ];
    }

    public function upload()    //upload the selected file
    {
        $this->validate();

        if ($this->file != null) {
            $fileService = new UploadFileService();
            $this->field['document_path'] = $fileService->saveFile('drive/'.$this->field['record_type'].'/' . $this->field['record_id'], $this->file);
        }
        if($this->field['expiration_date']!=null) //convert before saving
            $this->field['expiration_date'] = Carbon::parse($this->field['expiration_date']);

            DriveUpload::create($this->field);
        $this->confirmation("File Uploaded to drive successfully");
        $this->refreshData();

    }

    public function confirmation($message = '')
    {
        if ($message) {
            // Emit an event to display a success message using the SweetAlert package
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => $message,
            ]);
        }
        $this->dispatchBrowserEvent('update-url', ['url' => '/admin/company']);
    }

    public function deleteFile($file_record_id,$path)
    {
        $fileService = new UploadFileService();
        $fileService->deleteFile($path);
        DriveUpload::where('id',$file_record_id)->delete();
        $this->refreshData();
        $this->confirmation('File has been successfully deleted');

    }

    public function updateVal($attrName, $val)
    {
        if ($attrName == 'expiration_date')
            $this->field['expiration_date'] = $val;
        else
            $this->$attrName = $val;
    }
}

<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\CredentialDocument;
use App\Models\Tenant\ProviderCredentials;
use Livewire\Component;

class ViewButton extends Component
{
    public $showForm,$u_doc,$credential_doc=null,$acknow_doc = false;
    protected $listeners = ['showList' => 'resetForm', 'openActiveCredential', 'viewCredential'];

    public function render()
    {
        return view('livewire.app.common.modals.view-button');
    }

    public function viewCredential($doc_id)
    {
        $this->credential_doc = CredentialDocument::where('id', $doc_id)->first();
        // if ($this->u_doc) {
        //     $this->credential_doc = CredentialDocument::where('id', $this->u_doc->credential_document_id)->first();
        // }
    }


    public function openActiveCredential($user_doc_id)
    {
        $this->u_doc = ProviderCredentials::where('id',$user_doc_id)->first();
        if($this->u_doc){
            $this->credential_doc = CredentialDocument::where('id',$this->u_doc->credential_document_id)->first(); 
        }
    }


    public function isImage($filepath)
    {
        $extension = pathinfo($filepath, PATHINFO_EXTENSION);
        $imgExtArr = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg'];
        if (in_array($extension, $imgExtArr)) {
            return true;
        }
        return false;
    }
    public function mount()
    {
       
       
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

<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\Credential;
use App\Models\Tenant\ProviderCredentials;
use App\Models\Tenant\User;
use Livewire\Component;

class ProviderCredentialsDrive extends Component
{
    public $showForm, $provider_id =0,$credentials=[] ,$user=null;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {   
        $this->setData();
        return view('livewire.app.common.forms.provider-credentials-drive');
    }

    public function mount()
    {
        $this->user = User::find($this->provider_id);
    }

    function setData(){
        if ($this->user) {
            $this->credentials=[];

            foreach ($this->user->services as $service) {
                foreach ($service->credentials as $credential) {
                    foreach ($credential->documents as $doc) {
                        $u_doc = ProviderCredentials::where(['provider_id' => $this->provider_id, 'credential_document_id' => $doc->id])->first();
                        if ($u_doc) {

                            $type = "active";
                        } else {
                            $type = 'pending';
                        }
                        $this->credentials[$type][$doc->id] = $doc->toArray();
                        $this->credentials[$type][$doc->id]['title'] = $credential->title;
                        $this->credentials[$type][$doc->id]['cred_id'] = $credential->id;
                    }
                }
            };
            if(isset($this->credentials['pending']))
                $this->credentials['pending'] = array_values($this->credentials['pending']);    //fixing index values
            if (isset($this->credentials['active']))
                $this->credentials['active'] = array_values($this->credentials['active']);    //fixing index values

        }     
    }

    public function acceptCredential($doc_id){
        ProviderCredentials::create(['credential_document_id'=>$doc_id,'provider_id'=>$this->user->id,'acknowledged'=>true]);
    }

    public function openCredential($credentialId,$label){
        
        $this->dispatchBrowserEvent('open-credential',['credentialId'=>$credentialId, 'credentialLabel'=>$label]);
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

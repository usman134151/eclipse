<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\Credential;
use App\Models\Tenant\ProviderCredentials;
use App\Models\Tenant\User;
use Livewire\Component;

class ProviderCredentialsDrive extends Component
{
    public $showForm, $provider_id =0,$credentials=[] ,$user=null;
    protected $listeners = ['showList' => 'resetForm', 'showConfirmation'];

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
                            if ($u_doc->expiry_status==1)
                                $type="expired";
                            else
                                $type = "active";

                        } else {
                            $type = 'pending';
                        }
                        $this->credentials[$type][$doc->id] = $doc->toArray();
                        $this->credentials[$type][$doc->id]['title'] = $credential->title;
                        $this->credentials[$type][$doc->id]['cred_id'] = $credential->id;
                        if($type!='pending'){

                            $this->credentials[$type][$doc->id]['provider_doc_id'] = $u_doc->id;
                            $this->credentials[$type][$doc->id]['expiry_date'] = $u_doc->expiry_date;
                        }

                    }
                }
            };
            if(isset($this->credentials['pending']))
                $this->credentials['pending'] = array_values($this->credentials['pending']);    //fixing index values
            if (isset($this->credentials['active']))
                $this->credentials['active'] = array_values($this->credentials['active']);    //fixing index values
            if (isset($this->credentials['expired']))
                $this->credentials['expired'] = array_values($this->credentials['expired']);    //fixing index values
          
        }     
    }

    public function acceptCredential($doc_id){
        ProviderCredentials::create(['credential_document_id'=>$doc_id,'provider_id'=>$this->user->id,'acknowledged'=>true]);
        $this->showConfirmation('Credential has been accepted');
    }

    public function renewAcceptance($user_doc_id,$doc_id)
    {
        // check cred_doc new expiry
        //add expiry to current date
        // save in provider_credentials
        // ProviderCredentials::where(['credential_document_id' => $doc_id, 'provider_id' => $this->user->id, 'acknowledged' => true]);
        $this->showConfirmation('Credential has been accepted');
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

    public function showConfirmation($message = '')
    {
        if ($message) {
            // Emit an event to display a success message using the SweetAlert package
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => $message,
            ]);
        }
    }


}

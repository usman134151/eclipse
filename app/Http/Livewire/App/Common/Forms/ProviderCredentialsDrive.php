<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\Credential;
use App\Models\Tenant\User;
use Livewire\Component;

class ProviderCredentialsDrive extends Component
{
    public $showForm, $provider_id =0,$credentials=[] ,$user=null;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.forms.provider-credentials-drive');
    }

    public function mount()
    {
        $this->user = User::find($this->provider_id);
        if($this->user){
            foreach($this->user->services as $service){
                foreach($service->credentials as $credential){
                    $this->credentials[$credential->id]=$credential->toArray();
                }
            };
            
        }      
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

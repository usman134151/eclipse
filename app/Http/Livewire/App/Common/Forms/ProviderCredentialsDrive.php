<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\Credential;
use App\Models\Tenant\User;
use Livewire\Component;

class ProviderCredentialsDrive extends Component
{
    public $showForm, $provider_id =0,$services=[] ,$user=null;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.forms.provider-credentials-drive');
    }

    public function mount()
    {
        $this->user = User::find($this->provider_id);
        if($this->user){
            $this->services = $this->user->services;
            
        }      
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

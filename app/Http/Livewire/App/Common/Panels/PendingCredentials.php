<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Credential;
use Livewire\Component;

class PendingCredentials extends Component
{
    public $showForm, $user_id, $credential_id,$documents;
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

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}

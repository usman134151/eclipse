<?php

namespace App\Http\Livewire\App\Common\Provider;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Drive extends Component
{
    public $showForm, $userid=0;
    protected $listeners = ['showList' => 'resetForm',
        'OpenProviderCredential',//for upload panel
        'openActiveCredentialModal'	//for document view modal
        ];
    public  $counter = 0, $credentialId, $credentialLabel = "", $credentialDetails = false;

    public function render()
    {
        return view('livewire.app.common.provider.drive');
    }

    public function mount()
    {
     $this->userid = Auth::id();  
       
    }

    public function OpenProviderCredential($credentialId, $credentialLabel)
    {
        if ($this->counter == 0) {
            $this->credentialId = 0;
            $this->credentialLabel = $credentialLabel;
            $this->dispatchBrowserEvent('open-credential', ['credentialId' => $credentialId, 'credentialLabel' => $credentialLabel]);
            $this->counter = 1;
            $this->credentialDetails = true;
        } else {
            $this->credentialId = $credentialId;
            $this->counter = 0;
            $this->dispatchBrowserEvent('refreshSelects');
        }
    }
    public function openActiveCredentialModal($user_doc_id)
    {
        $this->emit('openActiveCredential', $user_doc_id);
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

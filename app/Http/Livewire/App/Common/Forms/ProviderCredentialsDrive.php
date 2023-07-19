<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class ProviderCredentialsDrive extends Component
{
    public $showForm, $provider_id;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.forms.provider-credentials-drive');
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

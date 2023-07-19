<?php

namespace App\Http\Livewire\App\Common\Panels;

use Livewire\Component;

class PendingCredentials extends Component
{
    public $showForm, $user_id, $credential_id;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.pending-credentials');
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

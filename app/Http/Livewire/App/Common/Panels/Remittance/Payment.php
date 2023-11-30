<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Models\Tenant\User;
use Livewire\Component;

class Payment extends Component
{
    public $showForm,$provider;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.remittance.payment');
    }

    public function mount($providerId)
    {
        $this->provider = User::find($providerId);
        
        
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

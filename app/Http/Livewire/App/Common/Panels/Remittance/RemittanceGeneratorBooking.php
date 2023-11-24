<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Models\Tenant\User;
use Livewire\Component;

class RemittanceGeneratorBooking extends Component
{
    public $showForm, $provider;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.remittance.remittance-generator-booking');
    }

    public function mount($providerId)
    {
       $this->provider = User::where('id',$providerId)->with('userdetail')->first();
       
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

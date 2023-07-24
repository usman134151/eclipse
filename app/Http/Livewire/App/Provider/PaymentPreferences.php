<?php

namespace App\Http\Livewire\App\Provider;

use Livewire\Component;

class PaymentPreferences extends Component
{
    public $showForm, $provider_id;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.provider.payment-preferences');
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

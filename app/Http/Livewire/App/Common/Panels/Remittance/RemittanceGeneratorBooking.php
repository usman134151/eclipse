<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use Livewire\Component;

class RemittanceGeneratorBooking extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.remittance.remittance-generator-booking');
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

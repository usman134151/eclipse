<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use Livewire\Component;

class ModificationConfirmation extends Component
{
    public $showForm, $booking ,$override_charges,$params=[]; 
    protected $listeners = ['showList' => 'resetForm', 'setModificationCharges'];

    public function render()
    {
        return view('livewire.app.common.modals.modification-confirmation');
    }

    public function setModificationCharges($booking,$redirect, $draft, $step)
    {
       
       $this->booking= $booking;
       $this->params = [$redirect, $draft, $step];
    }
    public function confirm()
    {
        $this->emit('confirmedModificationFee',true,$param[0], $param[1] ,$param[2]);

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

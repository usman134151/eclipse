<?php

//namespace App\Http\Livewire\App\Common;
namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class SpecializationForm extends Component
{
    public function showList()
    {
        // save data
        $this->emit('showList');
    }
    public function render()
    {
        return view('livewire.app.common.forms.specialization-form');
    }
  
}

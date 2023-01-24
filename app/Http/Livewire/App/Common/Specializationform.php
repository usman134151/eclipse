<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Specializationform extends Component
{
    public function render()
    {
        return view('livewire.app.common.specializationform');
    }
    public function showList()
{
   // save data
   $this->emit('showList');
}
}

<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class Accomodationform extends Component
{
    

    public function render()
    {
        return view('livewire.app.common.forms.Accomodationform');
    }

    public function mount()
    {
       
       
    }
    public function showList()
    {
        // save data
        $this->emit('showList');
    }
    

}

<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class Addcoupon extends Component
{
    public function render()
    {
        return view('livewire.app.common.forms.addcoupon');
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

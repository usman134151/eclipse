<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class IndustriesForm extends Component
{
    public function showList()
    {
        $this->emit('showList');
    }

    public function mount()
    {}

    public function render()
    {
        return view('livewire.app.common.forms.industries-form');
    }
}

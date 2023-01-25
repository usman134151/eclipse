<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Accommodation extends Component
{
    // public $showForm;

    public function showList()
    {
        $this->emit('showList');
    }

    public function mount()
    {}

    public function render()
    {
        return view('livewire.app.common.accommodation');
    }
}

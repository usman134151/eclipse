<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.app.common.dashboard');
        $this->dispatchBrowserEvent('refreshSelects');
    }
}

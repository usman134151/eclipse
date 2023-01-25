<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Coupon extends Component
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
        return view('livewire.app.common.coupon');
    }

}

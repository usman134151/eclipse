<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class CouponForm extends Component
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
        return view('livewire.app.common.forms.coupon-form');
    }

}

<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class ChangePassword extends Component
{
    public $showForm;
    protected $listeners = ['showList'=>'resetForm'];

    public function mount() {}

    function showForm()
    {
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

    public function render()
    {
        return view('livewire.app.common.forms.change-password');
    }
}

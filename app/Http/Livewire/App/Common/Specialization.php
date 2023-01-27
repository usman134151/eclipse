<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Specialization extends Component
{
    public $showForm;
    public $confirmationMessage;
    protected $listeners = ['showList' => 'resetForm'];

    public function mount()
    {
       
       
    }

    function showForm(){
       
        $this->showForm=true;
    }
    public function resetForm($message)
    {
        $this->confirmationMessage=$message;
        $this->showForm=false;
    }

    public function render()
    {
       
        return view('livewire.app.common.specialization');
    }
}

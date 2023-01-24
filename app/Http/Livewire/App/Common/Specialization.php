<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Specialization extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function resetForm()
    {
        $this->showForm=false;
    }
    public function mount()
    {
       
       
    }

    function showForm(){
       
        $this->showForm=true;
    }
    public function render()
    {
       
        return view('livewire.app.common.specialization');
    }
}

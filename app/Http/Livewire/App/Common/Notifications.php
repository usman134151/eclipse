<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Notifications extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.notifications');
    }

    public function mount()
    {
       
       
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}

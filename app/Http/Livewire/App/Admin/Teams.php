<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;

class Teams extends Component
{
    public $showForm;

    public function render()
    {
        return view('livewire.app.admin.teams');
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

<?php

namespace App\Http\Livewire\App\Common\Modals;

use Livewire\Component;

class ObjectionRemittance extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.modals.objection-remittance');
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

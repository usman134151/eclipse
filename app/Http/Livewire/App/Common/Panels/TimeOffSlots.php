<?php

namespace App\Http\Livewire\App\Common\Panels;

use Livewire\Component;

class TimeOffSlots extends Component
{
    public $showForm,$provider_id;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.time-off-slots');
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

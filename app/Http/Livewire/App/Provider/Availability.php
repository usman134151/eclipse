<?php

namespace App\Http\Livewire\App\Provider;

use Livewire\Component;

class Availability extends Component
{
    public $showForm, $userid;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.provider.availability');
    }


    public function saveSchedule()
    {
        $this->emit('saveSchedule');
        $this->emit('showConfirmation', "Availability has been saved successfully");
        $this->dispatchBrowserEvent('close-default-schedule-modal');
        $this->dispatchBrowserEvent('updateCalender');
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

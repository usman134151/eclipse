<?php

namespace App\Http\Livewire\App\Common\Modals;

use Livewire\Component;

class ProviderCheckInNotes extends Component
{
    public $showForm, $notes="";
    protected $listeners = ['showList' => 'resetForm', 'openProviderNotesModal'];

    public function render()
    {
        return view('livewire.app.common.modals.provider-check-in-notes');
    }

    public function openProviderNotesModal($notes)
    {
       $this->notes=urldecode($notes);
       
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

<?php

namespace App\Http\Livewire\App\Common\Modals\Admin;

use Livewire\Component;

class MeetingLinks extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.modals.admin.meeting-links');
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

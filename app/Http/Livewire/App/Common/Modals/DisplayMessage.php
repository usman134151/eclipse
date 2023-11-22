<?php

namespace App\Http\Livewire\App\Common\Modals;

use Livewire\Component;

class DisplayMessage extends Component
{
    public $showForm, $redirectPath, $message, $title;
    protected $listeners = ['showList' => 'resetForm', 'modificationClosed'];

    public function modificationClosed($path="#", $message="", $title="Information"){
        $this->redirectPath = $path;
        $this->message = $message;
        $this->title = $title;

    }

    public function render()
    {
        return view('livewire.app.common.modals.display-message');
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

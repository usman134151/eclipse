<?php

namespace App\Http\Livewire\App\Common\Modals;

use Livewire\Component;

class AddDocument extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm', 'openActiveCredential'];

    public function render()
    {
        return view('livewire.app.common.modals.add-document');
    }
    
    public function openActiveCredential($user_doc_id){
        // dd($user_doc_id);

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

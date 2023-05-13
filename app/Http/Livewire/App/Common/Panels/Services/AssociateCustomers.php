<?php

namespace App\Http\Livewire\App\Common\Panels\Services;

use Livewire\Component;

class AssociateCustomers extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.services.associate-customers');
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

<?php

namespace App\Http\Livewire\App\Common\Modals\Provider;

use Livewire\Component;

class StaffProviderAvailiblity extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.modals.provider.staff-provider-availiblity');
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

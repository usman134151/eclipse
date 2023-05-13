<?php

namespace App\Http\Livewire\App\Common\Panels\UserAccess;

use Livewire\Component;

class CompaniesCustomerAcess extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.user-access.companies-customer-acess');
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

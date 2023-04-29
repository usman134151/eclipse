<?php

namespace App\Http\Livewire\App\Admin\Customer;

use Livewire\Component;

class ServiceCatelog extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.admin.customer.service-catelog');
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

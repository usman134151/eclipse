<?php

namespace App\Http\Livewire\App\Customer;

use Livewire\Component;

class Invoices extends Component
{
    public $showForm , $invoice_id=0;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.customer.invoices');
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

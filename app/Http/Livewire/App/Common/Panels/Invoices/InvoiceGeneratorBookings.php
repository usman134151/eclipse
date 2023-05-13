<?php

namespace App\Http\Livewire\App\Common\Panels\Invoices;

use Livewire\Component;

class InvoiceGeneratorBookings extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.invoices.invoice-generator-bookings');
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

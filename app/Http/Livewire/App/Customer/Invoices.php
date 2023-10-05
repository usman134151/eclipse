<?php

namespace App\Http\Livewire\App\Customer;

use Livewire\Component;

class Invoices extends Component
{
    public $showForm, $invoice_id = 0, $counter = 0, $confirmationMessage = null;

    protected $listeners = ['showList' => 'resetForm','openInvoiceDetails'];

    public function render()
    {
        return view('livewire.app.customer.invoices');
    }
    public function openInvoiceDetails($invoice_id)
    {
        if ($this->counter == 0) {
            $this->invoice_id = 0;
            $this->dispatchBrowserEvent('refresh-invoice-details', ['invoice_id' => $invoice_id]);
            $this->counter = 1;
        } else {
            $this->invoice_id = $invoice_id;
            $this->counter = 0;
        }
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

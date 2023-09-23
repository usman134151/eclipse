<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class CustomerInvoices extends Component
{
    public $showForm, $invoice_id=0,$counter=0;
    protected $listeners = ['showList' => 'resetForm', 'openInvoiceDetails'];

    public function render()
    {
        return view('livewire.app.common.customer-invoices');
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

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm($message)
    {
        $this->showForm=false;
        if ($message) {
            // Emit an event to display a success message using the SweetAlert package
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => $message,
            ]);
        }
    
    }

}

<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Invoice;
use App\Services\App\InvoiceService;
use Livewire\Component;
use App\Services\App\NotificationService;

class RevertBack extends Component
{
    public $showForm, $invoice = null, $invoices, $isMultiple;

    protected $listeners = ['revertInvoice', 'revertMultipleInvoice'];

    public function render()
    {
        return view('livewire.app.common.modals.revert-back');
    }

    public function revertMultipleInvoice($selectedValues)
    {
        $this->isMultiple = true;
        $this->invoices = Invoice::all()->whereIn('id', $selectedValues);
    }

    public function revert()
    {
        if ($this->isMultiple) {
            if (count($this->invoices) > 0) {
                foreach ($this->invoices as $invoice) {
                    InvoiceService::revertInvoice($invoice);
                }
            }
        } else {
            if ($this->invoice) {
                InvoiceService::revertInvoice($this->invoice);
            }
            $this->dispatchBrowserEvent('close-invoice-details');  // emit to close modal
        }
        
        $data['revertInvoiceData']=$this->invoice;
        // NotificationService::sendNotification('Billing: Invoice Voided (Reverted)', $data , 8);
        $this->emit('showList', 'Invoice reverted successfully');
        $this->emit('revertModalDismissed');  // emit to close modal
    }

    public function revertInvoice($invoice_id)
    {
        $this->invoice = Invoice::find($invoice_id);
    }
}

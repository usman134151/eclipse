<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Invoice;
use App\Services\App\InvoiceService;
use Carbon\Carbon;
use Livewire\Component;

class PayInvoice extends Component
{
    public $showForm, $invoice, $invoices, $isMultiple, $payment = [], $totalPrice = 0;

    protected $listeners = ['payInvoiceId', 'initMultipleInvoices'];

    // protected $method =[2=>'by_check',3=>'by_cash',4=>'by_bank_transfer'];

    protected $rules = [
        'payment.payment_method' => 'required',
        'payment.payment_date' => 'required|data|date_format:m/d/Y',
        'payment.payment_amount' => 'required',
    ];

    public function initMultipleInvoices($selectedValues)
    {
        $this->isMultiple = true;
        $this->invoices = Invoice::all()->whereIn('id', $selectedValues);
        $this->payment['payment_amount'] = $this->totalPrice = $this->invoices->sum('outstanding_amount');
    }

    public function payInvoiceId($invoice_id)
    {
        $this->invoice = Invoice::find($invoice_id);
        $this->payment['payment_amount'] = $this->invoice->outstanding_amount;
        $this->totalPrice = $this->invoice->outstanding_amount;
        // dd($this->invoice);
    }

    public function render()
    {
        return view('livewire.app.common.modals.pay-invoice');
    }

    public function payMultipleInvoices()
    {
        // $this->validate();
        if (count($this->invoices) > 0) {
            foreach ($this->invoices as $invoice) {
                InvoiceService::payInvoice($invoice->id, $this->payment);
            }
        }

        $this->emit('payInvoiceModalDismissed');  // emit to close modal
        $this->emit('showList', 'Payment Recorded successfully');
    }

    public function payInvoice()
    {
        // $this->validate();
        if ($this->invoice) {
            $invoice_id = $this->invoice->id;
            InvoiceService::payInvoice($invoice_id, $this->payment);
        }
        $this->emit('payInvoiceModalDismissed');  // emit to close modal
        $this->dispatchBrowserEvent('close-invoice-details');  // emit to close modal
        $this->emit('showList', 'Payment Recorded successfully');
    }

    function mount()
    {
        $this->isMultiple = false;
        $this->payment = ['payment_method' => 4, 'notes' => '', 'payment_date' => Carbon::today()->format('m/d/Y')];
    }

    public function resetForm()
    {
        $this->showForm = false;
    }
}

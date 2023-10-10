<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Invoice;
use App\Services\App\InvoiceService;
use Livewire\Component;
use PDF;


class CustomerInvoices extends Component
{
    public $showForm, $invoice_id = 0, $counter = 0, $confirmationMessage = null;
    public $overDueAmount = 0, $comingAmount = 0, $avgPaymentDays = 0;
    protected $listeners = ['showList' => 'resetForm', 'openInvoiceDetails', 'downloadInvoice'=> 'createInvoicePDF'];

    public function mount(){
        $this->overDueAmount = InvoiceService::getOverDueAmount();
        $this->comingAmount = InvoiceService::getComingAmount();
        $this->avgPaymentDays = InvoiceService::getAvgPaymentDays();
    }

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
        $this->showForm = true;
    }
    public function resetForm($message)
    {
        $this->showForm = false;
        $this->confirmationMessage = $message;
        if ($this->confirmationMessage) {
            // Emit an event to display a success message using the SweetAlert package
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => $this->confirmationMessage,
            ]);
            return redirect()->to('/admin/customer-invoices');


        }
    }

    function createInvoicePDF($invoice_id = 0)
    {
        // $orderData = [];
        $invoice = Invoice::where('id', $invoice_id)->with(['company', 'billing_manager', 'billingAddress',])->first();
        if ($invoice) {

            $bookings = Booking::whereIn('id', $invoice->bookings->pluck('id'))->get();
            $orderData['invoice'] = $invoice;
            $orderData['bookings'] = $bookings ?? [];

            $pdfContent = PDF::loadView('tenant.common.download_invoice_pdf', ['orderData' => $orderData])->output();
            return response()->streamDownload(
                fn () => print($pdfContent),
                "invoice_" . $invoice->invoice_number . ".pdf"
            );
        }
    }
}

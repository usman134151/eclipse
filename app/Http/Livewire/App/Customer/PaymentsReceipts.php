<?php

namespace App\Http\Livewire\App\Customer;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Invoice;
use App\Services\PdfService;
use Livewire\Component;
use PDF;

class PaymentsReceipts extends Component
{
    public $showForm, $invoice_id = 0, $counter = 0, $confirmationMessage = null;
    protected $listeners = ['showList' => 'resetForm', 'openInvoiceDetails', 'downloadInvoice' => 'createInvoicePDF'];

    public function render()
    {
        return view('livewire.app.customer.payments-receipts');
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
    public function resetForm()
    {
        $this->showForm=false;
    }
    function createInvoicePDF($invoice_id = 0)
    {
        // $orderData = [];
        $invoice = Invoice::where('id', $invoice_id)->with(['company', 'billing_manager', 'billingAddress',])->first();
        if ($invoice) {

            $bookings = Booking::whereIn('id', $invoice->bookings->pluck('id'))->get();
            $orderData['invoice'] = $invoice;
            $orderData['bookings'] = $bookings ?? [];
            $orderData['company_logo'] = public_path($invoice->company->company_logo != null ? $invoice->company->company_logo : '/tenant-resources/images/portrait/small/avatar-s-20.jpg');

            $pdfService = new PdfService;
            return $pdfService->generateCustomerInvoicePdf($orderData,"invoice_" . $invoice->invoice_number . ".pdf");
        }
    }
}

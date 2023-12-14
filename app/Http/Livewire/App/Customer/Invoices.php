<?php

namespace App\Http\Livewire\App\Customer;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PDF;


class Invoices extends Component
{
    public $showForm, $invoice_id = 0, $counter = 0, $confirmationMessage = null;
    public $filter_bmanager, $filterRadio, $filter_select_Date, $filter_end_Date;
    protected $listeners = ['showList' => 'resetForm','openInvoiceDetails', 'downloadInvoice' => 'createInvoicePDF','resetFilters','updateVal'];

    public $bmanagers = [];

    public function mount()
    {
        $this->bmanagers = User::where('company_name', Auth::user()->company_name)->whereHas('roles', function ($query) {
            $query->where('role_id', 9);
        })->select(['users.name', 'users.id'])->get();

    }

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


    function createInvoicePDF($invoice_id = 0)
    {
        // $orderData = [];
        $invoice = Invoice::where('id', $invoice_id)->with(['company', 'billing_manager', 'billingAddress',])->first();
        if ($invoice) {

            $bookings = Booking::whereIn('id', $invoice->bookings->pluck('id'))->get();
            $orderData['invoice'] = $invoice;
            $orderData['bookings'] = $bookings ?? [];
            $orderData['company_logo'] = public_path($invoice->company->company_logo != null ? $invoice->company->company_logo : '/tenant-resources/images/portrait/small/avatar-s-20.jpg');

            $pdfContent = PDF::loadView('tenant.common.download_invoice_pdf', ['orderData' => $orderData])->output();
            return response()->streamDownload(
                fn () => print($pdfContent),
                "invoice_" . $invoice->invoice_number . ".pdf"
            );
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

    public function resetFilters(){
        $this->emit('updateVal', "filter_bmanager", null);
        $this->emit('updateVal', "filter_select_Date", null);
        $this->emit('updateVal', "filter_end_Date", null);
        $this->emit('updateVal', "filterRadio", null);
    }

    public function applyFilters()
    {
        $this->emit('updateVal', "filter_bmanager", $this->filter_bmanager);
        $this->emit('updateVal', "filter_select_Date", $this->filter_select_Date);
        $this->emit('updateVal', "filter_end_Date", $this->filter_end_Date);
        $this->emit('updateVal', "filterRadio", $this->filterRadio);
    }

    public function applyRadiofilter($name,$val)
    {
        // dd($name,$val);
        $this->emit('updateVal', $name, $val);
    }

    public function updateVal($attrName, $val)
    {
        $this->$attrName = $val;
    }

}

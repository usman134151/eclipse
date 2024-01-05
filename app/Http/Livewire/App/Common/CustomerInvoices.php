<?php

namespace App\Http\Livewire\App\Common;

use App\Helpers\SetupHelper;
use App\Models\Tenant\Booking;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\User;
use App\Services\App\InvoiceService;
use App\Services\PdfService;
use Livewire\Component;
use PDF;


class CustomerInvoices extends Component
{
    public $showForm, $invoice_id = 0, $counter = 0, $confirmationMessage = null;
    public $overDueAmount = 0, $comingAmount = 0, $avgPaymentDays = 0;
    protected $listeners = ['showList' => 'resetForm', 'openInvoiceDetails', 'downloadInvoice'=> 'createInvoicePDF', 'updateVal' => 'setCompanyDetails' , 'resetFilters'];
    public $filter_companies, $filter_bmanager, $filter_payment_status, $filterRadio, $filter_select_Date, $filter_end_Date;
        public $setupValues = [
        'companies' => ['parameters' => ['Company', 'id', 'name', 'status', 1, 'name', false, 'filter_companies', '', 'filter_companies', 2]],
        // 'specializations' => ['parameters' => ['Specialization', 'id', 'name', 'status', 1, 'name', true, 'filter_specialization', '', 'filter_specialization', 4]],
        // "service_type_ids" => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 5, 'setup_value_label', true, 'filter_service_type_ids', '', 'filter_service_type_ids', 4]],
        // 'ethnicity' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 3, 'setup_value_label', true, 'ethnicity', '', 'ethnicityassignProvider', 6]],
        // 'gender' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 2, 'setup_value_label', true, 'gender', '', 'genderassignProvider', 5]],
        // 'certifications' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 8, 'setup_value_label', true, ' certifications', '', ' certificationsassignProvider', 9]],

    ];
    public $bmanagers = [];

    public function setCompanyDetails($attrName, $val)
    {
        // dd($attrName, $val);
        if ($attrName == 'filter_companies') {
            // fetch billing managers for this company 
            $this->bmanagers = User::where('company_name', $val)->whereHas('roles', function ($query) {
                $query->where('role_id', 9);
            })->select(['users.name', 'users.id'])->get();

        }
        $this->$attrName = $val;
    }
    public function resetFilters(){
        $this->emit('updateVal', "filter_bmanager", null);
        $this->emit('updateVal', "filter_companies", null);
        $this->emit('updateVal', "filter_payment_status", null);
        $this->emit('updateVal', "filter_select_Date", null);
        $this->emit('updateVal', "filter_end_Date", null);
        $this->emit('updateVal', "filterRadio", null);
    }
  
    public function mount(){
        $this->overDueAmount = InvoiceService::getOverDueAmount();
        $this->comingAmount = InvoiceService::getComingAmount();
        $this->avgPaymentDays = InvoiceService::getAvgPaymentDays();

        $this->setupValues = SetupHelper::loadSetupValues($this->setupValues);

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
            $orderData['company_logo'] = public_path($invoice->company->company_logo != null ? $invoice->company->company_logo : '/tenant-resources/images/portrait/small/avatar-s-20.jpg');
            $pdfService = new PdfService;
            return $pdfService->generateCustomerInvoicePdf($orderData,"invoice_" . $invoice->invoice_number . ".pdf");
        }
    }

    public function applyFilters()
    {
        $this->emit('updateVal', "filter_bmanager", $this->filter_bmanager);
        $this->emit('updateVal', "filter_companies", $this->filter_companies);
        $this->emit('updateVal', "filter_payment_status", $this->filter_payment_status);
        $this->emit('updateVal', "filter_select_Date", $this->filter_select_Date);
        $this->emit('updateVal', "filter_end_Date", $this->filter_end_Date);
        $this->emit('updateVal', "filterRadio", $this->filterRadio);
    }

    public function applyRadiofilter($name,$val)
    {
        // dd($name,$val);
        $this->emit('updateVal', $name, $val);
    }
}

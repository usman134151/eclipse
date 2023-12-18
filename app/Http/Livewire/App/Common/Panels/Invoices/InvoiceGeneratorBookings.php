<?php

namespace App\Http\Livewire\App\Common\Panels\Invoices;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Company;
use App\Services\App\InvoiceService;
use Livewire\Component;

class InvoiceGeneratorBookings extends Component
{
    public $showForm, $company, $bookings, $selectedBookings = [], $selectAll = false, $showError = false,
        $totalPendingAmount, $totalOverDueAmount, $totalPaidAmount, $totalNotInvoiceAmount;
    protected $listeners = ['showList' => 'resetForm', 'openInvoicePanel'];

    public function render()
    {
        return view('livewire.app.common.panels.invoices.invoice-generator-bookings');
    }

    public function mount($company_id,$filter_bmanager)
    {
        $this->totalPendingAmount = InvoiceService::getTotalPendingDues($company_id);
        $this->totalOverDueAmount = InvoiceService::getTotalOverDues($company_id);
        $this->totalPaidAmount = InvoiceService::getTotalPaidAmount($company_id);
        $this->totalNotInvoiceAmount = InvoiceService::getTotalNotInvoiced($company_id);

        $this->company = Company::where('id', $company_id)->first();
        if ($this->company->addresses->count())
            $this->company->address = $this->company->addresses->first()->toArray();
            $query = Booking::where('bookings.company_id', '=', $company_id);
            if($filter_bmanager)
            {
                $query->where('bookings.billing_manager_id', $filter_bmanager);    
            }
            $query->where('bookings.type', '=', 1)
                ->where('bookings.booking_status', '=', '1')
                ->where('bookings.status', '<', '3')
                ->where('bookings.invoice_status', '=', '0')
                ->where('bookings.is_closed', '>', '0')
                ->leftJoin('payments', 'bookings.id', '=', 'payments.booking_id')
                ->select(['bookings.*'])->with('payment');
                
        $this->bookings = $query->get();

        // dd($this->bookings->first()['payment']);
    }

    public function updateSelectAll()
    {
        if ($this->selectAll == true)
            $this->selectedBookings = $this->bookings->pluck('id')->toArray();
        else
            $this->selectedBookings = [];
    }


    public function openInvoicePanel()
    {
        if (count($this->selectedBookings)) {
            $this->showError = false;
            $this->dispatchBrowserEvent('open-invoice-panel');
            $this->emit('openCreateInvoice', $this->selectedBookings);
        } else
            $this->showError = true;
    }

    function showForm()
    {
        $this->showForm = true;
    }

    public function resetForm()
    {
        $this->showForm = false;
    }
}

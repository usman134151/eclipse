<?php

namespace App\Http\Livewire\App\Common\Panels\Invoices;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\Company;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class InvoiceGeneratorBookings extends Component
{
    public $showForm, $company, $bookings, $selectedBookings = [], $selectAll = false, $showError = false;
    protected $listeners = ['showList' => 'resetForm', 'openInvoicePanel'];

    public function render()
    {
        return view('livewire.app.common.panels.invoices.invoice-generator-bookings');
    }

    public function mount($company_id)
    {
        $this->company = Company::where('id', $company_id)->first();
        if ($this->company->addresses->count())
            $this->company->address = $this->company->addresses->first()->toArray();
        $this->bookings =
            Booking::where('bookings.company_id', '=', $company_id)
            ->where('bookings.type', '=', 1)
            ->where('bookings.booking_status', '=', '1')
            ->where('bookings.status', '!=', '3')
            ->where('bookings.invoice_status', '=', '0')
            ->where('bookings.is_closed', '>', '0')

            ->leftJoin('payments', 'bookings.id', '=', 'payments.booking_id')
            ->select(['bookings.*'])->with('payment')
            ->get();
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

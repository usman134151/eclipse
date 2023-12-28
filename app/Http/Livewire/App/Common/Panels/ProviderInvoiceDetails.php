<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\ProviderInvoice;
use Livewire\Component;

class ProviderInvoiceDetails extends Component
{
    public $showForm, $invoice;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.provider-invoice-details');
    }

    public function mount($invoiceId)
    {
        $this->invoice = ProviderInvoice::where('id', $invoiceId)
            ->with(
                'provider_bookings',
                'provider_bookings.booking',
                'provider_bookings.booking_service',
                'provider_bookings.booking_service.service',
                'provider_bookings.booking.company',
                'provider_bookings.booking.customer',
                'provider_bookings.booking.booking_supervisor',
                'provider_bookings.booking.billing_manager',
            )->first()->toArray();
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

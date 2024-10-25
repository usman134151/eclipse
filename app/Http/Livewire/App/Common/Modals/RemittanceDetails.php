<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\ProviderInvoice;
use App\Models\Tenant\ProviderRemittancePayment;
use Livewire\Component;

class RemittanceDetails extends Component
{
    public $showForm, $list = [], $total = 0;
    protected $listeners = ['showList' => 'resetForm', 'openRemittanceDetails'];

    public function render()
    {
        return view('livewire.app.common.modals.remittance-details');
    }

    public function openRemittanceDetails($remittanceId, $total)
    {
        $this->total=$total;
        $rmb = BookingReimbursement::where(['remittance_id' => $remittanceId])->with('booking')->select(['reimbursement_number as number', 'amount', 'payment_status','booking_id'])->get()->toArray();
        $bookings = BookingProvider::where(['remittance_id' => $remittanceId])
        ->select(['total_amount', 'override_price', 'is_override_price', 'payment_status','booking_id','booking_service_id'])
        ->with(['booking','booking.customer','booking_service', 'booking_service.service'])->get()->toArray();
        $payments = ProviderRemittancePayment::where(['remittance_id' => $remittanceId])->select(['id as payment_id','number', 'total_amount as amount', 'payment_status'])->get()->toArray();
        $invoices = ProviderInvoice::where(['remittance_id' => $remittanceId])
        // ->with(['provider_bookings', 'provider_bookings.booking'])
        ->select(['id as invoice_id', 'invoice_number', 'total_amount as amount', 'payment_status'])->get()->toArray();

        $this->list=array_merge($rmb,$bookings, $payments, $invoices);
        // dd($this->list);
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

<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use Livewire\Component;

class RemittanceDetails extends Component
{
    public $showForm, $list = [];
    protected $listeners = ['showList' => 'resetForm', 'openRemittanceDetails'];

    public function render()
    {
        return view('livewire.app.common.modals.remittance-details');
    }

    public function openRemittanceDetails($remittanceId)
    {
        $rmb = BookingReimbursement::where(['remittance_id' => $remittanceId, 'booking_id' => null])->select(['remibursement_number as number', 'amount', 'status'])->get()->toArray();
        $bookings = BookingProvider::where(['remittance_id' => $remittanceId])->select(['total_amount', 'override_price', 'is_override_price', 'status'])->with(['booking'])->get()->toArray();
        $this->list=array_merge($rmb,$bookings);
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

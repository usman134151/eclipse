<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\User;
use Livewire\Component;

class RemittanceGeneratorBooking extends Component
{
    public $showForm, $provider, $data = [], $selectedBookings=[];
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.remittance.remittance-generator-booking');
    }

    public function mount($providerId)
    {
        $this->provider = User::where('id', $providerId)->with('userdetail')->first()->toArray();
        $bookings = BookingProvider::where(['provider_id' => $providerId, 'payment_status' => 0])
            ->with('booking')
            ->select('booking_id')
            ->selectRaw('CASE WHEN is_override_price = 1
               THEN override_price
               ELSE total_amount
          END AS amount')
            ->get()->toArray();
        //fetching unassociated reimbursements
        $reimbursements = BookingReimbursement::where(['provider_id' => $providerId, 'booking_id' => null, 'payment_status' => 0])->select(['id as reimbursement_id', 'reimbursement_number', 'amount', 'booking_id'])->get()->toArray();
        $this->data = array_merge($bookings, $reimbursements);
    }

    public function addToRemittance(){
        $selectedRows =[];
        foreach($this->selectedBookings as $index=> $rowIndex){
            $selectedRows[$index] = $this->data[$rowIndex];
        }
        // dd($selectedRows);
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

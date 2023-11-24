<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\User;
use Livewire\Component;

class RemittanceGeneratorBooking extends Component
{
    public $showForm, $provider,$data=[];
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.remittance.remittance-generator-booking');
    }

    public function mount($providerId)
    {
       $this->provider = User::where('id',$providerId)->with('userdetail')->first()->toArray();
       $bookings = BookingProvider::where(['provider_id'=>$providerId,'payment_status'=>0])
       ->with('booking')
       ->select('booking_id')
       ->selectRaw('CASE WHEN is_override_price = 1
               THEN override_price
               ELSE total_amount
          END AS amount')
       ->get()->toArray();
       $reimbursements = BookingReimbursement::where(['provider_id'=>$providerId,'payment_status'=>0])->select(['id as reimbursement_id','amount','booking_id'])->get()->toArray();
       $this->data = array_merge($bookings,$reimbursements);

    
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}

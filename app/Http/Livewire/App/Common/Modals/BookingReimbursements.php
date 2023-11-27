<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\BookingReimbursement;
use Livewire\Component;

class BookingReimbursements extends Component
{
    public $showForm,$rList=[], $sum;
    protected $listeners = ['showList' => 'resetForm', 'showReimbursemetDetails'];

    public function showReimbursemetDetails($bookingId, $providerId){
        $this->sum=0;
        $this->rList= BookingReimbursement::where(['booking_id'=>$bookingId,'provider_id'=>$providerId])->get()->toArray();
        foreach($this->rList as $i=> $item ){
            if (!empty($item['reason'])) {
                $reason = json_decode($item['reason'], true);
                $this->rList[$i]['reason'] = $reason['type'] === 'Other' ? $reason['details'] : $reason['type'];
            }else{
                $this->rList[$i]['reason'] = 'N/A';
            }
            $this->sum = $this->sum + $item['amount']; 

        }

    }
    public function render()
    {
        return view('livewire.app.common.modals.booking-reimbursements');
    }

    public function mount()
    {
       
       
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

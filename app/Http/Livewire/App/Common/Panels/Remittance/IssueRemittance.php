<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\User;
use Livewire\Component;

class IssueRemittance extends Component
{
    public $showForm, $list = [], $provider;
    protected $listeners = ['showList' => 'resetForm', 'issueRemittances'];

    public function render()
    {
        return view('livewire.app.common.panels.remittance.issue-remittance');
    }

    public function mount($selectedRows,$providerId)
    {
        $this->provider = User::find($providerId);
        foreach ($selectedRows as $index=> $row) {
            if (key_exists('reimbursement_id', $row)) {
                // fetch reimbursement data
            } else {
                //fetch booking details + associated reimbursements
                $bookingRecords = BookingProvider::where(['provider_id'=>$providerId, 'booking_id'=>$row['booking_id']])->get();
                //accesing reimbursement reason 
                 foreach($bookingRecords->first()->reimbursements as $rmb){
                    $reason = '';
                    if (!empty($rmb->reason)) {
                        $reason = json_decode($rmb['reason'], true);
                        $rmb->reason = $reason['type'] === 'Other' ? $reason['details'] : $reason['type'];
                    }
                }
                $this->list[$index] = $bookingRecords; 
            }
        }
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

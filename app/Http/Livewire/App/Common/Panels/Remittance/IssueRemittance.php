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
        foreach ($selectedRows as $row) {
            if (key_exists('reimbursement_id', $row)) {
                // fetch reimbursement data
            } else {
                //fetch booking details + associated reimbursements
                $this->list[] = BookingProvider::where(['provider_id'=>$providerId, 'booking_id'=>$row['booking_id']])->get();
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

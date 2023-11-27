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
        foreach ($this->selectedRows as $row) {
            if (key_exists('reimbursement_id', $row)) {
                // fetch reimbursement data
            } else {
                //fetch booking details + associated reimbursements
                // $this->list = BookingProvider::where(['provider_id'=>$provider, 'booking_id'])
            }
        }
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

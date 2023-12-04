<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\BookingReimbursement;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DenyReimbursement extends Component
{
    public $showForm, $rmb, $admin_response='';
    protected $listeners = ['showList' => 'resetForm', 'denyReimbursement'];

    public function denyReimbursement($reimbursementId)
    {
        $this->rmb = BookingReimbursement::find($reimbursementId);
        $reason = '';
        if (!empty($this->rmb->reason)) {
            $reason = json_decode($this->rmb->reason, true);
            $reason = $reason['type'] === 'Other' ? $reason['details'] : $reason['type'];
        }
        $this->rmb->reason = $reason;
    }

    public function saveResponse()
    {
        $this->rmb->admin_response = $this->admin_response;
        $this->rmb->status = 2;
        $this->rmb->approved_by = Auth::id();
        $this->rmb->approved_at = Carbon::now();
        $this->rmb->save();
        $this->emit('close-accept-modal');
        $this->emit('showList', 'Reimbursement denied successfully');
    }
    public function render()
    {
        return view('livewire.app.common.modals.deny-reimbursement');
    }

    public function mount()
    {
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

<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\BookingReimbursement;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ReimbursementReview extends Component
{
    public $showForm, $rmb, $admin_response='';
    protected $listeners = ['showList' => 'resetForm', 'selectedReimbursement'];

    public function selectedReimbursement($reimbursementId)
    {
        $this->rmb = BookingReimbursement::find($reimbursementId);
    }
    public function render()
    {
        return view('livewire.app.common.modals.reimbursement-review');
    }

    public function acceptReimbursement()
    {
        $this->rmb->admin_response = $this->admin_response;
        $this->rmb->status = 1;
        $this->rmb->approved_by = Auth::id();
        $this->rmb->approved_at = Carbon::now();
        $this->rmb->save();
        $this->emit('close-accept-modal');
        $this->emit('showList','Reimbursement accepted successfully');
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

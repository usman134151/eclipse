<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingReimbursement;
use App\Services\App\NotificationService;
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

        
        // $booking = Booking::find($this->rmb->booking_id);
        // $data['bookingData'] =  $booking ? $booking : [];
        // $data['reimbursementRequestData'] = $this->rmb;
        // NotificationService::sendNotification('Payments: Reimbursement Declined', $data);
        
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

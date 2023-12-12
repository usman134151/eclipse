<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingReimbursement;
use App\Services\App\NotificationService;
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
        $this->admin_response='';
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

        // $booking = Booking::find($this->rmb->booking_id);
        // $data['bookingData'] =  $booking ? $booking : [];
        // $data['reimbursementRequestData'] = $this->rmb;
        // NotificationService::sendNotification('Payments: Reimbursement Approved', $data);
        
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

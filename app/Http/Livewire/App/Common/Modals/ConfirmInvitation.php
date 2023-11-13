<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingInvitationProvider;
use App\Models\Tenant\Role;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Services\App\BookingAssignmentService;

class ConfirmInvitation extends Component
{
    public $showForm, $data = [

    ];
    public  $booking_id, $invitation_id;
    protected $listeners = ['showList' => 'resetForm', 'openProviderInvitationResponseModal' => 'setBooking'];

    public function mount(){
        $this->data = [
            'status' => 1, 'notes' => ''
        ];
    }
    public function render()
    {
        return view('livewire.app.common.modals.confirm-invitation');
    }
    public function setBooking($booking_id, $invitation_id)
    {
        $this->booking_id = $booking_id;
        $this->invitation_id = $invitation_id;
        $this->data = [
            'status' => 1, 'notes' => ''
        ];
        // 'booking_id'=>$booking_id,'invitation_id'=>$invitation_id,'provider_id'=>
    }
    public function save()
    {
        BookingInvitationProvider::where(['booking_id' => $this->booking_id, 'invitation_id' => $this->invitation_id, 'provider_id' => Auth::id()])
            ->update($this->data);
        if($this->data['status']==1)
            BookingAssignmentService::checkAutoAssign($this->invitation_id,$this->booking_id,Auth::id());
       
        $this->emit('closeConfirmInvitationModal');
        $this->emit('showConfirmation', 'Invitation response sent successfully');
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

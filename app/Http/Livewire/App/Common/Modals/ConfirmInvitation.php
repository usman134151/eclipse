<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\BookingInvitationProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ConfirmInvitation extends Component
{
    public $showForm, $data = [];
    public  $booking_id, $invitation_id;
    protected $listeners = ['showList' => 'resetForm', 'openProviderInvitationResponseModal' => 'setBooking'];

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
        BookingInvitationProvider::where(['booking_id'=> $this->booking_id,'invitation_id'=>$this->invitation_id,'provider_id'=>Auth::id()])
        ->update($this->data);
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

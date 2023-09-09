<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingAvailableProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AssignmentInvitation extends Component
{
    public $showForm, $booking_id = null, $data = [];
    protected $listeners = ['showList' => 'resetForm', 'openSubmitAvailabilityModal' => 'setBooking'];

    public function render()
    {
        return view('livewire.app.common.modals.assignment-invitation');
    }

    public function setBooking($booking_id)
    {
        $this->booking_id = $booking_id;
        $this->data = [
            'status' => 1, 'notes' => ''
        ];
    }

    public function mount()
    {

        $this->data = [
            'status' => 1, 'notes' => ''
        ];
    }

    public function save()
    {


        BookingAvailableProvider::updateOrCreate(['booking_id' => $this->booking_id, 'provider_id' => Auth::id()], $this->data);

        $this->emit('closeAssignmentInvitationModal');
        $this->emit('showConfirmation', 'Availability for assignment sent successfully');
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

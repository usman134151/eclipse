<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MessageTeam extends Component
{
    public $showForm, $bookingId, $message, $bookingData, $userIds;
    protected $listeners = ['showList' => 'resetForm', 'messageTeamModal' => 'messageTeam', 'messageTeamResponse'];

    public function render()
    {
        return view('livewire.app.common.modals.message-team');
    }

    public function mount()
    {
    }

    public function messageTeam($bookingId)
    {
        $this->userIds = [];
        $this->bookingId = $bookingId;
        $booking = Booking::where('id', $bookingId)
            ->select(['booking_number', 'user_id', 'customer_id', 'supervisor', 'billing_manager_id'])
            ->first();

        $booking_number = $booking->booking_number;

        $userIdsToCheck = [
            $booking->user_id,
            $booking->customer_id,
            $booking->supervisor,
            $booking->billing_manager_id,
        ];

        $superAdmins = User::where('id', '!=', Auth::user()->id)
            ->whereHas('roles', function ($query) {
                $query->whereIn('role_id', [1]); // role id 1 is super admin
            })
            ->pluck('id')
            ->toArray();

        foreach ($userIdsToCheck as $userId) {
            if ($this->containsId($userId)) {
                $this->userIds[] = intval($userId);
            }
        }

        $providers = BookingProvider::where('booking_id', $bookingId)->pluck('provider_id')->toArray();
        $this->userIds = array_merge($this->userIds, $providers, $superAdmins);
        $this->bookingData = "With reference to booking number: " . $booking_number;
    }

    public function sendMessage()
    {
        $this->emit('sendMessageTeamEvent', [
            'userIds' => $this->userIds,
            'message' => $this->message . "\n" . $this->bookingData,
        ]);
    }

    public function messageTeamResponse($payload)
    {
        $this->emit('closeMessageTeamModal');
        $this->message = '';
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => $payload['type'],
            'title' => $payload['title'],
            'text' => $payload['message'],
        ]);
    }


    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }

    private function containsId($value)
    {
        if (
            $value !== null &&
            $value !== '' &&
            $value !== '0' &&
            $value !== 0 && $value != Auth::user()->id
        ) {
            return true;
        }
        return false;
    }
}
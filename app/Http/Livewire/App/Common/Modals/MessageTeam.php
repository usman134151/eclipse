<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingChMessage;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\ChMessage;
use App\Models\Tenant\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MessageTeam extends Component
{
    public $showForm, $bookingId, $message, $bookingData, $userIds, $historyMessages;
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
        // $this->userIds = array_merge($this->userIds, $providers, $superAdmins);
        $this->userIds = array_values(array_unique(array_merge($this->userIds, $providers, $superAdmins)));


        $chatIds = BookingChMessage::where('booking_id', $this->bookingId)->pluck('ch_message_id')->toArray();

        $messages = ChMessage::whereIn('id', $chatIds)
            ->select('body', 'from_id', 'created_at')
            ->get();

        $groupedMessages = $messages->groupBy('body');

        $messageData = [];

        foreach ($groupedMessages as $body => $messages) {
            $firstMessage = $messages->first();
            $user = User::find($firstMessage->from_id);
            if ($user) {
                $sentBy = $user->name; 
                $sentAt = $firstMessage->created_at;
                $messageData[] = $body . ". Sent by " . $sentBy . " at " . formatDateTime($sentAt);
            }
        }

        $this->historyMessages = $messageData;

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
        $messagesIds = $payload['response'];


        $insertData = collect($messagesIds)->map(function ($messageId) {
            return [
                'booking_id' => $this->bookingId,
                'ch_message_id' => $messageId,
            ];
        })->toArray();

        BookingChMessage::insert($insertData);

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

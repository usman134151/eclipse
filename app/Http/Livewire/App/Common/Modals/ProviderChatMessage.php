<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use Livewire\Component;

class ProviderChatMessage extends Component
{
    public $showForm, $bookingData, $userIds, $message, $bookingId;
    protected $listeners = ['showList' => 'resetForm', 'providerChatMessageModal' => 'providerChatMessage' , 'providerChatMessageResponse' => 'messageResponse'];

    public function render()
    {
        return view('livewire.app.common.modals.provider-chat-message');
    }

    public function mount()
    {
       
       
    }

    public function providerChatMessage($bookingId)
    {
        $booking = Booking::where('id', $bookingId)
        ->select(['booking_number'])
        ->first();

        $booking_number = $booking->booking_number;

        $this->userIds = BookingProvider::where('booking_id', $bookingId)->pluck('provider_id')->toArray();
        $this->bookingData = "With reference to booking number: " . $booking_number;

    }

    public function sendMessage()
    {
        $this->emit('sendProviderChatMessageEvent', [
            'userIds' => $this->userIds,
            'message' => $this->message . "\n" . $this->bookingData,
        ]);
    }

    public function messageResponse($payload)
    {
        $this->emit('closeProviderChatMessageModal');
        $this->message = '';
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => $payload['type'],
            'title' => $payload['title'],
            'text' => $payload['message'],
        ]);
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}

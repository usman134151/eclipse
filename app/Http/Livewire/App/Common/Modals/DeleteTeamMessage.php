<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingChMessage;
use App\Models\Tenant\ChMessage;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DeleteTeamMessage extends Component
{
    public $showForm, $bookingId, $message, $chatIds;
    protected $listeners = ['showList' => 'resetForm', 'deleteTeamMessageModal' => 'deleteTeamMessage'];

    public function render()
    {
        return view('livewire.app.common.modals.delete-team-message');
    }

    public function mount()
    {
    }

    public function deleteTeamMessage($bookingId)
    {
        $this->bookingId = $bookingId;
        $this->chatIds = BookingChMessage::where('booking_id', $bookingId)->pluck('ch_message_id')->toArray();
        $messages = ChMessage::whereIn('id', $this->chatIds)
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
        $this->message = $messageData;
    }

    public function deleteMessage()
    {
        ChMessage::whereIn('id', $this->chatIds)->delete();
        BookingChMessage::where('booking_id', $this->bookingId)->delete();
        $booking = Booking::where('id',$this->bookingId)->first();
        $message = "Booking '". $booking->booking_number ."' Team Chat Messages deleted by ". Auth::user()->name;
        callLogs($this->bookingId, "Booking", "Team Chat Messages delete",$message);
        $this->emit('closeDeleteTeamMessageModal');
        $this->emit('showConfirmation', 'Messages deleted successfully');
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

<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\BookingChMessage;
use App\Models\Tenant\ChMessage;
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
        $messages = ChMessage::whereIn('id', $this->chatIds)->pluck('body')->toArray();
        $messages = array_unique($messages);
        $this->message = implode("\n", $messages);
    }

    public function deleteMessage()
    {
        ChMessage::whereIn('id', $this->chatIds)->delete();
		BookingChMessage::where('booking_id', $this->bookingId)->delete();
		callLogs($this->bookingId, "Booking", "Team Chat Messages delete");
        $this->emit('closeDeleteTeamMessageModal');
        $this->emit('showConfirmation', 'Messages deleted successfully');

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

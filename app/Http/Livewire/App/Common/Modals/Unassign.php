<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingUnassignProvider;
use App\Models\Tenant\BookingInvitationProvider;
use App\Models\Tenant\User;
use Carbon\Carbon;
use Livewire\Component;
use App\Services\App\BookingAssignmentService;
use Illuminate\Support\Facades\Auth;

class Unassign extends Component
{
    public $showForm, $booking_id = null, $provider_id = null, $booking_service_id = null, $data = [];
    protected $listeners = ['showList' => 'resetForm', 'openUnassignModal' => 'setBooking', 'updateVal'];

    public function render()
    {
        return view('livewire.app.common.modals.unassign');
    }

    public function updateVal($attrName, $val)
    {
        $this->data[$attrName] = $val;
    }
    public function mount()
    {
        $this->data = [
            'unassign_reason' => '',
            'unassign_date' => null,
        ];
    }

    public function setBooking($booking_service_id = null, $provider_id, $booking_id)
    {

        $this->booking_id = $booking_id;
        $this->booking_service_id = $booking_service_id;
        $this->provider_id = $provider_id;
        $this->data = [
            'unassign_reason' => '',
            'unassign_date' => null,
            
        ];
    }

    public function save()
    {
        $this->data['unassign_date'] = Carbon::now();
      
        BookingUnassignProvider::updateOrCreate([
            'booking_id' => $this->booking_id, 'booking_service_id' => $this->booking_service_id,
            'provider_id' => $this->provider_id
        ], $this->data);

        BookingProvider::where(['booking_service_id' => $this->booking_service_id, 'provider_id' => $this->provider_id, 'booking_id' => $this->booking_id])->delete();
        //updating invite data too to avoid reassignment
        BookingInvitationProvider::where(['booking_id' => $this->booking_id, 'provider_id' =>$this->provider_id])
        ->update(['status'=>3]);
        //send unassign email 
        $user = User::find($this->provider_id);
        $templateId = getTemplate('Booking: Provider Unassigned', 'email_template');

            $params = [
                'email'       =>  $user->email, //
                'user'        =>  $user->name,
                'user_id'     =>  $user->id,
                'templateId'  =>  $templateId,
                'booking_id'     => $this->booking_id,
                'mail_type'   => 'booking',
                'templateName' => 'Unassigned From Assignment',
                // 'bookingData' => $this->booking,
                'booking_service_id' => $this->booking_service_id,
            ];

            sendTemplatemail($params);

        $booking = Booking::findOrFail($this->booking_id);
        $booking->update(['status' => 1]);    
        $bookingNumber = $booking->booking_number;
            
        $message="Provider '".$user->name."' unassigned from booking '".$bookingNumber;
        if($this->data['unassign_reason'])
           $message.="' (Reason: ".$this->data['unassign_reason'].')';
        $message .= ' by '. Auth::user()->name;
        callLogs($this->booking_id,'Booking','unassigned',$message);
        BookingAssignmentService::reTriggerAutoAssign( $this->booking_id,$this->booking_service_id);
        //add check for booking_status update
        $this->emit('showConfirmation', 'Provider Assignment has been revoked successfully');
        $this->emit('closeUnassignModel');
        
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

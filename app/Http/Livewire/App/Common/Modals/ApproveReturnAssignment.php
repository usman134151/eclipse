<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Services\App\BookingAssignmentService;
use Livewire\Component;

class ApproveReturnAssignment extends Component
{
    public $showForm, $bookingService_id, $bookingProvider;
    protected $listeners = ['showList' => 'resetForm', 'openApproveReturnAssignmentModal' => 'setBooking'];

    public function render()
    {
        return view('livewire.app.common.modals.approve-return-assignment');
    }

    public function setBooking($booking_service_id = null, $provider_id, $booking_id)
    {

        // $this->booking_id = $booking_id;
        $this->bookingService_id = $booking_service_id;
        $this->bookingProvider= BookingProvider::where(['booking_service_id'=>$booking_service_id, 'provider_id'=>$provider_id])->first();
        
    }


    public function save($accept=0)
    {
        if($accept==1){
            //accept the request, remove/unassign provider from service
            $message = "Provider '" . $this->bookingProvider->user->name . "' surrendered from booking";

            $this->bookingProvider->delete();
            $booking = Booking::find($this->bookingProvider->booking_id);
            $booking->status = 1;
            $booking->save();

            callLogs($booking->id, 'unassign', 'unassigned', $message);
            BookingAssignmentService::reTriggerAutoAssign($booking->id, $this->bookingService_id);
            $message = "Request accepted, provider unassigned from booking successfully";

        }elseif($accept==0){
            //reject request, send respective emails and reset booking_providers.return_status 
            $this->bookingProvider->return_status = 0;
            $this->bookingProvider->provider_response = null;
            $this->bookingProvider->save();
            $message = "Request denied, provider retained for booking";


        }
        //closing modal
        $this->emit('showConfirmation', $message);
        $this->emit('closeApproveReturnAssignmentModal');
       
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

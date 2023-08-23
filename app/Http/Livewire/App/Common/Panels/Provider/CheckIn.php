<?php

namespace App\Http\Livewire\App\Common\Panels\Provider;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingServices;
use Livewire\Component;

class CheckIn extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm', 'setCheckInBookingId'=>'setBookingId'];
    public $booking_id=0, $assignment=null, $booking_service=null;

    public function render()
    {

        return view('livewire.app.common.panels.provider.check-in');
    }

    //set booking id when ever panel is opened
    public function setBookingId($booking_id,$booking_service_id){
        $this->booking_id = $booking_id;

        if ($booking_id){
            $this->assignment = Booking::where('id', $this->booking_id)->first();
            $this->booking_service = BookingServices::where('id',$booking_service_id)->first();
            $this->booking_service->checkin_details = json_decode($this->booking_service->service->check_in_procedure,true);
            // dd($this->booking_service);
        }
    }

    public function mount()
    {
        if ($this->booking_id)
            $this->assignment = Booking::where('id', $this->booking_id)->first();

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

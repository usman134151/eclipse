<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use Livewire\Component;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\ServiceCategory;
use App\Services\App\BookingOperationsService;

class CancelBooking extends Component
{
    public $showForm;
    protected $listeners = ['getBookingData'];
    public $serviceTypes=['1'=>['class'=>'inperson-rate','postfix'=>'','title'=>'In-Person'],
    '2'=>['class'=>'virtual-rate','postfix'=>'_v','title'=>'Virtual'],
    '4'=>['class'=>'phone-rate','postfix'=>'_p','title'=>'Phone'],
    '5'=>['class'=>'teleconference-rate','postfix'=>'_t','title'=>'Teleconference'],
  ];
    public $booking;

    public function render()
    {
        return view('livewire.app.common.panels.booking-details.cancel-booking');
    }

    public function mount()
    {
       $this->booking=new Booking();
       
    }

    public function getBookingData($bookingId){
        $this->booking=BookingOperationsService::getBookingDetails($bookingId,$this->serviceTypes,'cancellation','cancellation_hour1');
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

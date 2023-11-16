<?php

namespace App\Http\Livewire\App\Common\Modals\Admin;

use App\Models\Tenant\Booking;
use Livewire\Component;

class ReturnAssignment extends Component
{
    public $showForm, $booking, $bookingService;
    protected $listeners = ['showList' => 'resetForm', 'openReturnAssignmentModal' => 'setDetails'];

    public function render()
    {
        return view('livewire.app.common.modals.admin.return-assignment');
    }

    public function setDetails($booking_id, $service_id = null)
    {
        $this->booking = Booking::where('id', $booking_id)->first();

        if (is_null($service_id)) 
            //if booking_providers.service_id not set, fetch first service from booking_services 
            $service_id = $this->booking->services->first()->id;
        // } else
        //     $service = $this->booking->services->where('id', $service_id)->first();
        $this->bookingService = $this->booking->booking_services->where('services',$service_id)->first();

    }

    public function unassign(){

    }

    public function mount()
    {
       
       
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

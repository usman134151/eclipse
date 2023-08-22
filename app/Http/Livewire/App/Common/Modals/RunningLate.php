<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\ServiceCategory;
use Livewire\Component;

class RunningLate extends Component
{
    public $showForm , $service;
    protected $listeners = ['showList' => 'resetForm', 'openRunningLateModal' => 'setDetails'];

    public function setDetails($booking_id, $service_id=null)
    {

        if (is_null($service_id)) {
            //if booking_providers.service_id not set, fetch first service from booking_services 
            $booking = Booking::where('id',$booking_id)->first();
            $this->service = $booking->services->first();  
        }else
        $this->service = ServiceCategory::where('id',$service_id)->first();
        // dd($this->service);
    }

    public function render()
    {
        return view('livewire.app.common.modals.running-late');
    }

    public function mount()
    {
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

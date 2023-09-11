<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Models\Tenant\BookingProvider;
use Livewire\Component;

class ProviderCompletedBookingServices extends Component
{
    public $showForm ,$booking_id=0, $data=[], $service_id = 0 ;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.bookings.provider-completed-booking-services');
    }

    public function mount()
    {
        $this->data['attendingProviders'] = BookingProvider::where(['booking_providers.booking_id' => $this->booking_id])
        ->join('booking_services',function($join){
            $join->on('booking_services.id','booking_providers.booking_service_id');
            $join->where(['booking_services.services'=>$this->service_id, 'booking_services.booking_id'=>$this->booking_id]);
        })
        ->whereHas('user')
        ->get();
			// dd($this->data['attendingProviders']->first()->check_out_procedure_values);
		
       
       
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

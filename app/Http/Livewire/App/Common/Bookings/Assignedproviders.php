<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\User;
use Livewire\WithPagination;

class Assignedproviders extends Component
{
    use WithPagination;
    public $booking_id, $service_id = null, $index = 1;
    public $limit;

    protected $assignedProviders = [];
    protected $listeners = [];



 

    public function mount($booking_id, $service_id)
    {
        $this->booking_id = $booking_id;
        if ($service_id == null)
            $this->service_id = BookingServices::where('booking_id', $this->booking_id)->first()->pluck('services');
        else 
        $this->service_id = $service_id;
    }

    
    public function render()
    {
        $booking_service = BookingServices::where(['booking_id' => $this->booking_id, 'services' => $this->service_id])->first();

        // add this/appropriate condition to the query once bookng_providers are associated with booking_services
        // 'services'=>$this->service_id

        $query = BookingProvider::query();
        $query->where(['booking_id' => $this->booking_id]);
        $query->join('users', 'booking_providers.provider_id', '=', 'users.id');
        if ($booking_service)
            $query->where('booking_service_id', $booking_service->id);

        return view('livewire.app.common.bookings.assignedproviders', ['assignedProviders' => $query->paginate(10)]);
    }
}

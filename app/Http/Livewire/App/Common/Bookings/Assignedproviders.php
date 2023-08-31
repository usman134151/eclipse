<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingInvitation;
use Livewire\Component;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\User;
use Livewire\WithPagination;

class Assignedproviders extends Component
{
    use WithPagination;
    public $booking_id, $service_id = null, $index = 1;
    public $limitReached = true, $inv_exists = false;


    protected $assignedProviders = [];
    protected $listeners = [];



    public function removeProviderAssignment($booking_service_id = null, $provider_id, $booking_id)
    {
        // dd($booking_service_id,$provider_id,$booking_id);
        BookingProvider::where(['booking_service_id' => $booking_service_id, 'provider_id' => $provider_id, 'booking_id' => $booking_id])->delete();
        Booking::where(['booking_id' => $booking_id])->update(['booking_status'=>1]);
        //add check for booking_status update
        $this->emit('showConfirmation', 'Provider Assignment has been revoked successfully');
    }

    public function mount($booking_id, $service_id)
    {
        $this->booking_id = $booking_id;
        if ($service_id == null)
            $this->service_id = BookingServices::where('booking_id', $this->booking_id)->first()->pluck('services');
        else
            $this->service_id = $service_id;

        $this->inv_exists  = BookingInvitation::where(['booking_id' => $this->booking_id, 'service_id' => $this->service_id])->first();
        // $count = BookingProvider::where(['booking_id'=>$this->booking_id,'booking_service_id'=> $booking_service->id])->count();
        // if($count < $booking_service->provider_count )
        //     $this->limitReached= false;
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

        if ($query->count() < intval($booking_service->provider_count))
            $this->limitReached = false;
        else
            $this->limitReached = true;

        return view('livewire.app.common.bookings.assignedproviders', ['assignedProviders' => $query->paginate(10)]);
    }
}

<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\User;
use App\Models\Tenant\Booking;
use App\Models\Tenant\UserAddress;

class Map extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $locations=[];
  


    public function render()
    {
        return view('livewire.app.common.map', [
            'locations' => $this->locations,
        ]);
    }

    public function mount()
    {
        $locations = Booking::
        join('user_addresses', 'bookings.physical_address_id', '=', 'user_addresses.id')
        ->join('booking_services', 'bookings.id', '=', 'booking_id')
        ->join('service_categories', 'booking_services.services', '=', 'service_categories.id')
        ->select([
            'bookings.booking_number',
            'service_categories.name as service_name',
            'user_addresses.address_name',
            'user_addresses.address_line1',
            'user_addresses.latitude',
            'user_addresses.longitude',
            'user_addresses.city',
            'user_addresses.state',
            'user_addresses.country',
            'user_addresses.zip',
        ])->get();
    
        $locationsArray = [];
    
        foreach ($locations as $location) {
            $locationData = [
                'title' => $location->booking_number,
                'service' => $location->service_name,
                'address' => $location->address_line1 . ', ' . $location->city . ', ' . $location->state . ', ' . $location->country . ', ' . $location->zip,
                'lat' => $location->latitude,
                'long' => $location->longitude
            ];
    
            $locationsArray[] = $locationData;
        }
    
        $this->locations = $locationsArray;
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

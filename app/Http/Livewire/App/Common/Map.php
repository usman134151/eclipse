<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\User;
use App\Models\Tenant\Booking;
use App\Models\Tenant\UserAddress;
use DB;

class Map extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm','apply'=> 'applyFilters'];
    public $locations=[];
    public $selectedDate;
    public $selectedBookingNo;
    public $selectedAddress;
    public $bookingList;
    public $addressList;
    public $selectedBooking;
  

    public function render()
    {
        return view('livewire.app.common.map', [
            'locations' => $this->locations,
        ]);
    }

    public function mount()
    {
        $this->bookingList=Booking::select('id','booking_number')->get();
         $this->addressList = UserAddress::select([
            DB::raw("CONCAT(address_line1,', ', city, ', ', state, ', ', country) as full_address")
            ])->get();
      
           $this->applyFilters();
    }

   // seprate function for implementing the filters
    public function applyFilters()
    {
       
        $locations = Booking::join('user_addresses', 'bookings.physical_address_id', '=', 'user_addresses.id')
            ->join('booking_services', 'bookings.id', '=', 'booking_id')
            ->join('service_categories', 'booking_services.services', '=', 'service_categories.id')
            ->when($this->selectedDate, function ($query, $selectedDate) {
                return $query->whereDate('bookings.booking_start_at', date("Y-m-d", strtotime($this->selectedDate)));
            })
            ->when($this->selectedAddress, function ($query, $selectedAddress) {
                return $query->whereRaw("CONCAT(address_line1, ', ', city, ', ', state, ', ', country) LIKE ?", ['%' . $selectedAddress . '%']);

            })
            ->when($this->selectedBookingNo, function ($query, $selectedBookingNo) {
                return $query->where('bookings.id',$selectedBookingNo);
            })
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
           
            $this->dispatchBrowserEvent('livewire:map',[
                'locations'=>$this->locations
                 ]);
          
    

    }
    //this is for filters
    public function updateVal($inputId, $inputValue)
    {
        switch ($inputId) {
            case "Booking":

                $selectedBooking=Booking::where('id',$inputValue)->select('Booking_number')->first();
                $this->selectedBooking=$selectedBooking->Booking_number;
                $this->selectedBookingNo=$inputValue;

                break;
            
            case "Address":
                 $this->selectedAddress=$inputValue;
                break;
    
            case "selecteddate":
                $this->selectedDate = $inputValue;
               
                break;
        }
        // Trigger the filter action after updating the property
        $this->applyFilters();
        $this->addressList = UserAddress::select([
            DB::raw("CONCAT(address_line1,', ', city, ', ', state, ', ', country) as full_address")
            ])->get();
    }
    
    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }
    public function resetDate()
    {
        $this->selectedBooking = null; // Reset the selected date and bookingid etc
        $this->selectedAddress=null;
        $this->selectedDate =null;
        $this->selectedBookingNo=null;
        $this->applyFilters();
      
    }

}

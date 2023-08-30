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
    protected $listeners = ['showList' => 'resetForm', 'apply' => 'applyFilters','updateVal'];
    public $locations = [];
    public $selectDate;
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
        $this->bookingList = Booking::select('id', 'booking_number')->whereNotNull('physical_address_id')->get();
        $this->addressList = UserAddress::select([
            DB::raw("CONCAT(address_line1,', ', city, ', ', state, ', ', country) as full_address")
        ])->get();
        $this->dispatchBrowserEvent('refreshSelects');
        $this->applyFilters();
    }

    // seprate function for implementing the filters
    public function applyFilters()
    {

        $locations = Booking::join('user_addresses', 'bookings.physical_address_id', '=', 'user_addresses.id')
            ->join('booking_services', 'bookings.id', '=', 'booking_id')
            ->join('service_categories', 'booking_services.services', '=', 'service_categories.id')
            ->when($this->selectDate, function ($query, $selectDate) {
                return $query->whereDate('bookings.booking_start_at', date("Y-m-d", strtotime($this->selectDate)));
            })
            ->when($this->selectedAddress, function ($query, $selectedAddress) {
                return $query->whereRaw("CONCAT(address_line1, ', ', city, ', ', state, ', ', country) LIKE ?", ['%' . $selectedAddress . '%']);
            })
            ->when($this->selectedBookingNo, function ($query, $selectedBookingNo) {
                return $query->where('bookings.id', $selectedBookingNo);
            })
            ->select([
                'bookings.id',
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
                'booking_id' => encrypt($location->id),
                'title' => $location->booking_number,
                'service' => $location->service_name,
                'address' => $location->address_line1 . ', ' . $location->city . ', ' . $location->state . ', ' . $location->country . ', ' . $location->zip,
                'lat' => $location->latitude,
                'long' => $location->longitude
            ];

            $locationsArray[] = $locationData;
        }

        $this->locations = $locationsArray;

        $this->dispatchBrowserEvent('livewire:map', [
            'locations' => $this->locations
        ]);
    }
    //this is for filters
    public function updateVal($inputId, $inputValue)
    {
      
        switch ($inputId) {
            case "Booking":

                $selectedBooking = Booking::where('id', $inputValue)->select('Booking_number')->first();
                $this->selectedBooking = $selectedBooking->Booking_number;
                $this->selectedBookingNo = $inputValue;

                break;

            case "Address":
                $this->selectedAddress = $inputValue;
                break;

            case "selectdate":
                $this->selectDate = $inputValue;

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
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
    public function resetDate()
    {
        $this->selectedBooking = null; // Reset the selected date and bookingid etc
        $this->selectedAddress = null;
        $this->selectDate = null;
        $this->selectedBookingNo = null;
        $this->applyFilters();
        $this->addressList = UserAddress::select([
            DB::raw("CONCAT(address_line1,', ', city, ', ', state, ', ', country) as full_address")
        ])->get();
    }
}

<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\Booking;
use App\Models\Tenant\User;
use App\Models\Tenant\Team;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\TeamProviders;
use Carbon\Carbon;

class Availibility extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm','bookingSelected' => 'BookingFetch'];
    public $currentDate;
    public $schedule;
    public $dayPlusDate;
    public $startBTime=0;
    public $endBTime=24;
    public $tableHeaders;
    public $bookingList;
    public $Filter= 'CurrentDate';
    public $ID; // Make sure this property is defined
    public $providerList;
    public $selecteddate;
    public $selectedBookingNumber;
    public $selectedTeam;
    public $selectedProvider;
    public $bookingFilter;
    public $providerFilter;


    

    public function render()
    {
        return view('livewire.app.common.availibility');
    }
    
    public function updatedSelectedDate($value)
    {  $this->currentDate=$value;
        $this->Filter="changedate";
        $bookingData = $this->getBookingData();
        $this->schedule = $this->transformBookingData($bookingData);
    }

    public function mount()
    {
        $this->currentDate = Carbon::now();
    
        
        $dayOfWeek = $this->currentDate->format('D'); // Get the day of the week abbreviation (e.g., "Thu")
        $dayOfMonth = $this->currentDate->format('d'); // Get the day of the month (e.g., "20")

        $this->dayPlusDate = $dayOfWeek . ' ' . $dayOfMonth; // Join day of the week and day of the month
        $this->tableHeaders = $this->generateTimeHeaders();
        $this->bookingList=Booking::select('id','booking_number')->get();
        $this->providerList=User::query()
        ->whereHas('roles', function ($query) {
            $query->wherein('role_id', [2]);
        })->select([
            'users.id',
            'users.name',
        ])->get();
        // $this->teamList=Team::select('id','name')->get();
        $bookingData = $this->getBookingData();
   
        $this->schedule = $this->transformBookingData($bookingData);

       //dd($this->schedule);
    }

    private function getBookingData()
    {
        $query = Booking::join('booking_providers', 'bookings.id', '=', 'booking_providers.booking_id')
            ->join('users', 'users.id', '=', 'booking_providers.provider_id')
            ->join('booking_services', 'bookings.id', '=', 'booking_services.booking_id')
            ->join('service_categories', 'booking_services.services', '=', 'service_categories.id')
            ->select(
                'users.id as usersid',
                'bookings.id as bookingId',
                'users.name as Provider',
                'service_categories.name as Title',
                'booking_services.start_time',
                'booking_services.end_time'
            )
            ->orderByDesc('booking_services.start_time');
    
        $this->currentDate = Carbon::now();

        if ($this->Filter == "CurrentDate") {
            $query->whereDate('booking_start_at', $this->currentDate->format('Y-m-d'));
        } 
        // elseif ($this->Filter == "Booking") {
        //     $query->whereDate('booking_start_at', $this->currentDate->format('Y-m-d'))
        //         ->where('bookings.id', $this->ID);
        // } elseif ($this->Filter == "Provider") {
        //     $query->where("provider_id", $this->ID)
        //         ->whereDate('bookings.booking_start_at', $this->currentDate->format('Y-m-d'));
        // } 
        elseif ($this->Filter == "changedate") {
            $query->whereDate('booking_start_at', date("Y-m-d", strtotime($this->selecteddate)));
        } 
        // elseif ($this->Filter == "Team") {
        //     $team = Team::find($this->ID);
        //     if ($team) {
        //         $userIds = TeamProviders::where("team_id", $this->ID)
        //             ->pluck('provider_id')
        //             ->toArray();
        //         $query->whereIn("provider_id", $userIds);
        //     } else {
        //         $query->where('users.id', null); // Empty result
        //     }
        //     $query->whereDate('bookings.booking_start_at', $this->currentDate->format('Y-m-d'));
        // }
        // $this->bookingFilter = null;
        // $this->providerFilter = null;
    
        return $query->get()->toArray();
    }
    
    private function transformBookingData($bookingData)
    {
        $groupedData = [];

        foreach ($bookingData as $booking) {
            $userId = $booking['usersid'];
            $bookingId = $booking['bookingId'];
            $provider = $booking['Provider'];

            if (!isset($groupedData[$userId])) {
                $groupedData[$userId] = [
                    'user_id' => $userId,
                    'booking_id' => $bookingId,
                    'Name'=>$provider,
                    'bookings' => $this->initializeTimeSlots()
                ];
            }

            $this->populateTimeSlot($groupedData[$userId]['bookings'], $booking);
        }

        return array_values($groupedData);
    }

    private function initializeTimeSlots()
    {
        $timeSlots = [];
        
        // Create time slots with 2-hour intervals
        for ($hour = $this->startBTime; $hour <= $this->endBTime - 2; $hour += 2) {
            $timeSlot = [
                
            ];
            
            $formattedHour = sprintf('%02d', $hour); // Format as two digits, e.g., 02 instead of 2
           
            
            $timeSlots[$formattedHour . ':00'] = $timeSlot;
        }
        
        return $timeSlots;
    }
    
    private function populateTimeSlot(&$timeSlots, $booking)
{
    $startTime = Carbon::parse($booking['start_time']);
    $endTime = Carbon::parse($booking['end_time']);
    $durationHours = $startTime->diffInHours($endTime);
    
    // Truncate the title to 10 characters at most
    $title = strlen($booking['Title']) > 10 ? substr($booking['Title'], 0, 10) . '...' : $booking['Title'];

    // Find the appropriate time slot for the booking
    $hourSlot = $startTime->format('H');
    $formattedHourSlot = sprintf('%02d', $hourSlot);
    
    if (isset($timeSlots[$formattedHourSlot . ':00'])) {
        $slots = [
            'title' => $title, // Use the truncated title
            'col' => '',
            'class' => 'bg-purple event-box',
        ];
        array_push($timeSlots[$formattedHourSlot . ':00'], $slots);
    } else {
        $hourSlot = $startTime->format('H');
        $hourSlot = $hourSlot - 1;
        $formattedHourSlot = sprintf('%02d', $hourSlot);

        if (isset($timeSlots[$formattedHourSlot . ':00'])) {
            $slots = [
                'title' => $title, // Use the truncated title
                'col' => '',
                'class' => 'bg-lighter event-box',
            ];
            array_push($timeSlots[$formattedHourSlot . ':00'], $slots);
        }
    }
}

    
    // This is for the th
    function generateTimeHeaders() {
        $timeHeaders = [];
        
        for ($hour = 0; $hour < 24; $hour += 2) {
            $formattedHour = sprintf('%02d', $hour);
            $timeHeaders[] = $formattedHour . ':00-' . sprintf('%02d', $hour + 2) . ':00';
        }
        
        return $timeHeaders;
    }
    
    
    public function ChangeFilter($ID, $Filter)
    {
        $this->Filter = $Filter;
        $this->ID = $ID;
        $bookingData = $this->getBookingData();
    
        switch ($Filter) {
            case "Booking":
                $selectedBooking = Booking::where("id", $ID)->select('booking_number')->first();
                $this->selectedBookingNumber = $selectedBooking ? $selectedBooking->booking_number : '';
                $this->selectedTeam=null;
                $this->selectedProvider=null;
                break;
            
            case "Provider":
                $selectedProvider = User::where("id", $ID)->select('name')->first();
                $this->selectedProvider = $selectedProvider ? $selectedProvider->name : '';
                $this->selectedBookingNumber=null;
                $this->selectedTeam=null;
                break;
    
            case "Team":
                $selectedTeam = Team::where("id", $ID)->select('name')->first();
                $this->selectedTeam = $selectedTeam ? $selectedTeam->name : '';
                $this->selectedBookingNumber=null;
                $this->selectedProvider=null;
                break;
        }
    
        $this->schedule = $this->transformBookingData($bookingData);
    }
    

    public function showForm()
    {
        $this->showForm = true;
    }

    public function resetForm()
    {
        $this->showForm = false;
    }
    public function updateVa($attrName, $val)
	{

		   $this->selecteddate= $val;
           $this->Filter="changedate";
           $bookingData = $this->getBookingData();
           $this->schedule = $this->transformBookingData($bookingData);

	}

    public function resetDate()
    {
        $this->bookingFilter = null;
        $this->providerFilter = null;
        $this->selecteddate = null; // Reset the selected date
        $this->selectedBookingNumber=null;
        $this->selectedTeam=null;
        $this->selectedProvider=null;
        $this->Filter = 'CurrentDate'; // Reset the filter
        $bookingData = $this->getBookingData();
        $this->schedule = $this->transformBookingData($bookingData);
    }


    public function applyFilter()
    {
        if ($this->bookingFilter != null && $this->providerFilter != null) {
            $filteredItems = [];
            $bookingIds = [];
            $bookingData = Booking::join('booking_providers', 'bookings.id', '=', 'booking_providers.booking_id')
            ->join('users', 'users.id', '=', 'booking_providers.provider_id')
            ->join('booking_services', 'bookings.id', '=', 'booking_services.booking_id')
            ->join('service_categories', 'booking_services.services', '=', 'service_categories.id')
            ->select(
                'users.id as usersid',
                'bookings.id as bookingId',
                'users.name as Provider',
                'service_categories.name as Title',
                'booking_services.start_time',
                'booking_services.end_time'
            )
                ->orderByDesc('booking_services.start_time')->get()->toArray();

            if ($this->bookingFilter != '') {
                $bookingIds = Booking::where('booking_number', 'like', '%' . $this->bookingFilter . '%')->pluck('id');
            }

            foreach ($bookingData as $item) {
                $bookingIdCondition = empty($bookingIds) || $bookingIds->contains($item['bookingId']);
                $providerCondition = empty($this->providerFilter) || stripos($item['Provider'], $this->providerFilter) !== false;

                if ($bookingIdCondition && $providerCondition) {
                    if ($this->bookingFilter != null || $this->providerFilter != null)
                        $filteredItems[] = $item;
                }
            }

            $this->schedule = $this->transformBookingData($filteredItems);
        }
        
    }

}

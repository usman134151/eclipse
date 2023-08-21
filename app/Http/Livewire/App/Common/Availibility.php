<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\Booking;
use App\Models\Tenant\User;
use App\Models\Tenant\Team;
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
    public $teamList;


    

    public function render()
    {
        return view('livewire.app.common.availibility');
    }

    public function mount()
    {
        $this->currentDate = Carbon::now();
    
        
        $dayOfWeek = $this->currentDate->format('D'); // Get the day of the week abbreviation (e.g., "Thu")
        $dayOfMonth = $this->currentDate->format('d'); // Get the day of the month (e.g., "20")

        $this->dayPlusDate = $dayOfWeek . ' ' . $dayOfMonth; // Join day of the week and day of the month
        $this->tableHeaders = $this->generateTimeHeaders();
        $this->bookingList=Booking::select('id','booking_number')->get();
        $this->providerList=User::select('id','name')->get();
        $this->teamList=Team::select('id','name')->get();
        $bookingData = $this->getBookingData();
    
        $this->schedule = $this->transformBookingData($bookingData);

       //dd($this->schedule);
    }

    private function getBookingData()
    {
        if($this->Filter=="CurrentDate")
        return Booking::whereDate('booking_start_at', $this->currentDate->format('Y-m-d'))
            ->join('users', 'bookings.user_id', '=', 'users.id')
            ->join('booking_services', 'bookings.id', '=', 'booking_services.booking_id')
            ->join('service_categories', 'booking_services.services', '=', 'service_categories.id')
            ->select(
                'users.id as usersid',
                'bookings.id',
                'users.name as Provider',
                'service_categories.name as Title',
                'booking_services.start_time',
                'booking_services.end_time'
            )
            ->orderByDesc('booking_services.start_time')
            ->get()
            ->toArray();

            if($this->Filter=="Booking")
            return Booking::whereDate('booking_start_at', $this->currentDate->format('Y-m-d'))
            ->where('bookings.id',$this->ID)
            ->join('users', 'bookings.user_id', '=', 'users.id')
            ->join('booking_services', 'bookings.id', '=', 'booking_services.booking_id')
            ->join('service_categories', 'booking_services.services', '=', 'service_categories.id')
            ->select(
                'users.id as usersid',
                'bookings.id',
                'users.name as Provider',
                'service_categories.name as Title',
                'booking_services.start_time',
                'booking_services.end_time'
            )
            ->orderByDesc('booking_services.start_time')
            ->get()
            ->toArray();

            if($this->Filter=="Provider")
            return Booking::whereDate('booking_start_at', $this->currentDate->format('Y-m-d'))
            ->where('users.id',$this->ID)
            ->join('users', 'bookings.user_id', '=', 'users.id')
            ->join('booking_services', 'bookings.id', '=', 'booking_services.booking_id')
            ->join('service_categories', 'booking_services.services', '=', 'service_categories.id')
            ->select(
                'users.id as usersid',
                'bookings.id',
                'users.name as Provider',
                'service_categories.name as Title',
                'booking_services.start_time',
                'booking_services.end_time'
            )
            ->orderByDesc('booking_services.start_time')
            ->get()
            ->toArray();

            if($this->Filter=="Team")
            return Booking::whereDate('booking_start_at', $this->currentDate->format('Y-m-d'))
            ->where('users.id',$this->ID)
            ->join('teams','teams.id','=',$this->ID)
            ->join('users', 'teamns.provider_id', '=', 'users.id')
            ->join('booking_services', 'bookings.id', '=', 'booking_services.booking_id')
            ->join('service_categories', 'booking_services.services', '=', 'service_categories.id')
            ->select(
                'users.id as usersid',
                'bookings.id',
                'users.name as Provider',
                'service_categories.name as Title',
                'booking_services.start_time',
                'booking_services.end_time'
            )
            ->orderByDesc('booking_services.start_time')
            ->get()
            ->toArray();


    }

    private function transformBookingData($bookingData)
    {
        $groupedData = [];

        foreach ($bookingData as $booking) {
            $userId = $booking['usersid'];
            $provider = $booking['Provider'];

            if (!isset($groupedData[$userId])) {
                $groupedData[$userId] = [
                    'user_id' => $userId,
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

        for ($hour = $this->startBTime; $hour <= $this->endBTime; $hour++) {
            $timeSlot = [
                'title' => '',
                'class' => '',
                'col' => ''
            ];

            $formattedHour = sprintf('%02d', $hour); // Format as two digits, e.g., 02 instead of 2
            $timeSlots[$formattedHour . ':00'] = $timeSlot;
            $timeSlots[$formattedHour . '-class'] = &$timeSlots[$formattedHour . ':00']['class'];
            $timeSlots[$formattedHour . '-col'] = &$timeSlots[$formattedHour . ':00']['col'];
        }

        return $timeSlots;
    }


    private function populateTimeSlot(&$timeSlots, $booking)
    {
        $startTime = Carbon::parse($booking['start_time']);
        $endTime = Carbon::parse($booking['end_time']);
        $durationHours = $startTime->diffInHours($endTime);
    
        $hourSlot = $startTime->format('H') . ':00';
    
        if (isset($timeSlots[$hourSlot])) {
            $timeSlots[$hourSlot]['title'] = $booking['Title'];
            $timeSlots[$hourSlot]['col'] = $durationHours;
    
            // Initialize or increment the alternating counter
            if (!isset($this->alternatingCounter)) {
                $this->alternatingCounter = 0;
            } else {
                $this->alternatingCounter++;
            }
    
            // Determine the class based on the alternating counter
            $nextClass = ($this->alternatingCounter % 2 === 0) ? 'bg-lighter event-box' : 'bg-purple event-box';
    
            $timeSlots[$hourSlot]['class'] = $nextClass;
        }
    }
    //this is for the th 
    function generateTimeHeaders() {
        $timeHeaders = [];
    
        for ($hour = 0; $hour <= 24; $hour++) {
            $formattedHour = sprintf('%02d', $hour);
            $timeHeaders[] = $formattedHour . ':00';
        }
    
        return $timeHeaders;
    }
    
    public function ChangeFilter($ID,$Filter)
        {
           
            $this->Filter=$Filter;
            $this->ID=$ID;
            $bookingData = $this->getBookingData();
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

}

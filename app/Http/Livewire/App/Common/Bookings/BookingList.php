<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Models\Tenant\Booking;
use Carbon\Carbon;
use Livewire\Component;

class BookingList extends Component
{
	public $bookingType='past';	
	public $showBookingDetails;
	public $bookingSection;
	public $booking_assignments, $limit = 10;
	

protected $listeners = ['showList' => 'resetForm', 'updateVal'];

	public function render()
	{
		// dd($this->booking_assignments,$this->bookingType);

		$this->fetchBookings();
		return view('livewire.app.common.bookings.booking-list');
	}

	public function fetchBookings(){
		switch($this->bookingType){
			case('Past'):
				$query = Booking::where('booking_end_at', '<>', null)->whereDate('booking_start_at','<', Carbon::today());
				break;
			case ("Today's"):
				$query = Booking::whereDate('booking_start_at',Carbon::today());
				break;
			case ('Upcoming'):
				$query = Booking::whereDate('booking_start_at', '>', Carbon::today());
				break;
			case ('Pending Approval'):
				$query = Booking::where('booking_status', 0);
				break;
			case ('Draft'):
				$query = Booking::where('type', 2);
				break;

		}
		$this->booking_assignments =$query->limit($this->limit)->with(['company','accommodations'])->get();
	}

	public function mount()
	{
		
	}

	public function updateVal($attrName,$val){
		$this->$attrName = $val;
	}

	public function resetForm()
	{
		$this->showBookingDetails = false;
	}

	public function showBookingDetails()
	{
		$this->showBookingDetails = true;
	}
}

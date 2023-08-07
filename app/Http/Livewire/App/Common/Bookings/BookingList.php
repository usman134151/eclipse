<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Models\Tenant\Booking;
use Livewire\Component;

class BookingList extends Component
{
	public $bookingType;
	public $showBookingDetails;
	public $bookingSection;
	public $booking_assignments, $limit = 10;
	

protected $listeners = ['showList' => 'resetForm', 'updateVal'];

	public function render()
	{
		$this->booking_assignments = Booking::where('company_id','<>',null)->limit($this->limit)->with(['company'])->get();
		return view('livewire.app.common.bookings.booking-list');
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

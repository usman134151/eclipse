<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Models\Tenant\Booking;
use Livewire\Component;

class BookingList extends Component
{
	public $bookingType;
	public $showBookingDetails;
	public $bookingSection;
	public $booking_assignments;

	protected $listeners = ['showList' => 'resetForm'];

	public function render()
	{
		$this->booking_assignments = Booking::limit(20)->get();
		return view('livewire.app.common.bookings.booking-list');
	}

	public function mount()
	{
		
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

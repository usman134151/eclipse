<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Models\Tenant\Booking;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class BookingList extends Component
{
	use WithPagination;

	public $bookingType='past';	
	public $showBookingDetails;
	public $bookingSection;
	public  $limit = 10;
	public  $booking_id = 0;

	

protected $listeners = ['showList' => 'resetForm', 'updateVal'];

	public function render()
	{
		switch ($this->bookingType) {
			case ('Past'):
				$query = Booking::where('booking_end_at', '<>', null)->whereDate('booking_end_at', '<', Carbon::today())->orderBy('booking_start_at','DESC');
				break;
			case ("Today's"):
				$query = Booking::whereDate('booking_start_at', Carbon::today())->orderBy('booking_start_at', 'ASC');
				break;
			case ('Upcoming'):
				$query = Booking::whereDate('booking_start_at', '>', Carbon::today())->orderBy('booking_start_at', 'ASC');
				break;
			case ('Pending Approval'):
				$query = Booking::where('booking_status', 0)->orderBy('booking_start_at', 'DESC');
				break;
			case ('Draft'):
				$query = Booking::where('type', 2)->orderBy('booking_start_at', 'DESC');
				break;
			default:
				$query = Booking::where('booking_end_at', '<>', null)->whereDate('booking_end_at', '<', Carbon::today())->orderBy('booking_start_at', 'DESC');
				break;
		}

		return view('livewire.app.common.bookings.booking-list',['booking_assignments' => $query->paginate($this->limit)]);
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

	public function showBookingDetails($booking_id)
	{
		$this->showBookingDetails = true;
		$this->booking_id=$booking_id;
		$this->emit('setBookingId',$booking_id);
	}
}

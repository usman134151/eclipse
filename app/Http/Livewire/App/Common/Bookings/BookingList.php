<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Models\Tenant\Booking;
use App\Models\Tenant\SetupValue;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class BookingList extends Component
{
	use WithPagination;

	public $bookingType = 'past';
	public $showBookingDetails;
	public $bookingSection;
	public  $limit = 10;
	public  $booking_id = 0, $provider_id = null;
	public $bookingNumber='';



	protected $listeners = ['showList' => 'resetForm', 'updateVal'];
	public $serviceTypes = [
		'1' => ['class' => 'inperson-rate', 'postfix' => '', 'title' => 'In-Person'],
		'2' => ['class' => 'virtual-rate', 'postfix' => '_v', 'title' => 'Virtual'],
		'4' => ['class' => 'phone-rate', 'postfix' => '_p', 'title' => 'Phone'],
		'5' => ['class' => 'teleconference-rate', 'postfix' => '_t', 'title' => 'Teleconference'],
	];

	public function render()
	{
		$base = '';
		switch ($this->bookingType) {
			case ('Past'):
				$query = Booking::where('booking_end_at', '<>', null)->whereDate('booking_end_at', '<', Carbon::today())->orderBy('booking_start_at', 'DESC');
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
		if ($this->provider_id) {	//from provider panel
			//limit bookings to this providers
			$query->join('booking_providers', function ($join) {
				$join->where('provider_id', $this->provider_id);
				$join->on('booking_id', 'bookings.id');
			});
			$query->select(['booking_providers.service_id','bookings.*']);
			$base = "provider-";
		}
		// $a = $query->get();
		// foreach ($a as $row) {
		// 	dd($row->services);
		// }
		// dd($query->get());
		return view('livewire.app.common.bookings.' . $base . 'booking-list', ['booking_assignments' => $query->paginate($this->limit)]);
	}


	public function mount()
	{

		if (session('isProvider'))
			$this->provider_id = Auth::id();

		$serviceTypeLabels = SetupValue::where('setup_id', 5)->pluck('setup_value_label')->toArray();
		for ($i = 0, $j = 1; $i < 4; $i++, $j++) {
			if ($j == 3)
				$j = 4;
			$this->serviceTypes[$j]['title'] = $serviceTypeLabels[$i];
		}
	}

	public function updateVal($attrName, $val)
	{
		$this->$attrName = $val;
	}

	public function resetForm()
	{
		$this->showBookingDetails = false;
	}

	public function showBookingDetails($booking_id)
	{
		$this->showBookingDetails = true;
		$this->booking_id = $booking_id;
		//to set booking_id in panels and sub-components 
		$this->emit('setBookingId', $booking_id);
	}

	// provider panel functions

	public function showCheckInPanel($booking_id, $bookingNumber){
		$this->booking_id = $booking_id;
		$this->bookingNumber = $bookingNumber;
		$this->emit('setCheckInBookingId', $booking_id);
	}
	public function showCheckOutPanel($booking_id, $bookingNumber)
	{
		$this->booking_id = $booking_id;
		$this->bookingNumber = $bookingNumber;
		$this->emit('setCheckoutBookingId', $booking_id);
	}

	
}

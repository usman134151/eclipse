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
	public  $limit = 10, $counter,$currentServiceId;
	public  $booking_id = 0, $provider_id = null;
	public $bookingNumber = '';



	protected $listeners = ['showList' => 'resetForm', 'updateVal', 'showConfirmation', 'openAssignProvidersPanel','assignServiceProviders'];
	public $serviceTypes = [
		'1' => ['class' => 'inperson-rate', 'postfix' => '', 'title' => 'In-Person'],
		'2' => ['class' => 'virtual-rate', 'postfix' => '_v', 'title' => 'Virtual'],
		'4' => ['class' => 'phone-rate', 'postfix' => '_p', 'title' => 'Phone'],
		'5' => ['class' => 'teleconference-rate', 'postfix' => '_t', 'title' => 'Teleconference'],
	];
	public function openAssignProvidersPanel($booking_id,$service_id){
		$this->booking_id=$booking_id;
		$this->assignServiceProviders($service_id);
	}

	public function assignServiceProviders($service_id)
	{

		if ($this->counter == 0) {
			$this->currentServiceId = 0;
			$this->dispatchBrowserEvent('assign-service-users', ['service_id' => $service_id,]);
			$this->counter = 1;
		} else {
			$this->currentServiceId = $service_id;
			$this->counter = 0;
		}
	}

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
			$query->leftJoin('booking_services', function ($join) {
				$join->on('booking_services.booking_id', 'bookings.id');
				$join->on('booking_providers.booking_service_id', 'booking_services.id');
			});
			$query->select([
				'booking_providers.check_in_status', 'booking_services.services as service_id', 'booking_services.id as booking_service_id',
				'booking_services.service_types as service_type', 'bookings.*'
			]);
			$base = "provider-";
		}
		$data = $query->paginate($this->limit);

		// setting values for booking and its services
		foreach ($data as $row) {
			if ($row->service_id == null) {
				// prev system compatability

				$booking_service = count($row->booking_services) ? $row->booking_services->first() : null;
				$row->service_id = $booking_service ? $booking_service->services : null;
				$row->service_type = $booking_service ? $booking_service->service_types : null;
				$row->accommodation_name = $booking_service ? ($booking_service->service ? $booking_service->service->accommodation->name : null) : null;
				$row->service_name = $booking_service ? ($booking_service->service ? $booking_service->service->name : null) : null;
				$row->booking_service_id = $booking_service ? $booking_service->id : null;

			} else {
				$booking_service = $row->booking_services ? $row->booking_services->where('id', $row->booking_service_id)->first() : null;
				$row->accommodation_name = $booking_service ? $booking_service->accommodation->name : null;
				$row->service_name = $booking_service ? $booking_service->service->name : null;
			}
			$row->display_running_late = false;
			$row->display_check_in = false;

			if ($booking_service && $booking_service->service) {
				$val = json_decode($booking_service->service->running_late_procedure, true);
				if ($val) {
					if (isset($val['enable_button']) && ($val['enable_button']))
						$row->display_running_late = true;
				}
				$val = json_decode($booking_service->service->check_in_procedure, true);
				if ($val) {
					if (isset($val['enable_button']) && ($val['enable_button']))
					$row->display_check_in = true;
				}
			}
		}

		// UC -1
		// booking -> booking services -> booking providers_ booking_services_id

		// UC - 2
		// booking -> booking_services -> booking_providers ( map to booking_id)
		return view('livewire.app.common.bookings.' . $base . 'booking-list', ['booking_assignments' => $data]);
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

	public function showCheckInPanel($booking_id,$booking_service_id, $bookingNumber)
	{
		$this->booking_id = $booking_id;
		$this->bookingNumber = $bookingNumber;
		$this->emit('setCheckInBookingId', $booking_id,$booking_service_id);
	}
	public function showCheckOutPanel($booking_id, $bookingNumber)
	{
		$this->booking_id = $booking_id;
		$this->bookingNumber = $bookingNumber;
		$this->emit('setCheckoutBookingId', $booking_id);
	}

	public function showConfirmation($message = "")
	{
		if ($message) {
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
	}
}

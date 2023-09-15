<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingInvitationProvider;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class BookingList extends Component
{
	use WithPagination;

	public $bookingType = 'past';
	public $showBookingDetails, $colorCodes = [];
	public $bookingSection;
	public  $limit = 10, $counter, $ad_counter = 0, $ci_counter = 0, $co_counter = 0, $currentServiceId, $panelType = 1;
	public  $booking_id = 0, $provider_id = null, $booking_service_id = 0;
	public $providerPanelType = 0; //to ensure only clicked panel loads in provider-panel 
	public $bookingNumber = '', $selectedProvider = 0;


	//adv filter variables
	public $accommodation_search_filter = [], $booking_service_filter = [], $booking_specialization_search_filter = [], $provider_ids = [], $name_seacrh_filter = '',
		$service_type_search_filter = [], $tag_names = [], $industry_filter = [], $booking_status_filter = null, $booking_number_filter = null;
	public $tags = [], $filterProviders = [], $hideProvider = false;



	protected $listeners = [
		'showList' => 'resetForm', 'updateVal', 'showConfirmation',
		'openAssignProvidersPanel', 'assignServiceProviders', 'setAssignmentDetails', 'showCheckInPanel',
		'showCheckOutPanel'
	];
	public $serviceTypes = [
		'1' => ['class' => 'inperson-rate', 'postfix' => '', 'title' => 'In-Person'],
		'2' => ['class' => 'virtual-rate', 'postfix' => '_v', 'title' => 'Virtual'],
		'4' => ['class' => 'phone-rate', 'postfix' => '_p', 'title' => 'Phone'],
		'5' => ['class' => 'teleconference-rate', 'postfix' => '_t', 'title' => 'Teleconference'],
	];
	public $statusValues = [
		'' => ['title' => ''],
		'1' => ['title' => 'Unassigned'],
		'2' => ['title' => 'Assigned'],
		'3' => ['title' => 'Cancelled-UnBillable'],
		'4' => ['title' => 'Cancelled-Billable']

	];
	public function openAssignProvidersPanel($booking_id, $service_id, $panelType = 1)
	{
		$this->booking_id = $booking_id;
		$this->panelType = $panelType;
		$this->assignServiceProviders($service_id);
	}

	public function assignServiceProviders($service_id)
	{

		if ($this->counter == 0) {
			$this->currentServiceId = 0;

			$this->dispatchBrowserEvent('assign-service-users', ['service_id' => $service_id]);
			$this->counter = 1;
		} else {
			$this->currentServiceId = $service_id;
			$this->counter = 0;
			$this->dispatchBrowserEvent('refreshSelects2');
		}
	}

	public function render()
	{
		$base = '';
		if ($this->provider_id) //from provider panel
			$base = 'provider-';

		return view('livewire.app.common.bookings.' . $base . 'booking-list', ['booking_assignments' => $this->fetchData()]);
	}

	public function applyFilters()
	{
		$this->render();
	}

	public function fetchData()
	{

		$yesterday    = Carbon::now()->subDays(1)->toDateString();
		$today          = Carbon::now()->toDateString();

		switch ($this->bookingType) {
			case ('Past'):
				$query = Booking::
					// where(['type' => 1, 'booking_status' => '1'])

					// ->when($addressCheck, function ($query) {
					// 	$query->where('isCompleted', 0);
					// })
					// ->whereIn('bookings.status', [3, 4])
					// Or
					where(function ($ca) use ($today) {
						$ca->whereRaw("DATE(booking_start_at) < '$today'")
							->whereIn('bookings.status', [1, 2]);
						// ->when($addressCheck, function ($query) {
						// 	$query->where('isCompleted', 0);
						// });
					})
					->orderBy('booking_start_at', 'DESC');
				break;
			case ("Today's"):
				$query = Booking::
					// where(['bookings.status' => 2, 'type' => 1, 'booking_status' => '1'])

					// ->when($addressCheck, function ($query) {
					// 	$query->where('isCompleted', 0);
					// })
					whereRaw("'$today'  Between  DATE(booking_start_at) AND DATE(booking_end_at)")
					->orderBy('booking_start_at', 'ASC');
				break;
			case ('Upcoming'):

				$query = Booking::whereDate('booking_start_at', '>', Carbon::today())
					// ->where(['bookings.status' => 2, 'type' => 1, 'booking_status' => '1'])

					// ->when($addressCheck, function ($query) {
					// 	$query->where('isCompleted', 0);
					// })
					->whereRaw("DATE(booking_start_at) > '$today'")
					->orderBy('booking_start_at', 'ASC');
				break;
			case ('Pending Approval'):
				$query = Booking::where('booking_status', 0)->orderBy('booking_start_at', 'DESC');
				break;
			case ('Draft'):
				$query = Booking::where(['type' => 2])

					// ->when($addressCheck, function ($query) {
					// 	$query->where('isCompleted', 0);
					// })
					->orderBy('booking_start_at', 'DESC');
				break;
			case ('Unassigned'):

				$query = Booking::where(['bookings.status' => 1, 'type' => 1, 'booking_status' => '1'])

					->whereRaw("DATE(booking_start_at) > '$yesterday'")
					->orderBy('booking_start_at', 'ASC');
				break;
			case ('Invitations'):
				// 
				$query = Booking::
					// whereDate('booking_start_at', '>', Carbon::now())
					// ->where(['bookings.status' => 1, 'type' => 1,'booking_status' => '1'])
					orderBy('booking_start_at', 'ASC');
				$query->whereHas('invitation');

				break;
			default:
				$query = Booking::where('booking_end_at', '<>', null)->orderBy('booking_start_at', 'DESC');
				break;
		}


		// check to ensure all bookings are for active customer 
		// $query->whereHas('customer', function ($q) {
		// 	$q->where('status', '1');
		// });

		if ($this->provider_id) { //from provider panel
			if ($this->bookingType == "Unassigned") {
				$query->leftJoin('booking_available_providers', function ($join) {
					$join->on('booking_available_providers.booking_id', 'bookings.id');
					$join->where('booking_available_providers.provider_id', $this->provider_id);
				});

				$query->select([
					'bookings.*', 'bookings.status as status',
					'booking_available_providers.status as avail_status'
				]);
			} elseif ($this->bookingType == "Invitations") {
				// update this with subquery
				$assignedBookings =  BookingProvider::where('provider_id', Auth::id())->pluck('booking_id');
				$query->whereNotIn('bookings.id', $assignedBookings)
					->join('booking_invitation_providers', function ($join) {
						$join->on('booking_invitation_providers.booking_id', '=', 'bookings.id');
						$join->where('booking_invitation_providers.provider_id', '=', Auth::id());
					});
				$query->leftJoin('booking_invitations', 'booking_invitation_providers.invitation_id', 'booking_invitations.id');

				$query->leftJoin('booking_services', function ($join) {
					$join->on('booking_services.booking_id', 'bookings.id');
					$join->on('booking_services.services', 'booking_invitations.service_id');
				});
				$query->select([
					'booking_services.services as service_id', 'booking_services.id as booking_service_id',
					'booking_services.service_types as service_type', 'bookings.*', 'bookings.status as status', 'invitation_id',
					'booking_invitation_providers.status as invite_status'
				]);
			} else {
				//limit bookings to this providers

				$query->join('booking_providers', function ($join) {
					$join->where('booking_providers.provider_id', $this->provider_id);
					$join->on('booking_id', 'bookings.id');
				});
				$query->leftJoin('booking_services', function ($join) {
					$join->on('booking_services.booking_id', 'bookings.id');
					$join->on('booking_providers.booking_service_id', 'booking_services.id');
				});
				$query->select([
					'booking_providers.check_in_status', 'booking_services.services as service_id', 'booking_services.id as booking_service_id',
					'booking_services.service_types as service_type', 'bookings.*', 'bookings.status as status'
				]);
			}
			if ($this->bookingType == "Active")
				$query->where('booking_providers.check_in_status', '=', 1);

			$base = "provider-";
		}
		$query = $this->applySearchFilter($query);
		$data = $query->paginate($this->limit);
		// dd($query->get()->toArray());
		// setting values for booking and its services
		foreach ($data as $row) {
			if ($row->service_id == null) {
				// prev system compatability

				// UC - 1
				// booking -> booking_services -> booking_providers ( both mapped to booking_id)
				$booking_service = count($row->booking_services) ? $row->booking_services->first() : null;
				$row->service_id = $booking_service ? $booking_service->services : null;
				$row->service_type = $booking_service ? $booking_service->service_types : null;
				$row->accommodation_name = $booking_service ? ($booking_service->service ? $booking_service->service->accommodation->name : null) : null;
				$row->service_name = $booking_service ? ($booking_service->service ? $booking_service->service->name : null) : null;
				$row->booking_service_id = $booking_service ? $booking_service->id : null;
			} else {
				// UC -2 ( current system )
				// booking -> booking services -> booking providers (mapped to)=>  booking_services_id

				$booking_service = $row->booking_services ? $row->booking_services->where('id', $row->booking_service_id)->first() : null;
				$row->accommodation_name = $booking_service ? $booking_service->accommodation->name : null;
				$row->service_name = $booking_service ?  ($booking_service->service ? $booking_service->service->name : null) : null;
			}
			if ((isset($booking_service)) && ($booking_service->meetings != null)) {
				$meeting = json_decode($booking_service->meetings, true) ? json_decode($booking_service->meetings, true)[0] : null;

				$row->meeting_link = isset($meeting['meeting_name']) ? $meeting['meeting_name'] : null;
				$row->meeting_phone = isset($meeting['phone_number']) ? $meeting['phone_number'] : null;
			} else {
				$row->meeting_link = $booking_service ? $booking_service->meeting_link : null;
				$row->meeting_phone = $booking_service ? $booking_service->meeting_phone : null;
			}
			if ($this->provider_id) {
				$row->display_running_late = false;
				$row->display_check_in = false;
				$row->display_check_out = false;


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
					$val = json_decode($booking_service->service->close_out_procedure, true);
					if ($val) {
						if (isset($val['enable_button_provider']) && ($val['enable_button_provider']))
							$row->display_check_out = true;
					}
				}
			}
		}
		return $data;
	}

	public function mount()
	{

		if (session('isProvider')) {
			$this->provider_id = Auth::id();

			$this->hideProvider = true;
			$this->provider_ids = [$this->provider_id];
		}
		$serviceTypeLabels = SetupValue::where('setup_id', 5)->pluck('setup_value_label')->toArray();
		for ($i = 0, $j = 1; $i < 4; $i++, $j++) {
			if ($j == 3)
				$j = 4;
			$this->serviceTypes[$j]['title'] = $serviceTypeLabels[$i];
		}
		if (request()->bookingID != null) {
			$this->showBookingDetails(request()->bookingID);
		}
		$this->filterProviders = User::where('status', 1)
			->whereHas('roles', function ($query) {
				$query->whereIn('role_id', [2]);
			})->select([
				'users.id',
				'users.name',
			])->get()->toArray();
		$this->dispatchBrowserEvent('refreshSelects2');


		$colorCodes = SetupValue::where(['setup_id' => 10, 'status' => 1])->select(['setup_value_alt_id as type', 'setup_value_label as code'])->get()->toArray();
		foreach ($colorCodes as $r) {
			$this->colorCodes[$r['type']] = $r['code'];
		}
		$this->colorCodes['none'] = '';
	}

	private function applySearchFilter($query)
	{
		if ($this->booking_number_filter) {
			$query->where('bookings.booking_number', 'LIKE', "%" . $this->booking_number_filter . "%");
		}
		if ($this->name_seacrh_filter) {
			$name = $this->name_seacrh_filter;
			$query->whereHas('company', function ($query) use ($name) {
				$query->where('companies.name', 'LIKE', "%" . $name . "%");
			});
		}
		// if (count($this->tag_names)) {
		// 	$query->whereJsonContains('tags', $this->tag_names);
		// }
		if (count($this->provider_ids)) {
			$provider_ids = $this->provider_ids;
			$query->whereHas('booking_provider', function ($query) use ($provider_ids) {
				$query->whereIn('booking_providers.provider_id', $provider_ids);
			});
		}
		if ($this->booking_status_filter) {
			$query->where('bookings.booking_status', 'LIKE', "%" . $this->booking_status_filter . "%");
		}
		if (count($this->industry_filter)) {
			$industries = $this->industry_filter;
			$query->whereHas('industries', function ($query) use ($industries) {
				$query->whereIn('industries.id', $industries);
			});
		}
		if (count($this->booking_service_filter)) {
			$services = $this->booking_service_filter;
			$query->whereHas('services', function ($query) use ($services) {
				$query->whereIn('service_categories.id', $services);
			});
		}
		if (count($this->accommodation_search_filter)) {
			$accommodations = $this->accommodation_search_filter;
			$query->whereHas('accommodations', function ($query) use ($accommodations) {
				$query->whereIn('accommodations.id', $accommodations);
			});
		}
		if (count($this->service_type_search_filter)) {
			//as ids are different in dropdown and in table need to replace for filter
			$replacements = [
				28 => 1,
				29 => 2,
				30 => 4,
				31 => 5
			];
			$filterArray = array_map(function ($item) use ($replacements) {
				return isset($replacements[$item]) ? $replacements[$item] : $item;
			}, $this->service_type_search_filter);
			$query->whereHas('booking_services', function ($query) use ($filterArray) {
				$query->where(function ($query) use ($filterArray) {
					foreach ($filterArray as $item) {
						$query->where('services', 'LIKE', "%$item%");
					}
				});
			});
		}
		if (count($this->booking_specialization_search_filter)) {
			$specializations = $this->booking_specialization_search_filter;
			// dd($specializations);
			foreach ($specializations as $specilization)
				$query->whereHas('booking_services', function ($query) use ($specilization) {
					$query->whereJsonContains('specialization', [0 => $specilization]);
				});
		}

		return $query;
	}

	public function resetFilters()
	{
		$this->booking_specialization_search_filter = [];
		$this->tag_names = [];
		$this->service_type_search_filter = [];
		$this->booking_service_filter = [];
		$this->industry_filter = [];
		$this->accommodation_search_filter = [];
		$this->booking_number_filter = null;
		$this->booking_service_filter = [];
		$this->booking_number_filter = null;
		$this->booking_status_filter = null;
		$this->name_seacrh_filter = null;
		if (!$this->hideProvider)
			$this->provider_ids = [];


		$this->dispatchBrowserEvent('refreshSelects2');
	}

	public function updateVal($attrName, $val)
	{
		$this->$attrName = $val;
		$this->dispatchBrowserEvent('refreshSelects2');
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

	// START : provider panel functions

	public function showCheckInPanel($booking_id, $booking_service_id, $bookingNumber = null,)
	{

		if ($bookingNumber)
			$this->bookingNumber = $bookingNumber;
		if ($this->ci_counter == 0) {
			$this->booking_id = 0;
			$this->dispatchBrowserEvent('open-check-in', ['booking_id' => $booking_id, 'booking_service_id' => $booking_service_id]);
			$this->ci_counter = 1;
		} else {
			$this->booking_id = $booking_id;
			$this->booking_service_id = $booking_service_id;
			$this->ci_counter = 0;
			$this->providerPanelType = 1;
		}
	}
	public function showCheckOutPanel($booking_id, $booking_service_id, $bookingNumber = null, $selectedProvider = null)
	{
		if ($bookingNumber)
			$this->bookingNumber = $bookingNumber;

		if ($selectedProvider)
			$this->selectedProvider = $selectedProvider;
		if ($this->co_counter == 0) {
			$this->booking_id = 0;
			$this->dispatchBrowserEvent('open-check-out', ['booking_id' => $booking_id, 'booking_service_id' => $booking_service_id]);
			$this->co_counter = 1;
		} else {
			$this->booking_id = $booking_id;
			$this->booking_service_id = $booking_service_id;
			$this->co_counter = 0;
			$this->providerPanelType = 2;
			$this->dispatchBrowserEvent('refreshSelects');
		}
	}
	public function setAssignmentDetails($booking_id, $bookingNumber = null)
	{
		if ($bookingNumber)
			$this->bookingNumber = $bookingNumber;
		// $this->emit('setAssignmentDetails', $booking_id);
		if ($this->ad_counter == 0) {
			$this->booking_id = 0;
			$this->dispatchBrowserEvent('open-assignment-details', ['booking_id' => $booking_id]);
			$this->ad_counter = 1;
		} else {
			$this->booking_id = $booking_id;
			$this->emit('setBookingId', $booking_id);
			$this->ad_counter = 0;
			$this->providerPanelType = 3;
		}
	}

	// END : provider panel functions

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

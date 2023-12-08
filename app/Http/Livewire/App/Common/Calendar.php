<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\SetupValue;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingDepartment;
use App\Models\Tenant\ProviderSpecificSchedule;
use App\Models\Tenant\ProviderVacation;
use App\Models\Tenant\RoleUserDetail;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\Tag;
use App\Models\Tenant\User;
use App\Models\Tenant\UserAddress;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Calendar extends Component
{
	public $events = [], $model_id = 0, $model_type = 0, $providerProfile = false, $hideProvider = false, $customerProfile = false, $companyProfile = false, $departmentProfile = false, $department_id = null;
	public $holidays = [], $specific = [], $user_id = null;

	//adv filter variables
	public $accommodation_search_filter = [], $booking_service_filter = [], $booking_specialization_search_filter = [], $provider_ids = [], $name_seacrh_filter = '',
		$service_type_search_filter = [], $tag_names = [], $industry_filter = [], $booking_status_filter = null, $booking_number_filter = null;
	public $tags = [], $filterProviders = [], $isCustomer = false;

	protected $listeners = ['refreshCalendar' => 'refreshEvents', 'updateVal', 'openBookingDetails'];

	public function render()
	{


		return view('livewire.app.common.calendar');
	}

	public function mount()
	{
		$this->filterProviders = User::where('status', 1)
			->whereHas('roles', function ($query) {
				$query->whereIn('role_id', [2]);
			})->select([
				'users.id',
				'users.name',
			])->get()->toArray();

		if ($this->providerProfile)
			$this->events = $this->getEventsForMonth();
		else
			$this->events = $this->getCalendarEvents();

		if ($this->hideProvider)
			$this->provider_ids = [$this->user_id];
	}

	public function applyFilters()
	{
		$this->events = $this->getCalendarEvents();
		$this->dispatchBrowserEvent('updateScheduleCalendar', ['events' => $this->events]);
	}

	public function updateVal($attrName, $val)
	{
		$this->$attrName = $val;
		$this->dispatchBrowserEvent('refreshSelects2');
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


		$this->events = $this->getCalendarEvents();

		$this->dispatchBrowserEvent('updateScheduleCalendar', ['events' => $this->events]);

		$this->dispatchBrowserEvent('refreshSelects2');
	}

	// Updated by Maarooshaa Asim to get booking events for dashboard calendar
	private function getCalendarEvents()
	{

		$query = Booking::query();
		$query->where('bookings.type', 1);

		if ($this->companyProfile && $this->user_id) {
			$query->where('bookings.company_id', $this->user_id); // user id have company id

			if ($this->department_id) {
				$bookingIds = BookingDepartment::where('department_id', $this->department_id)->get()->pluck('booking_id');
				$query->whereIn('bookings.id', $bookingIds);
			}
		}

		if ($this->user_id && $this->customerProfile) {

			$user = User::find($this->user_id);
			$query->where('bookings.company_id', $user['company_name']);
			$userRoles = $user->roles->where('role_type', 2)->pluck('name')->toArray();

			// check if user is not admin
			if (!in_array('company_admin', $userRoles)) {
				$query->where(function ($g) use ($user) {

					// Check if the user is a customer of the booking
					$g->orWhere('customer_id', $this->user_id);

					// Check if the user is a supervisor of the booking
					$g->orWhere('supervisor', $this->user_id);

					// Check if the user is a billing manager of the booking
					$g->orWhere('billing_manager_id', $this->user_id);

					// Check if the user is attendee or service_consumer of the booking
					$g->orWhereHas('booking_services', function ($q) use ($user) {
						$q->where('attendees', 'LIKE', '%' . $user->id . '%')
							->orWhere('service_consumer', 'LIKE', '%' . $user->id . '%');
					});
					// check if the user is supervisor or booking manager of a customer of the booking
					$associated_user = RoleUserDetail::whereIn('role_id', [5, 9])->where('user_id', $this->user_id)->get()->pluck('associated_user');
					$g->orWhereIn('customer_id', $associated_user);
				});
			}
		}
		if ($this->user_id && !$this->providerProfile && !$this->isCustomer) {
			
			$query->join('booking_providers', function ($join) {
				$join->where('booking_providers.provider_id', $this->user_id);
				$join->on('booking_providers.booking_id', 'bookings.id');
			});
			
		}
		if ($this->user_id && $this->isCustomer) {
			$query->where('bookings.company_id', Auth::user()->company_name);

			if (!in_array(10, session()->get('customerRoles'))) {
				$user = User::find(Auth::id());

				// display only of booking is associated with customer if not admin
				$query->where(function ($g) use ($user) {
					$g->where('customer_id', $this->user_id);
					$g->orWhere('supervisor', $this->user_id);
					$g->orWhere('billing_manager_id', 'LIKE', "%" . $this->user_id . "%");
					// if dept supervisor, then show all dept related bookings
					$u_dept = $user->supervised_departments ? $user->supervised_departments->pluck('id')->toArray() : null;
					if ($u_dept && count($u_dept)) {
						$g->orWhereHas('bookingDepartments', function ($q) use ($u_dept) {
							$q->whereIn('booking_departments.department_id', $u_dept);
						});
					}
				});
			}
		}
		$query = $this->applySearchFilter($query);
		$events = $query->select('bookings.id', 'booking_number', 'booking_title', 'customer_id', 'physical_address_id', 'booking_start_at', 'booking_end_at', 'bookings.status', 'is_closed', 'provider_count')
			->groupBy([ 'bookings.id', 'booking_number', 'booking_title', 'customer_id', 'physical_address_id', 'booking_start_at', 'booking_end_at', 'bookings.status', 'is_closed', 'provider_count'])
			->with(['physicalAddress', 'customer'])
			->get()
			->toArray();
		//adding bookings that user has been invited to  -- Maarooshaa
		$inv_bookings = Booking::join('booking_invitation_providers', function ($join) {
			$join->where('booking_invitation_providers.provider_id', $this->user_id);
			$join->on('booking_invitation_providers.booking_id', 'bookings.id');
			$join->where('booking_invitation_providers.status', '<', 2);
			$join->whereNotIn('booking_invitation_providers.booking_id', function ($q) {
				//removing bookings with invitations that have already been assigned 
				$q->select('booking_providers.booking_id')->from('booking_providers')->where('booking_providers.provider_id', $this->user_id);
			});
		})->select('booking_invitation_providers.status as invitation_status','bookings.id', 'booking_number', 'booking_title', 'customer_id', 'physical_address_id', 'booking_start_at', 'booking_end_at', 'bookings.status', 'is_closed', 'provider_count')
			->groupBy(['invitation_status','bookings.id', 'booking_number', 'booking_title', 'customer_id', 'physical_address_id', 'booking_start_at', 'booking_end_at', 'bookings.status', 'is_closed', 'provider_count'])
			->with(['physicalAddress', 'customer'])
			->get()
			->toArray();;

		$events = array_merge($events , $inv_bookings);
		$newEvents = [];
		$base = '/admin';
		if ($this->isCustomer)
			$base = '/customer';

		$colorCodes = SetupValue::where("setup_id", 10)->pluck('setup_value_label', 'setup_value_alt_id');

		foreach ($events as $key => $event) {
			extract($events[$key]);
			if (!empty($booking_title)) {
				$newEvents[$key]['title'] = $booking_number . ': ' . $booking_title;
			} else {
				$newEvents[$key]['title'] = $booking_number;
			}

			$mappingCode = "";
			if (isset($invitation_status) && !is_null($invitation_status))
				$mappingCode = "Invitation";
			else {
				if ($is_closed == 1) {
					$mappingCode = "Completed Assignment";
				} elseif ($status >= 3) {
					$mappingCode = "Cancelled";
				} elseif ($status == 1 || $status == 2) {
					$providers = BookingProvider::where("booking_id", $id)->get();
					if (count($providers) == 0) {
						$mappingCode = "Unassigned";
					} else {
						if ($provider_count != count($providers)) {
							$mappingCode = "Partially Assigned";
						} else {
							$checked_in = $providers->contains('check_in_status', 1);
							$running_late = $providers->contains('check_in_status', 2);

							if ($checked_in) {
								$mappingCode = "Provider Checked-in";
							} elseif ($running_late) {
								$mappingCode = "Provider Running Late";
							} else {
								$mappingCode = "Fully assigned";
							}
						}
					}
				} else {
					$mappingCode = "pending";
				}
			}
			if (session()->get('isProvider')) {
				if ($mappingCode === "Partially Assigned") {
					$mappingCode = "Fully assigned";
				}
			}

			$newEvents[$key]['start'] = $booking_start_at;
			$newEvents[$key]['end'] = $booking_end_at;
			$newEvents[$key]['bookingId'] = $id;
			$newEvents[$key]['bookingNumber'] = $booking_number;
			$newEvents[$key]['eventColor'] = ($mappingCode == "" || $mappingCode == "pending") ? '' : $colorCodes[$mappingCode];
			if (session()->get('isProvider')) {
				$newEvents[$key]['isProvider'] = true;
			} else {
				$newEvents[$key]['url'] = $base . '/bookings/view-booking/' . encrypt($id);
				$newEvents[$key]['isProvider'] = false;
			}

			$newEvents[$key]['timeSlot'] =  formatTime($booking_start_at) . ' - ' . formatTime($booking_end_at);
			$description = '<div class="pe-3">';
			$description .= '<p class="mb-3 mt-2">Assignment No.: ' . $booking_number . ' </p>';
			$description .= '<p class="my-3">Customer: ' . ($customer != null ? $customer['name'] : 'N/A') . ' </p>';
			$description .= '<p class="my-3">No. of Providers: ' . $provider_count . ' </p>';
			// $description .= '<p class="mb-1">Assign To.: ' . $booking_number . ' </p>';
			if ($physical_address)
				$description .= '<p class="my-3 ">Location: ' .  $physical_address['address_line1'] . ', ' . $physical_address['address_line2'] . ', ' . $physical_address['city'] . ', ' . $physical_address['state'] . ', ' . $physical_address['country']   . ' </p>';
			$description .= '<p class="my-3">Status: ' . $mappingCode . ' </p>';
			$description .= "</div>";
			$newEvents[$key]['description'] = $description;
		}



		return json_encode($newEvents);
	}

	public function refreshEvents($month = null)
	{
		if ($month) {
			$m = strtotime($month);
			$month = date("Y-m", strtotime("+1 month", $m));
		}
		$this->events = $this->getEventsForMonth($month);
		$this->dispatchBrowserEvent('updateCalendar', ['events' => $this->events]);
	}


	//   Handling fullcalendar events for specified month on backend
	//	returns schedule 
	public function getEventsForMonth($month = null)
	{
		//check if month passed, else use default 
		$start          = date(($month ? $month : 'Y-m') . '-1');
		$end            = date(($month ? $month : 'Y-m') . '-t');
		$user_id        = $this->model_id;
		$today          = Carbon::now()->toDateString();

		$startDate      = date('Y-m-d', strtotime($start));
		$endDate        = date('Y-m-d', strtotime($end));
		$weekdays       = Carbon::getDays();

		//fetch user default schedule
		$schedule = Schedule::where('model_id', $this->model_id)->where('model_type', $this->model_type)->get()->first();
		if ($schedule) {
			$activeDays = json_decode($schedule->working_days, true);	//user active days

			$generals = $schedule->timeslots;
			$eventData      = array();
			$i              = 1;

			//run loop for each day in the current month to fetch respective events
			for ($date = $startDate; $date <= $endDate;) {
				$dayNumber         = date("w", strtotime($date));	//returns day number of current date in the week
				$data              = array();

				$holiday          =  $schedule->holidays->where('holiday_date', $date);
				if ($holiday->isNotEmpty()) {	//check if current date is holiday
					$data['id']             = $i;
					$data['start']          = $date;
					$data['end']            = $date;
					$data['title']          = 'Holiday';
					$data['display']    = 'background';
					$data['color']      = '#d3d3d3';
					$i++;
					//add holiday event details and move out of the loop
					array_push($eventData, $data);
					$date    = date("Y-m-d", strtotime("$date +1 day"));

					continue;
				}

				$vacation          =  ProviderVacation::where('user_id', $user_id)->whereRaw("'$date'  Between  Date(from_date) AND Date(to_date)")->count();
				if ($vacation) {	//check if current day falls within vacation days

					$data['id']             = $i;
					$data['start']          = $date;
					$data['end']            = $date;
					$data['title']          = 'Time Off';
					$data['display']    = 'background';
					$data['color']      = '#ffc6c4';
					$i++;
					//mark date as vacation event details and move out of the loop
					array_push($eventData, $data);
					$date    = date("Y-m-d", strtotime("$date +1 day"));

					continue;
				}

				$specific          = ProviderSpecificSchedule::where(['user_id' => $user_id, 'scheduled_date' => $date]);
				//check if specific timings exists for that date
				if ($specific->count()) {
					foreach ($specific->get() as $event) { //fetch and create event for each specific time
						$data                   = array();
						$title                  = date_format(date_create($event->from_time), "h:i A") . " to " . date_format(date_create($event->to_time), "h:i A");
						$data['color']          = '#20c997';
						if ($date < $today) {
							$data['color']      = '#6c757d'; //if date is before current date, show events as passed
						}
						$data['id']             = $i;
						$data['start']          = $date;
						$data['end']            = $date;
						$data['title']          = $title;
						$data['description']    = 'description';
						array_push($eventData, $data);
						$i++;
					}
				} else {

					//else fetch default schedule and create event for it 
					$day   =     $generals->where('timeslot_day', $weekdays[$dayNumber]);
					foreach ($day as $event) {
						$data                    = array();
						$title                   = date('h:i A', strtotime($event->timeslot_start_time)) . '-' . date('h:i A', strtotime($event->timeslot_end_time));

						if ($event->timeslot_type == 1)
							$data['color']          = '#008856';	//business hours
						else
							$data['color']          = '#FFC107';	//after hours

						if ($date < $today) {		//if date is before current date, show events as passed
							$data['color']      = '#6c757d';
						}
						if (!$activeDays[$event->timeslot_day])	//if day is inactive - set color gray
							$data['color'] = '#6C757D';

						$data['id']             = $i;
						$data['start']          = $date;
						$data['end']            = $date;
						$data['title']          = $title;
						$data['description']    = 'description';
						array_push($eventData, $data);
						$i++;
					}
				}

				$date    = date("Y-m-d", strtotime("$date +1 day"));	//increment date for loop
			}


			// return json parsed data for fullcalendar
			return json_encode($eventData, JSON_UNESCAPED_UNICODE);
		} else
			return;
	}

	public $booking_id, $bookingNumber, $ad_counter, $providerPanelType;

	public function openBookingDetails($booking_id = 0, $bookingNumber = null)
	{
		if ($bookingNumber)
			$this->bookingNumber = $bookingNumber;
		$this->booking_id = $booking_id;
		$this->providerPanelType = 3;
		$this->emit('setBookingId', $booking_id);
		//$this->dispatchBrowserEvent('open-assignment-details-dashboard', ['booking_id' => $booking_id]);

	}

	// public $checkin_booking_id, $ch_counter;

	// public function openBookingDetails($booking_id = 0, $bookingNumber = null)
	// {
	// 	if ($bookingNumber)
	// 		$this->bookingNumber = $bookingNumber;
	// 	$this->booking_id = $booking_id;
	// 	$this->providerPanelType = 3;
	// 	$this->emit('setBookingId', $booking_id);
	// 	//$this->dispatchBrowserEvent('open-assignment-details-dashboard', ['booking_id' => $booking_id]);

	// }
}

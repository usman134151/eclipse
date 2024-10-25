<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Http\Livewire\App\Admin\Customer\ServiceCatelog;
use App\Services\App\BookingOperationsService;
use App\Services\App\BookingAssignmentService;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\ServiceCategory;

use Livewire\Component;
use App\Models\Tenant\BookingCustomizeData;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\CustomizeFormFields;
use App\Models\Tenant\Specialization;
use App\Models\Tenant\Tag;
use App\Models\Tenant\User;
use App\Models\Tenant\UserDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BookingDetails extends Component
{
	public $gender, $service_id = 0, $provider_id = 0, $form_id = 0;
	public $ethnicity, $booking_id = 0, $booking_services, $data, $status, $isCustomer = false, $closeOut = false;
	public $hideBilling = false, $tags, $allTags;
	public $Requester = false, $Consumer = false, $Participant = false;

	public $component = 'booking-details';
	protected $listeners = [
		'showConfirmation', 'openCustomSavedFroms', 'openBookingCloseOut'
	];
	public $booking;
	public $serviceDetails, $locations, $default_lat = 37.7749, $default_lng = -122.4194;


	//panel
	public $currentServiceId = 0, $counter;
	public $close_counter = 0;

	protected $rules = [
		'booking.provider_notes' => 'nullable|string',
		'booking.customer_notes' => 'nullable|string',
		'booking.private_notes' => 'nullable|string',
		'booking.billing_notes' => 'nullable|string',
		'booking.payment_notes' => 'nullable|string'
	];



	public function render()
	{
		return view('livewire.app.common.bookings.booking-details');
	}

	public function mount()
	{

		if (request()->bookingID != null) {
			$this->booking_id = request()->bookingID;
		}
		$this->booking = Booking::where('id', $this->booking_id)->with('payment')->first();
		$this->allTags = Tag::pluck('name')->toArray();
		$this->tags = [];

		$this->getServiceDetails();	//fetching custom form data

		if (!$this->booking)	//null check
			$this->booking = new Booking;

		$this->fetchData();
		if (session()->get('isCustomer')) {
			$this->isCustomer = true;
			$user = UserDetail::where('user_id', Auth::id())->select('user_configuration')->first();
			if ($user) {
				$config = $user->user_configuration && $user->user_configuration != "null" ? json_decode($user->user_configuration, true) : null;
				if (isset($config['hide_billing']) && ($config['hide_billing'] == true || $config['hide_billing'] == "true"))
					$this->hideBilling = true;
			}
		}
		if (!is_array($this->tags))
			$this->tags = [];

		if ($this->booking->physicalAddress) {
			$this->default_lat = $this->booking->physicalAddress->latitude ? $this->booking->physicalAddress->latitude : 37.7749;
			$this->default_lng = $this->booking->physicalAddress->longitude ? $this->booking->physicalAddress->longitude : -122.4194;
			$locationData = [
				'booking_id' => $this->booking->id,
				'title' => $this->booking->booking_number,
				'service' => "abc",
				'address' => $this->booking->physicalAddress->address_line1 . ', ' . $this->booking->physicalAddress->city . ', ' . $this->booking->physicalAddress->state . ', ' . $this->booking->physicalAddress->country . ', ' . $this->booking->physicalAddress->zip,
				'lat' => $this->booking->physicalAddress->latitude,
				'long' => $this->booking->physicalAddress->longitude
			];
			$locationsArray[] = $locationData;
			$this->locations = $locationsArray;
		}
	}

	function fetchData()
	{
        // fetch all services for booking
		$this->data['service_charges'] = 0;
		$this->data['service_billed'] = 0;
		$this->data['service_additional_charges'] = 0;
		$this->data['service_total'] = 0;
		$this->data['specialization_total'] = 0;
		$this->booking_services = BookingServices::where('booking_id', $this->booking_id)
			->join('service_categories', 'booking_services.services', 'service_categories.id')
			->join('accommodations', 'accommodations.id', 'service_categories.accommodations_id')
			->with('serviceConsumerUser', 'service')
			->get([
				'booking_services.id', 'booking_services.service_types', 'booking_services.attendees',
				'booking_services.service_consumer', 'booking_services.services',
				'booking_services.meeting_link',
				'booking_services.meetings', 'booking_services.service_calculations', 'service_total', 'billed_total',
				'booking_services.is_closed', 'booking_services.attendees_manual', 'booking_services.service_consumer_manual', 'is_manual_consumer', 'is_manual_attendees',
				'booking_services.attendees', 'booking_services.service_consumer', 'booking_services.specialization', 'booking_services.meeting_phone',
				'booking_services.meeting_passcode', 'booking_services.provider_count', 'booking_services.created_at',
				'service_categories.name as service_name', 'service_categories.id as service_id',
				'accommodations.name as accommodation_name', 'booking_services.auto_assign', 'booking_services.auto_notify', 'booking_services.accommodation_id'
			])
			->toArray();


		foreach ($this->booking_services as $key => $service) {
			if ($service['attendees'])
				$this->booking_services[$key]['participants'] = User::whereIn('id', explode(',', $service['attendees']))->select('name', 'id')->get();

			if ($service['meetings']) {

				$this->booking_services[$key]['meeting_details'] = json_decode($service['meetings'], true) ? json_decode($service['meetings'], true)[0] : null;
			}
			if ($service['specialization']) {

				$spez = json_decode($service['specialization'], true) ? json_decode($service['specialization'], true) : null;
				if ($spez && count($spez)) {
					$this->booking_services[$key]['specialization']  = Specialization::whereIn('id', $spez)->pluck('name')->toArray();
				} else
					$this->booking_services[$key]['specialization']  = null;
			}
			// dd($this->booking_services[$key]);
			if (!is_null($service['service_calculations'])) {
				$serviceCharges = json_decode($service['service_calculations'], true);

				if (key_exists('service_charges', $serviceCharges) && !is_null($serviceCharges['service_charges']) && is_numeric($serviceCharges['service_charges'])) {
					$this->data['service_charges'] += $serviceCharges['service_charges'];
				}
				// if (key_exists('additional_charges_total', $serviceCharges) && !is_null($serviceCharges['additional_charges_total']) && is_numeric($serviceCharges['additional_charges_total'])) {

				// 	$this->data['service_additional_charges'] += $serviceCharges['additional_charges_total'];
				// }
				if (key_exists('specialization_total', $serviceCharges) && !is_null($serviceCharges['specialization_total']) && is_numeric($serviceCharges['specialization_total'])) {

					$this->data['specialization_total'] += $serviceCharges['specialization_total'];
				}
				if (!is_null($service['service_total']))
					$this->data['service_total'] += $service['service_total'];
				if (!is_null($service['billed_total']))
					$this->data['service_billed'] += $service['billed_total'];
			}
		}

		$this->data['total_providers'] = Booking::where('bookings.id', $this->booking_id)
			->join('booking_services', 'booking_services.booking_id', 'bookings.id')->sum('booking_services.provider_count');
		$this->data['assigned_providers'] = BookingProvider::where(['booking_id' => $this->booking_id])
			->join('users', 'booking_providers.provider_id', '=', 'users.id')->count();
		if ($this->booking->booking_status == 0)
			$this->status = 'pending';
		if ($this->booking->status == 1)
			$this->status = 'unassigned';
		if ($this->booking->status == 2) {
			$this->status = 'assigned';
		}
        if ($this->booking->status == 3) {    //cancelled
			$this->status = 'unbill-cancelled';
		}

        if ($this->booking->status == 4) {    //cancelled
			$this->status = 'cancelled';
		}

		$start_date = Carbon::parse($this->booking->booking_start_at);

		$this->data['isPast'] = $start_date->isPast();
		// dd($start_date, $this->booking->booking_start_at);

		// shifting this close out check to generic function
		if ($start_date->isPast() || $start_date->isToday() )
		// || $this->booking->checked_in_providers->count() -- commented out to enable for unassigned bookings
            // show button if all booking services are NOT auto-close-able
			$this->data['show_close_button'] = true;
			// BookingOperationsService::checkCloseOutRequired($this->booking_services);	--commented out to show for all past bookings as per client requirements
		else
			$this->data['show_close_button'] = false;

		if ($this->booking->tags != null)
			$this->tags = json_decode($this->booking->tags, true);
		else
			$this->tags = [];

		$providers = BookingProvider::where('booking_id', $this->booking_id)->get();
		$this->data['providerPayments'] = 0;
		$this->data['additionalProviderPayments'] = 0;
		foreach ($providers as $provider) {
			$additionalPayment=(!is_null($provider['additional_payments']) ? $provider['additional_payments']['additional_charge_provider'] : 0);
			$this->data['providerPayments'] = $this->data['providerPayments'] + ($provider['is_override_price'] ? $provider['override_price'] : $provider['total_amount'])-$additionalPayment;
			$this->data['additionalProviderPayments'] = $this->data['additionalProviderPayments'] + $additionalPayment;
		}
		$this->data['profitMargin'] = $this->booking['payment'] ? ((
			($this->booking['payment']['is_override'] ? $this->booking['payment']['override_price'] : ($this->booking['payment']['total_amount'] ?? 0)) +
			($this->booking['payment']['cancellation_charges'] ?? 0) +
			($this->booking['payment']['outstanding_amount'] ?? 0) +
			($this->booking['payment']['modification_fee'] ?? 0)
		) - $this->data['providerPayments']) : 0;

		//reschedulling charges were not added
		if(!is_null($this->booking['payment']) && !is_null($this->booking['payment']['reschedule_booking_charges']))
            $reschedullingCharges=$this->booking['payment']['reschedule_booking_charges'];
        else
		$reschedullingCharges=0;
		//end of reschedulling charges check
		$totalCost = (
			($this->booking['payment'] && $this->booking['payment']['is_override'] ? $this->booking['payment']['override_price'] : ($this->booking['payment']['total_amount'] ?? 0)) +
			($this->booking['payment']['cancellation_charges'] ?? 0) +
			($this->booking['payment']['outstanding_amount'] ?? 0) +
			($this->booking['payment']['modification_fee'] ?? 0) +  $reschedullingCharges
		);

		// dd($this->booking['payment']);
		$this->data['netTotal'] = $totalCost;
		// if($this->booking['payment'])
		// $this->booking['payment']['is_override'] ? $this->booking['payment']['override_price'] = $totalCost : $this->booking['payment']['total_amount'] = $totalCost;

		if ($totalCost > 0) {
			$this->data['profitMarginPercent'] = $this->booking['payment'] ? ($this->data['profitMargin'] / $totalCost * 100) : 0;
			$this->data['profitMarginPercent'] = number_format($this->data['profitMarginPercent'], 2);
		} else {
			$this->data['profitMarginPercent'] = '';
		}


		// dd($this->data,$this->booking['payment']['total_amount']);
		// dd($providers);

		$endDate = Carbon::parse($this->booking['booking_end_at']);
		$currentDate = Carbon::today();
		$daysUntilService = $endDate->diffInDays($currentDate);
		$datePassed = $endDate < $currentDate ? 1 : 0;
		$this->booking['days_until_service'] = $datePassed ? 0 : $daysUntilService;


		$creationDate = Carbon::parse($this->booking['booking_start_at']);
		$daysPending = $creationDate->diffInDays($currentDate);
		$this->booking['daysPending'] = $this->booking['is_closed'] ? 0 : $daysPending;

		// dd($this->data['providerPayments']);
	}
	//so a fuction which can then be used for editing the fields aswell.
	public function getServiceDetails()
	{
		$this->serviceDetails = BookingCustomizeData::where("booking_id", $this->booking_id)
			->join('customize_form_fields', 'booking_customize_data.customize_id', '=', 'customize_form_fields.id')
			->join('customize_forms', 'customize_form_fields.customize_form_id', 'customize_forms.id')
			->whereNotNull('customize_form_fields.field_name')
			->get([
				'customize_form_fields.field_name', 'booking_customize_data.data_value', 'customize_form_fields.customize_form_id',
				'customize_form_fields.position', 'request_form_name','customize_form_fields.field_type'
			])
			->groupBy('customize_form_id')->sortby('position')->toArray();
	}

	public function showConfirmation($message = '')
	{

		if ($message) {
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
		$this->fetchData();
	}
	public function showList()
	{
		$this->emit('showList');
	}

	public function switch($component)
	{
		$this->component = $component;
	}

	public function updateNotes()
	{

		$this->validate();
		$this->booking->tags = json_encode($this->tags);
		$this->updateTags();    //save newly added tags to table
		$booking = $this->booking;
		$booking->save();
		$message = "Booking '" . $this->booking->booking_number . "' Notes/Tags updated by " . Auth::user()->name;
		callLogs($this->booking->id, "Booking", " Notes/Tags Update", $message);
		$this->showConfirmation('Booking notes updated');
	}

	public function openCustomSavedFroms($form_id, $provider_id, $service_id)
	{
		if ($this->counter == 0) {
			$this->form_id = 0;
			$this->dispatchBrowserEvent('open-provider-saved-forms', ['form_id' => $form_id, 'service_id' => $service_id, 'provider_id' => $provider_id]);
			$this->counter = 1;
		} else {
			$this->form_id = $form_id;
			$this->service_id = $service_id;
			$this->provider_id = $provider_id;
			$this->counter = 0;
		}
	}
	public function openBookingCloseOut($closeOut = false)
	{
		if ($this->close_counter == 0) {
			$this->closeOut = false;
			$this->dispatchBrowserEvent('open-booking-close-out', ['close_out' => $closeOut]);
			$this->close_counter = 1;
		} else {
			$this->closeOut = $closeOut;
			$this->close_counter = 0;
		}
	}

	public function getBookingData($bookingId)
	{
		$this->emit('getBookingData', $bookingId);
	}
	public function reinstate($bookingId)
	{
		BookingOperationsService::reinstateBooking($bookingId);
		$message = "Booking '" . $this->booking->booking_number . "' reinstated by " . Auth::user()->name;
		callLogs($this->booking->id, "Booking", "Reinstate", $message);
		$this->emit('showConfirmation', 'Booking status updated successfully');
	}

	public function updateTags()
	{
		foreach ($this->allTags as $tag) {
			Tag::firstOrCreate(['name' => $tag]);
		}
	}

	public function updateBookingTags()
	{
		// dd($this->Requester,$this->Consumer,$this->Participant);
		$properties = [$this->Requester ? 'Requester' : '', $this->Consumer ? 'Consumer' : '', $this->Participant ? 'Participant' : ''];
		$this->tags = BookingOperationsService::updateTags($this->booking, $properties, $this->tags);
	}

	public function updateServiceSettings($propertyName, $index)
	{
		$value = $this->booking_services[$index][$propertyName];
		BookingServices::where('id', $this->booking_services[$index]['id'])->update([$propertyName => $this->booking_services[$index][$propertyName]]);
		if ($value == 1 && $propertyName == "auto_notify") {
			BookingAssignmentService::getAvailableProviders($this->booking, $this->booking_services, $propertyName);
			$this->dispatchBrowserEvent('close-assign-providers');

			$this->emit('showConfirmation', 'Providers have been ' . str_replace("_", " ", $propertyName) . ' successfully');
		}
	}

    public function copyBooking($bookingID)
    {
        $booking = Booking::find($bookingID);
        $bookingOperationService = new BookingOperationsService();
        $newBooking = $bookingOperationService->copyBooking($bookingID);
        $this->showConfirmation($booking->booking_number . ' has been duplicated successfully.');
        return redirect()->route('tenant.booking-edit', ['bookingID' => encrypt($newBooking->id), 'isDuplicate' => true]);
    }
}

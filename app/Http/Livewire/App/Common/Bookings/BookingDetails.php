<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Http\Livewire\App\Admin\Customer\ServiceCatelog;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\ServiceCategory;
use Livewire\Component;
use App\Models\Tenant\BookingCustomizeData;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\CustomizeFormFields;
use App\Models\Tenant\User;

class BookingDetails extends Component
{
	public $gender, $service_id=0, $provider_id=0, $form_id=0;
	public $ethnicity, $booking_id = 0, $booking_services, $data;

	public $component = 'booking-details';
	protected $listeners = [
		'showConfirmation', 'openCustomSavedFroms'
	];
	public $booking;
	public $serviceDetails;


	//panel
	public $currentServiceId = 0, $counter;


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
		$this->booking = Booking::where('id', $this->booking_id)->first();
		$this->getServiceDetails();	//fetching custom form data

		if (!$this->booking)	//null check
			$this->booking = new Booking;

		$this->fetchData();
		// dd($this->booking,$this->data);
	}

	function fetchData()
	{
		// fetch all services for booking 
		$this->booking_services = BookingServices::where('booking_id', $this->booking_id)
			->join('service_categories', 'booking_services.services', 'service_categories.id')
			->join('accommodations', 'accommodations.id', 'service_categories.accommodations_id')
			->with('serviceConsumerUser')
			->get([
				'booking_services.id', 'booking_services.service_types', 'booking_services.attendees',
				'booking_services.service_consumer',
				'booking_services.meeting_link',
				'booking_services.meetings',

				'booking_services.attendees', 'booking_services.service_consumer', 'booking_services.specialization', 'booking_services.meeting_phone',
				'booking_services.meeting_passcode', 'booking_services.provider_count', 'booking_services.created_at',
				'service_categories.name as service_name', 'service_categories.id as service_id',
				'accommodations.name as accommodation_name'
			])
			->toArray();
		foreach ($this->booking_services as $key => $service) {
			if ($service['attendees'])
			$this->data['booking_services'][$key]['participants'] = User::whereIn('id', explode(',', $service['attendees']))->select('name', 'id')->get();
			if($service['meetings']){

				$this->booking_services[$key]['meeting_details']= json_decode($service['meetings'], true)[0];
			}
			}
		$this->data['total_providers'] = Booking::where('bookings.id', $this->booking_id)
			->join('booking_services', 'booking_services.booking_id', 'bookings.id')->sum('booking_services.provider_count');
		$this->data['assigned_providers'] = BookingProvider::where(['booking_id' => $this->booking_id])
			->join('users', 'booking_providers.provider_id', '=', 'users.id')->count();
	}
	//so a fuction which can then be used for editing the fields aswell.
	public function getServiceDetails()
	{
		$this->serviceDetails = BookingCustomizeData::where("booking_id", $this->booking_id)
			->join('customize_form_fields', 'booking_customize_data.customize_id', '=', 'customize_form_fields.id')
			->whereNotNull('customize_form_fields.field_name')
			->get(['customize_form_fields.field_name', 'booking_customize_data.data_value'])->toArray();
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
		$booking = $this->booking;
		$booking->save();


		$this->showConfirmation('Booking notes updated');
	}

	public function openCustomSavedFroms($form_id, $provider_id, $service_id){
		if ($this->counter == 0) {
			$this->form_id = 0;
			$this->dispatchBrowserEvent('open-provider-saved-forms', ['form_id' => $form_id, 'service_id' => $service_id,'provider_id'=>$provider_id]);
			$this->counter = 1;
		} else {
			$this->form_id = $form_id;
			$this->service_id = $service_id;
			$this->provider_id = $provider_id;
			$this->counter = 0;
		}
	}
}

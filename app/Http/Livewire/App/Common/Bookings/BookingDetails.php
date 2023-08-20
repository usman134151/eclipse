<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Http\Livewire\App\Admin\Customer\ServiceCatelog;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\ServiceCategory;
use Livewire\Component;
use App\Models\Tenant\BookingCustomizeData;
use App\Models\Tenant\CustomizeFormFields;

class BookingDetails extends Component
{
    public $gender;
    public $ethnicity, $booking_id=0;

	public $component = 'booking-details';
	protected $listeners = ['showConfirmation'];
	public $booking;
	public $serviceDetails;

	protected $rules = [
        'booking.provider_notes' =>'nullable|string',
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
		
		$this->booking = Booking::where('id',$this->booking_id)->with('services')->first();
		$this->getServiceDetails();
	
		if(!$this->booking)
			$booking = new Booking;	
		// new booking fields 
		$booking['services'] = Booking::where('bookings.id',$this->booking_id)->join('booking_services', 'booking_services.booking_id','bookings.id')
		->join('service_categories', 'booking_services.services', 'service_categories.id')->join('accommodations', 'accommodations.id', 'service_categories.accommodations_id')
		->get(['booking_services.id', 'booking_services.service_types',
		//  'booking_services.meeting_name',
		 'booking_services.meeting_link',
			'booking_services.attendees', 'booking_services.service_consumer', 'booking_services.specialization', 'booking_services.meeting_phone',
			'booking_services.meeting_passcode', 'booking_services.provider_count', 'booking_services.created_at',
			'booking_services.meeting_link', 'service_categories.name as service_name', 
			'accommodations.name as accommodation_name'])
		->toArray();
		// dd($this->booking->services->first()->name);

	}
	//so a fuction which can then be used for editing the fields aswell.
	public function getServiceDetails()
	{
		$this->serviceDetails = BookingCustomizeData::where("booking_id", $this->booking_id)
			->join('customize_form_fields', 'booking_customize_data.customize_id', '=', 'customize_form_fields.customize_form_id')
			->whereNotNull('customize_form_fields.field_name')
			->get(['customize_form_fields.field_name','booking_customize_data.data_value'])->toArray();
			
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
		$booking=$this->booking;
		$booking->save();
		
		
		$this->showConfirmation('Booking notes updated');
	//	$this->getServiceDetails();
    }
	

}

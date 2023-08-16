<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Http\Livewire\App\Admin\Customer\ServiceCatelog;
use App\Models\Tenant\Booking;
use App\Models\Tenant\ServiceCategory;
use Livewire\Component;

class BookingDetails extends Component
{
    public $gender;
    public $ethnicity, $booking_id=0;
	public $component = 'booking-details';
	protected $listeners = ['showConfirmation'];


	public function render()
	{	
		$booking = Booking::where('id',$this->booking_id)->first();
		if(!$booking)
			$booking = new Booking;	// new booking fields 
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
		// dd($booking['services']);

		return view('livewire.app.common.bookings.booking-details', ['component' => $this->component,'booking'=>$booking]);
	}

	public function mount()
	{}

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
}

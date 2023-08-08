<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Models\Tenant\Booking;
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
			$booking = new Booking;	// new booking field 

		// dd($booking->services);

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

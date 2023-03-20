<?php

namespace App\Http\Livewire\App\Provider\Bookings;


use Livewire\Component;

class BookingList extends Component
{
	public $bookingType;
	public $showBookingDetails;
	public $bookingData;

	protected $listeners = ['showList' => 'resetForm'];

	public function render()
	{
		return view('livewire.app.provider.bookings.booking-list');
	}

	public function mount()
	{
		$this->bookingData=[
			['date'=>'08/24/2023',
			'time'=>'9:59 AM to<br> 4:22 PM',
			'number'=>'100495-6'.rand(0,100),
			'industry'=>'Medical',
			'service'=>'Translation<br />Service: English to French Transalation',
			'address'=>'3766 Hedge Street,<br/>Plainfield',' 07060',
			'provider'=>3,
			'status'=>'Active',
			'class'=>'odd bg-success',
			'type'=>'In person',
			
			],
			['date'=>'03/25/2023',
			'time'=>'9:59 AM to<br> 4:22 PM',
			'number'=>'130995-6'.rand(0,100),
			'industry'=>'Information Technology',
			'service'=>'Sign Language<br />Service: Language interpreting',
			'address'=>'2233 Farnam Street, Omaha, NE 68102',
			'provider'=>2,
			'status'=>'On Time',
			'class'=>'even bg-gray',
			'type'=>'virtual'],
			['date'=>'04/25/2023',
			'time'=>'12:59 PM to<br> 1:22 PM',
			'number'=>'230995-6'.rand(0,100),
			'industry'=>'Information Technology',
			'service'=>'Sign Language<br />Service: Language interpreting',
			'address'=>'5678 Grand Avenue, Duluth, MN 55802',
			'provider'=>1,
			'status'=>'On Time',
			'class'=>'odd bg-warning',
			'type'=>'In person'],
			['date'=>'03/25/2023',
			'time'=>'9:59 AM to<br> 4:22 PM',
			'number'=>'130995-6'.rand(0,100),
			'industry'=>'Information Technology',
			'service'=>'Sign Language<br />Service: Language interpreting',
			'address'=>'2233 Farnam Street, Omaha, NE 68102',
			'provider'=>2,
			'status'=>'On Time',
			'class'=>'odd',
			'type'=>'In person']
			
			
	
		];
	}

	public function resetForm()
	{
		$this->showBookingDetails = false;
	}

	public function showBookingDetails()
	{
		$this->showBookingDetails = true;
	}
}

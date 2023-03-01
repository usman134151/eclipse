<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;

class BookingList extends Component
{
	public $bookingType;
	public $showBookingDetails;
	public $colorCode;

	protected $listeners = ['showList' => 'resetForm'];

	public function render()
	{
		return view('livewire.app.common.bookings.booking-list');
	}

	public function mount()
	{
		$this->getColorCode();
	}

	public function resetForm()
	{
		$this->showBookingDetails = false;
	}

	public function showBookingDetails()
	{
		$this->showBookingDetails = true;
	}

	private function getColorCode()
	{
		if ($this->bookingType == "Today's")
		{
			$this->colorCode = 'bg-success';
		}
		elseif($this->bookingType == 'Past')
		{
			$this->colorCode = 'bg-gray';
		}
		elseif($this->bookingType == 'Unassigned')
		{
			$this->colorCode = 'bg-warning';
		}
		else
		{
			$this->colorCode = '';
		}
	}
}

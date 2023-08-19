<?php

namespace App\Http\Livewire\App\Common\Panels\Provider;

use App\Models\Tenant\Booking;
use Livewire\Component;

class CheckOut extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm','setCheckoutBookingId'=>'setBookingId'];
    public $booking_id = 0, $assignment = null;


    public function render()
    {
        return view('livewire.app.common.panels.provider.check-out');
    }

    //set booking id when ever panel is opened
    public function setBookingId($booking_id)
    {
        $this->booking_id = $booking_id;

        if ($booking_id)
            $this->assignment = Booking::where('id', $this->booking_id)->first();
    }

    public function mount()
    {
        if ($this->booking_id)
            $this->assignment = Booking::where('id', $this->booking_id)->first();
    
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}

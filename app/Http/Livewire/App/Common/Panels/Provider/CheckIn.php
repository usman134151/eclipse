<?php

namespace App\Http\Livewire\App\Common\Panels\Provider;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingServices;
use Livewire\Component;

class CheckIn extends Component
{
    public $showForm, $checkIn = true, $hours = null, $mins = null, $provider_signature=null, $customer_signature=null;
    protected $listeners = ['showList' => 'resetForm', 'setCheckInBookingId' => 'setBookingId'];
    public $booking_id = 0, $assignment = null, $booking_service = null;

    public function render()
    {

        return view('livewire.app.common.panels.provider.check-in');
    }

    //set booking id when ever panel is opened
    public function setBookingId($booking_id, $booking_service_id)
    {
        $this->booking_id = $booking_id;

        if ($booking_id) {
            $this->assignment = Booking::where('id', $this->booking_id)->first();
            $this->booking_service = BookingServices::where('id', $booking_service_id)->first();
            $this->booking_service->checkin_details = json_decode($this->booking_service->service->check_in_procedure, true);

            $this->hours =      date_format(date_create($this->assignment->booking_start_at), 'H');
            $this->mins =      date_format(date_create($this->assignment->booking_start_at), 'i');

            // dd($this->booking_service->service);
        }
    }

    public function save()
    {
        $bookingProvider = $this->assignment->booking_provider->where('booking_service_id', $this->booking_service->id)->first();
        if (!$bookingProvider)   //prev version compatability
            $bookingProvider = $this->assignment->booking_provider->where('booking_id', $this->booking_id)->first();

        $values = [
            'actual_start_hour' => $this->hours,
            'actual_start_min' => $this->mins,
            'provider_signature_path' => $this->provider_signature,
            'customer_signature_path' => $this->customer_signature,
        ];
        $bookingProvider->update(['check_in_status' => 1, 'check_in_procedure_values'=>json_encode($values)]);
        $this->dispatchBrowserEvent('close-check-in-panel');
        $this->emit('showConfirmation','Checked in successfully');

    }

    public function mount()
    {
        if ($this->booking_id)
            $this->assignment = Booking::where('id', $this->booking_id)->first();
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}

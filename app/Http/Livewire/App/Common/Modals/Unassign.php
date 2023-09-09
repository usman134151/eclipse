<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingUnassignProvider;
use Carbon\Carbon;
use Livewire\Component;

class Unassign extends Component
{
    public $showForm, $booking_id = null, $provider_id = null, $booking_service_id = null, $data = [];
    protected $listeners = ['showList' => 'resetForm', 'openUnassignModal' => 'setBooking', 'updateVal'];

    public function render()
    {
        return view('livewire.app.common.modals.unassign');
    }

    public function updateVal($attrName, $val)
    {
        $this->data[$attrName] = $val;
    }
    public function mount()
    {
        $this->data = [
            'unassign_reason' => '',
            'unassign_date' => null,
            'hour' => null,
            'min' => null,
        ];
    }

    public function setBooking($booking_service_id = null, $provider_id, $booking_id)
    {

        $this->booking_id = $booking_id;
        $this->booking_service_id = $booking_service_id;
        $this->provider_id = $provider_id;
        $this->data = [
            'unassign_reason' => '',
            'unassign_date' => null,
            'hour' => null,
            'min' => null,
        ];
    }

    public function save()
    {
        $this->data['unassign_date'] = Carbon::createFromTime($this->data['hour'], $this->data['min']);
        unset($this->data['hour']);
        unset($this->data['min']);

        BookingUnassignProvider::updateOrCreate([
            'booking_id' => $this->booking_id, 'booking_service_id' => $this->booking_service_id,
            'provider_id' => $this->provider_id
        ], $this->data);

        BookingProvider::where(['booking_service_id' => $this->booking_service_id, 'provider_id' => $this->provider_id, 'booking_id' => $this->booking_id])->delete();
        Booking::where(['id' => $this->booking_id])->update(['booking_status' => 1]);
        //add check for booking_status update
        $this->emit('showConfirmation', 'Provider Assignment has been revoked successfully');
        $this->emit('closeUnassignModel');
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

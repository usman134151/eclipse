<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\ServiceCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RunningLate extends Component
{
    public $booking_id, $showForm, $service, $hours, $mins, $customSet = false, $booking=null;
    protected $listeners = ['showList' => 'resetForm', 'openRunningLateModal' => 'setDetails'];

    public function setDetails($booking_id, $service_id = null)
    {
        $this->hours = null;
        $this->mins = null;
        $this->booking = Booking::where('id', $booking_id)->first();

        $this->booking_id = $booking_id;
        if (is_null($service_id)) {
            //if booking_providers.service_id not set, fetch first service from booking_services 
            $this->service = $this->booking->services->first();
        } else
            $this->service = ServiceCategory::where('id', $service_id)->first();
    }

    public function render()
    {
        return view('livewire.app.common.modals.running-late');
    }

    public function fastSet($mins)
    {
        $this->hours = 00;
        $this->mins = $mins;
    }
    public function rules()
    {
        return [
            'hours' => 'nullable|numeric',
            'mins' => 'nullable|numeric',

        ];
    }

    // booking_providers => check_in_status  (0= on time, 1= checked in, 2= running late)
    public function save()
    {
        $this->validate();
        if (($this->service)) {
            if ($this->hours > 0 || $this->mins > 0) {
                $bookingProviderService = BookingProvider::where(['booking_id' => $this->booking_id, 'provider_id' => Auth::id()])->first();
                $bookingProviderService->running_late_hour = $this->hours;
                $bookingProviderService->running_late_min = $this->mins;
                $bookingProviderService->check_in_status = 2;
                $bookingProviderService->save();
            }

            $this->emit('showConfirmation', 'Booking status updated successfully');
        }
        $this->emit('closeRunningLateModal');
    }

    public function mount()
    {
        $this->hours = null;
        $this->mins = null;
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

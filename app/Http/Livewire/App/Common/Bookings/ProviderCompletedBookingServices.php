<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\ServiceCategory;
use Livewire\Component;

class ProviderCompletedBookingServices extends Component
{
    public $showForm, $booking_id = 0, $data = [], $service_id = 0;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        $this->data['attendingProviders'] = BookingProvider::where(['booking_providers.booking_id' => $this->booking_id])
            ->join('booking_services', function ($join) {
                $join->on('booking_services.id', 'booking_providers.booking_service_id');
                $join->where(['booking_services.services' => $this->service_id, 'booking_services.booking_id' => $this->booking_id]);
            })
            ->whereHas('user')
            ->get();


        return view('livewire.app.common.bookings.provider-completed-booking-services');
    }

    public function mount()
    {
    }

    public function openSavedFormsPanel($user_id)
    {
        $data = [];
        $service = ServiceCategory::where('id', $this->service_id)->first();
        $service['checkin'] = json_decode($service->check_in_procedure, true);
        $service['checkout'] = json_decode($service->close_out_procedure, true);
        if (isset($service['checkin']['customize_form']) && $service['checkin']['customize_form'] == true && isset($service['checkin']['customize_form_id']))
            $data['checkin_form_id'] = $service['checkin']['customize_form_id'];
        else
            $data['checkin_form_id'] = null;

        if (isset($service['checkout']['customize_form']) && $service['checkout']['customize_form'] == true && isset($service['checkout']['customize_form_id']))
            $data['checkout_form_id'] = $service['checkout']['customize_form_id'];
        else
            $data['checkout_form_id'] = null;

        $this->emit('openCustomSavedFroms', $data, $this->service_id, $user_id);
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

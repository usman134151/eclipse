<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\ServiceCategory;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Livewire\Component;

class ProviderCompletedBookingServices extends Component
{
    public $showForm, $booking_id = 0, $data = [], $service_id = 0, $isCustomer = false, $booking_service_id;
    protected $listeners = ['showList' => 'resetForm'];
    public $in = [], $out = [];

    public function render()
    {
        $this->data['attendingProviders'] = BookingProvider::where(['booking_providers.booking_id' => $this->booking_id])
            // ->where('check_in_status', '>', 0)   // show all providers here  - LBT-50
            ->join('booking_services', function ($join) {
                $join->on('booking_services.id', 'booking_providers.booking_service_id');
                $join->where(['booking_services.services' => $this->service_id, 'booking_services.booking_id' => $this->booking_id]);
            })
            ->whereHas('user')
            ->with('booking')
            ->get();
        $options = [
            'join' => ', ',
            'parts' => 2,
            'syntax' => CarbonInterface::DIFF_ABSOLUTE,
        ];

        foreach ($this->data['attendingProviders'] as $key=> $provider) {
            if ($provider->check_out_procedure_values && isset($provider->check_out_procedure_values['actual_end_timestamp'])) {
                $start_time = Carbon::parse($provider->check_in_procedure_values['actual_start_timestamp']);
                $end_time = Carbon::parse($provider->check_out_procedure_values['actual_end_timestamp']);
                $this->data['attendingProviders'][$key]->duration =  $end_time->diffForHumans($start_time, $options);
            }
            else
            $this->data['attendingProviders'][$key]->duration = "N/A";
        }



        return view('livewire.app.common.bookings.provider-completed-booking-services');
    }

    public function mount()
    {
        if (session()->get('isCustomer'))
            $this->isCustomer = true;
        $this->data['checkin_form_enabled'] = false;
        $this->data['checkout_form_enabled'] = false;

        $service = ServiceCategory::where('id', $this->service_id)->first();
        $this->in = $service->check_in_procedure ? json_decode($service->check_in_procedure, true) : null;
        $this->out = $service->close_out_procedure ? json_decode($service->close_out_procedure, true) : null;
        if (isset($this->in['customize_form']) && $this->in['customize_form'] == true && isset($this->in['customize_form_id']))
            $this->data['checkin_form_enabled'] = true;
        if (isset($this->out['customize_form']) && $this->out['customize_form'] == true && isset($this->out['customize_form_id']))
            $this->data['checkout_form_enabled'] = true;
        $this->booking_service_id = BookingServices::where(['booking_id' => $this->booking_id, 'services' => $this->service_id])->first()->id;
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

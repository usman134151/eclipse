<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use App\Models\Tenant\BookingProvider;
use Carbon\Carbon;
use Livewire\Component;

class BookingCloseOut extends Component
{
    public $showForm, $booking, $providers, $close_out = [];
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.booking-details.booking-close-out');
    }

    public function mount()
    {
        foreach ($this->booking->booking_services as $booking_service) {
            $this->providers[$booking_service->id] = BookingProvider::where('booking_service_id', $booking_service->id)->join('users', 'users.id', 'provider_id')->join('user_details', 'users.id', 'user_details.user_id')
                ->select(['booking_providers.*', 'users.name', 'user_details.profile_pic', 'users.email'])->get();
            if ($this->providers[$booking_service->id] && $this->providers[$booking_service->id]->count()) {
                foreach ($this->providers[$booking_service->id] as $provider) {
                    $start = Carbon::parse(($provider->check_in_procedure_values && isset($provider->check_in_procedure_values['actual_start_timestamp'])&& $provider->check_in_procedure_values['actual_start_timestamp']) ? $provider->check_in_procedure_values['actual_start_timestamp'] : $booking_service->start_time);
                    $this->close_out[$booking_service->id][$provider->provider_id]['actual_start_hour'] = $start->format('H');
                    $this->close_out[$booking_service->id][$provider->provider_id]['actual_start_min'] = $start->format('m');
                    $end = Carbon::parse(($provider->check_out_procedure_values  && isset($provider->check_out_procedure_values['actual_end_timestamp'])&& $provider->check_out_procedure_values['actual_end_timestamp']) ? $provider->check_out_procedure_values['actual_end_timestamp'] : $booking_service->end_time);
                    $this->close_out[$booking_service->id][$provider->provider_id]['actual_end_hour'] = $end->format('H');
                    $this->close_out[$booking_service->id][$provider->provider_id]['actual_end_min'] = $end->format('m');
                    $this->close_out[$booking_service->id][$provider->provider_id]['total_amount'] = $provider->total_amount;
                }
            }
        }
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

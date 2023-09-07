<?php

namespace App\Http\Livewire\App\Common\Panels\Provider;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CheckOut extends Component
{
    public $showForm, $checkout = [];
    protected $listeners = ['showList' => 'resetForm'];
    public $booking_id = 0, $assignment = null, $step = 1, $booking_service = null, $checkout_details = null, $checked_in_details = null;

    public function setCheckout()
    {
        if ($this->checkout['status'])
            $this->checkout['timestamp'] = Carbon::now();
        else
            $this->checkout['timestamp'] = null;
    }

    public function render()
    {
        return view('livewire.app.common.panels.provider.check-out');
    }

    public function save()
    {
        $this->dispatchBrowserEvent('close-check-out');
    }

    public function mount($booking_service_id)
    {

        $this->checkout = [
            'status' => true,
            'timestamp' => null,
            'confirmation_upload_type' => 'print_and_sign'
        ];
        if ($this->booking_id) {
            $this->assignment = Booking::where('id', $this->booking_id)->first();
            $this->booking_service = BookingServices::where('id', $booking_service_id)->first();
            // {"enable_button_provider":"true","customize_form_id":"25","customize_form":"true"
            // ,"customers":"8","enable_button_customer":"true","time_extension":"true",
            // "customer_invoice":"true","enable_digital_signature":"true"}

            if ($this->booking_service) {
                $this->checkout_details = json_decode($this->booking_service->service->close_out_procedure, true);

                //has details that have been saved at check-in
                $check_in_procedure = json_decode($this->booking_service->service->check_in_procedure, true);
                if ($check_in_procedure) {
                    if (isset($check_in_procedure['enable_button']) && ($check_in_procedure['enable_button'])) {

                        $booking_provider = BookingProvider::where(['booking_service_id' => $booking_service_id, 'provider_id' => Auth::id()])->first();
                        $this->checked_in_details = json_decode($booking_provider->check_in_procedure_values, true);
                        if (!isset($this->checked_in_details['actual_start_timestamp']))
                            $this->checked_in_details['actual_start_timestamp'] = Carbon::createFromTime($this->checked_in_details['actual_start_hour'], $this->checked_in_details['actual_start_min']);
                    }
                }
            }
            $this->checkout['actual_end_hour'] =      date_format(date_create($this->assignment->booking_end_at), 'H');
            $this->checkout['actual_end_min'] =      date_format(date_create($this->assignment->booking_end_at), 'i');
            if (isset($this->checkout_details['customize_form_id']))
                $this->checkout['form_id'] = $this->checkout_details['customize_form_id'];
        }
    }

    public function setStep($step)
    {
        // dd($this->step, $step);

        $this->step = $step;
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

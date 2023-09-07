<?php

namespace App\Http\Livewire\App\Common\Panels\Provider;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingServices;
use Livewire\Component;

class CheckOut extends Component
{
    public $showForm, $checkout=false;
    protected $listeners = ['showList' => 'resetForm'];
    public $booking_id = 0, $assignment = null,$step=1 , $booking_service=null, $checkout_details=null;


    public function render()
    {
        return view('livewire.app.common.panels.provider.check-out');
    }

    public function save(){
        $this->dispatchBrowserEvent('close-check-out');
    }

    public function mount($booking_service_id)
    {
        if ($this->booking_id){
            $this->assignment = Booking::where('id', $this->booking_id)->first();
            $this->booking_service = BookingServices::where('id', $booking_service_id)->first();
				// {"enable_button_provider":"true","customize_form_id":"25","customize_form":"true","customers":"8","enable_button_customer":"true","time_extension":"true","customer_invoice":"true","enable_digital_signature":"true"}

            if ($this->booking_service)
                $this->checkout_details = json_decode($this->booking_service->service->close_out_procedure, true);

        //     $this->hours =      date_format(date_create($this->assignment->booking_start_at), 'H');
        //     $this->mins =      date_format(date_create($this->assignment->booking_start_at), 'i');
        //     if (isset($this->checkout_details['customize_form_id']))
        //     $this->form_id = $this->checkout_details['customize_form_id'];
        }
    }

    public function setStep($step){
        // dd($this->step, $step);

        $this->step=$step;
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

<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use Livewire\Component;
use Livewire\WithFileUploads;

class ConfirmCompletion extends Component
{
    use WithFileUploads;
    public $showForm, $booking_service, $service_details , $upload_signature, $status, $notes, $providers, $feedback;
    protected $listeners = ['showList' => 'resetForm', 'openConfirmCompletionModal'=>'setBookingId'];

    public function setBookingId($booking_service_id){
        $this->booking_service = BookingServices::find($booking_service_id);
        $this->service_details = json_decode($this->booking_service->service->close_out_procedure, true);  //getting service's close-out-procedure
        $this->providers =BookingProvider::where('booking_service_id',$booking_service_id)->join('users','users.id','provider_id')->join('user_details', 'users.id', 'user_details.user_id')
        ->select(['booking_providers.*','users.name','users.email','profile_pic'])->get(); 
        foreach($this->providers as $provider){
            $this->feedback[$provider->provider_id]['rating']= 0;
            $this->feedback[$provider->provider_id]['feedback_comments'] = null;
        };
        // dd($this->providers->first());
    }
    public function render()
    {
        return view('livewire.app.common.modals.confirm-completion');
    }

    public function mount()
    {
       
       
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

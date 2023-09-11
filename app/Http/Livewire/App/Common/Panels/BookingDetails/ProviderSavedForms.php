<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use Livewire\Component;

class ProviderSavedForms extends Component
{
    public $showForm, $booking_id, $service_id=null, $provider_id=0;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.booking-details.provider-saved-forms');
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

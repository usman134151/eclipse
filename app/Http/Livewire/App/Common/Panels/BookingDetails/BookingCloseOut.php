<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use Livewire\Component;

class BookingCloseOut extends Component
{
    public $showForm, $booking;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.booking-details.booking-close-out');
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

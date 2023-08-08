<?php

namespace App\Http\Livewire\App\Common\Panels;

use Livewire\Component;

class AddDocuments extends Component
{
    public $showForm,$booking_id=0;
    protected $listeners = ['showList' => 'resetForm', 'setBookingId'];

    public function render()
    {
        return view('livewire.app.common.panels.add-documents');
    }
    public function setBookingId($booking_id){
        $this->booking_id = $booking_id;
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

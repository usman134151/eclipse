<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Booking;
use Livewire\Component;

class AssignmentDetails extends Component
{
    public $showForm, $booking;
    protected $listeners = ['showList' => 'resetForm','setAssignmentDetails'];

    public function render()
    {
        return view('livewire.app.common.panels.assignment-details');
    }

    public function setAssignmentDetails($booking_id)
    {
       $this->booking = Booking::where('id',$booking_id)->first();
       
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

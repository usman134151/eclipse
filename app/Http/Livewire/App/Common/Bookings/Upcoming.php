<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;

class Upcoming extends Component
{
    public $showForm;
    public $bookingType;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.bookings.upcoming');
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

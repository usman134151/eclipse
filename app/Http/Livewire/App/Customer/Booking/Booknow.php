<?php

namespace App\Http\Livewire\App\Customer\Booking;

use Livewire\Component;

class Booknow extends Component
{
    public $component = 'requester-info';
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.customer.booking.booknow');
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
    public function switch($component)
	{
		$this->component = $component;
	}

}
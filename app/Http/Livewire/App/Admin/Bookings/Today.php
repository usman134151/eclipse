<?php

namespace App\Http\Livewire\App\Admin\Bookings;

use Livewire\Component;

class Today extends Component
{
    public $showForm;
    public $bookingType;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.admin.bookings.today');
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

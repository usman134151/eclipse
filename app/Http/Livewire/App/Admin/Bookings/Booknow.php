<?php

namespace App\Http\Livewire\App\Admin\Bookings;

use Livewire\Component;

class Booknow extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.admin.bookings.booknow');
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
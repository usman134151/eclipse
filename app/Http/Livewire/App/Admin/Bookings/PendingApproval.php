<?php

namespace App\Http\Livewire\App\Admin\Bookings;

use Livewire\Component;

class PendingApproval extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.admin.bookings.pending-approval');
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

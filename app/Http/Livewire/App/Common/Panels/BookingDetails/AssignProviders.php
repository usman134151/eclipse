<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use App\Models\Tenant\User;
use Livewire\Component;

class AssignProviders extends Component
{
    public $showForm;
    public $providers;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.booking-details.assign-providers');
    }

    public function mount()
    {
       
       $this->providers=User::where('status',1)
                            ->whereHas('roles', function ($query) {
                               $query->wherein('role_id',[2]);
                           })->get();
       
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

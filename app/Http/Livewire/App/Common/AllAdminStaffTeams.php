<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class AllAdminStaffTeams extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.all-admin-staff-teams');
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

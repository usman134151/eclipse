<?php

namespace App\Http\Livewire\App\Admin\Staff;

use Livewire\Component;

class DeactivatedAdminStaff extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.admin.staff.deactivated-admin-staff');
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

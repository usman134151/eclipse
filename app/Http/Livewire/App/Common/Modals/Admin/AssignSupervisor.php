<?php

namespace App\Http\Livewire\App\Common\Modals\Admin;

use App\Models\Tenant\User;
use Livewire\Component;

class AssignSupervisor extends Component
{
    public $showForm,$allUsers;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.modals.admin.assign-supervisor');
    }

    public function mount()
    {
        $this->allUsers = User::query()
            ->where('status', 1)
            ->whereHas('roles', function ($query) {
                $query->where('role_id', '=', 5);
            })
            ->select('id', 'name','email',)
            ->get();
       
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

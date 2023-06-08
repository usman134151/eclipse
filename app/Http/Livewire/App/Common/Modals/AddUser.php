<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Helpers\SetupHelper;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\User;
use Livewire\Component;

class AddUser extends Component
{
    public $showForm,$accommodations, $allUsers;
    protected $listeners = ['showList' => 'resetForm'];
  
    public function render()
    {
        return view('livewire.app.common.modals.add-user');
    }

    public function mount()
    {
        $this->allUsers = User::query()
        ->where('status', 1)
        ->whereHas('roles', function ($query) {
            $query->where('role_id','>' ,3);
        })
            ->select('id', 'name')
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

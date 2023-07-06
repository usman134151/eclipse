<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Department;
use App\Models\Tenant\User;
use Livewire\Component;

class DepartmentUsers extends Component
{
    public $showForm, $departmentLabel,$departmentId,$users;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        $this->users= User::query()
        ->where(['users.status' => 1])
        ->whereHas('departments', function ($query) {
            $query->where('department_id', $this->departmentId);
        })
        ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
        ->select('users.id', 'users.name', 'phone', 'email', 'profile_pic')
        ->get();
        return view('livewire.app.common.department-users');
    }

    public function mount($departmentId,$departmentLabel)
    {

        $this->departmentId = $departmentId;
        $this->departmentLabel = $departmentLabel;
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

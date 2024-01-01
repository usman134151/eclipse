<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Department;
use App\Models\Tenant\User;
use App\Models\Tenant\UserDepartment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DepartmentUsers extends Component
{
    public $showForm, $departmentLabel,$departmentId,$users, $isDepartmentSupervisor;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        $this->users= User::query()
        ->where(['users.status' => 1])
        ->where('users.id' ,'!=',Auth::user()->id)
        ->whereHas('departments', function ($query) {
            $query->where('department_id', $this->departmentId);
        })
        ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
        ->select('users.id', 'users.name','users.status', 'phone', 'email', 'user_position as position','profile_pic')
        ->get();
        return view('livewire.app.common.department-users');
    }

    public function deleteRecord($user_id){
        UserDepartment::where(['user_id'=>$user_id,'department_id'=>$this->departmentId])->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => 'Success',
            'text' => "Record deleted successfully",
        ]);
    }

    public function mount($departmentId, $departmentLabel)
    {

        $this->departmentId = $departmentId;
        $this->departmentLabel = $departmentLabel;
        $userDepartment = UserDepartment::where('department_id', $this->departmentId)
            ->where('user_id', Auth::user()->id)
            ->first();

        if ($userDepartment !== null) {
            $userDepartmentArray = $userDepartment->toArray();
            $this->isDepartmentSupervisor = $userDepartmentArray['is_supervisor'];
        } else {
            // Handle the case where no UserDepartment was found for the given conditions
            $this->isDepartmentSupervisor = false; // For example, set a default value
        }
    }

    public function updateStatus($user)
    {
        $user = User::find($user); // Fetch the user by ID

        if ($user) {
            $user->update([
                'status' => $user->status == 1 ? 0 : 1
            ]);
        }
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

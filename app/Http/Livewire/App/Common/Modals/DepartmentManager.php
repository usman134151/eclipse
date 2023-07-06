<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Department;
use App\Models\Tenant\User;
use Livewire\Component;

class DepartmentManager extends Component
{
    public $showForm,$users=[];
    protected $listeners = [ 'setData'];

    public function render()
    {
        return view('livewire.app.common.modals.department-manager');
    }

    public function mount()
    {
       
       
    }
    public function setData($companyId){
        $this->users = User::query()
        ->where(['users.status' => 1])
        ->join('user_details', 'user_details.user_id', '=', 'users.id')
        ->join('companies', 'companies.id', '=', 'users.company_name')
        ->where('companies.id', '=', $companyId)
        ->select('users.id', 'users.name', 'email', 'profile_pic')
        ->get();
        // dd($this->users->first()->userdetail->profile_pic);
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

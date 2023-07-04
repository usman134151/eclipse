<?php

namespace App\Http\Livewire\App\Common\Panels\Company;

use App\Models\Tenant\Department;
use App\Models\Tenant\User;
use App\Models\Tenant\UserDepartment;
use Livewire\Component;

class DepartmentList extends Component
{
    public $showForm;
    public $companyId, $companyLabel, $departments;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.company.department-list');
    }

    public function mount()
    {
        $this->departments= Department::where('company_id',$this->companyId)->get();
        foreach($this->departments as $dept){
            $dept->supervisors = User::query()
                ->whereIn('users.id',$dept->users()->allRelatedIds()->toArray())
                ->join('user_departments',function ($query) use ($dept) {
                    $query->on('user_id','users.id');
                    $query->where('department_id', $dept->id);
                    $query->where('is_supervisor', true);
                })                
                ->select('users.id', 'users.name')
                ->get()->toArray();
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

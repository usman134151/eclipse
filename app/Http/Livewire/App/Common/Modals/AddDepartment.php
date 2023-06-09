<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Department;
use App\Models\Tenant\User;
use Livewire\Component;

class AddDepartment extends Component
{
    public $showForm, $departments, $selectedDepartments = [], $svDepartments = [], $defaultDepartment, $companyId;
    protected $listeners = ['showList' => 'resetForm', 'editRecord' => 'setDepartmentsDetails','updateCompany'];

    public function render()
    {
        return view('livewire.app.common.modals.add-department');
    }

    public function mount()
    {

        $this->departments = [];
    }

    public function setDepartmentsDetails(User $user){
        $departments = $user->departments;
        foreach($departments as $dept){
            $this->selectedDepartments[$dept->id]['department_id']=$dept->id;
            $this->selectedDepartments[$dept->id]['is_supervisor'] = $dept->pivot->is_supervisor; 
        }
        
        // $this->svDepartments=explode(", ", $user->userdetail->supervisor);;
        if(!is_null($user->userdetail))
            $this->defaultDepartment=$user->userdetail->department;
        else
            $this->defaultDepartment=0;

    }

    // Child Laravel component's updateData function
    public function updateData()
    {   
        $departmentNames=[];
        foreach ($this->selectedDepartments as $dept) {
            if($this->departments->firstWhere('id', $dept['department_id'])!=null)
                $departmentNames[] = $this->departments->firstWhere('id', $dept['department_id'])->name;
        }
        // Emit an event to the parent component with the selected industries and default industry
        $this->emitUp('updateSelectedDepartments', $this->selectedDepartments, $this->defaultDepartment,$departmentNames);
    }

    public function updateCompany($companyId){
     
        $this->companyId=$companyId;
        $this->departments = Department::where('company_id',$companyId)->get();
         $this->selectedDepartments = [];
        
    }


    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}

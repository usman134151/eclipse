<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Department;
use App\Models\Tenant\User;
use Livewire\Component;

class AddDepartment extends Component
{
    public $showForm,$user =null, $departments, $selectedDepartments = [], $svDepartments = [], $defaultDepartment=0, $companyId =0;
    protected $listeners = ['showList' => 'resetForm', 'editRecord' => 'setUser','setDepartmentsDetails','updateCompany'];

    public function render()
    {
        return view('livewire.app.common.modals.add-department');
    }

    public function mount()
    {
        $this->departments = Department::where('company_id', $this->companyId)->get();
    }

    public function setUser(User $user){
        $this->user = $user;
    }
    public function setDepartmentsDetails(){
        if($this->user->company_name == $this->companyId){ //checking if company is changed
        $departments = $this->user->departments;
        foreach($departments as $dept){
            $this->selectedDepartments[$dept->id]['department_id']=$dept->id;
            $this->selectedDepartments[$dept->id]['is_supervisor'] = $dept->pivot->is_supervisor; 
        }
        
        // $this->svDepartments=explode(", ", $user->userdetail->supervisor);;
        if(!is_null($this->user->userdetail))
            $this->defaultDepartment= $this->user->userdetail->department;
        else
            $this->defaultDepartment=0;}
            else{
                $this->selectedDepartments = [];
                $this->defaultDepartment=0;
            }
        
        $this->updateData();

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
        dd('updateCompany');
        $this->companyId=$companyId;
        $this->departments = Department::where('company_id',$companyId)->get();
        //  $this->selectedDepartments = [];
        if($this->user !=null)
        $this->setDepartmentsDetails() ;
        
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

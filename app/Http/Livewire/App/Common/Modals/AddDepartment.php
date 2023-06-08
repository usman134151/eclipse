<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Department;
use App\Models\Tenant\User;
use Livewire\Component;

class AddDepartment extends Component
{
    public $showForm, $departments, $selectedDepartments = [], $svDepartments = [], $defaultDepartment;
    protected $listeners = ['showList' => 'resetForm', 'editRecord' => 'setDepartmentsDetails'];

    public function render()
    {
        return view('livewire.app.common.modals.add-department');
    }

    public function mount()
    {

        $this->departments = Department::where('company_id', 1)->get();
    }

    public function setDepartmentsDetails(User $user){
        $this->selectedDepartments =$user->departments()->allRelatedIds()->toArray();
        $this->svDepartments=explode(", ", $user->userdetail->supervisor);;
        $this->defaultDepartment=$user->userdetail->department;

    }

    // Child Laravel component's updateData function
    public function updateData()
    {   
        $departmentNames=[];
        foreach ($this->selectedDepartments as $dept) {
            $departmentNames[] = $this->departments->firstWhere('id', $dept)->name;
        }
        // Emit an event to the parent component with the selected industries and default industry
        $this->emitUp('updateSelectedDepartments', $this->selectedDepartments,$this->svDepartments, $this->defaultDepartment,$departmentNames);
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

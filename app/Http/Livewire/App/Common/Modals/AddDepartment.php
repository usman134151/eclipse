<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Department;
use Livewire\Component;

class AddDepartment extends Component
{
    public $showForm, $departments, $selectedDepartments = [], $defaultDepartment;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.modals.add-department');
    }

    public function mount()
    {

        $this->departments = Department::where('company_id', 1)->get();
        // $this->selectedIndustries = array_fill_keys(Industry::pluck('id')->toArray(), false);
    }

    // Child Laravel component's updateData function
    public function updateData()
    {

        // Emit an event to the parent component with the selected industries and default industry
        $this->emitUp('updateSelectedDepartments', $this->selectedDepartments, $this->defaultDepartment);
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

<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Department;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddDepartment extends Component
{
    public $showForm, $user = null, $departments, $selectedDepartments = [], $svDepartments = [], $defaultDepartment = 0, $companyId = 0,$isBooking=false;
    protected $listeners = ['showList' => 'resetForm', 'editRecord' => 'setUser', 'setDepartmentsDetails', 'updateCompany','isBooking','setBookingDepartments','updateData'];

    public function render()
    {
        return view('livewire.app.common.modals.add-department');
    }

    public function mount()
    {

        if (request()->customerID) {
            $customer_id = request()->customerID;
        } elseif (session()->get('isCustomer')) {
            $customer_id  = Auth::id();
        } else {
            $customer_id = '';
        }
        if ($customer_id) {
            $this->user = User::find($customer_id);
            $this->companyId = $this->user->company_name;
        }

        if (session()->get('isCustomer') && in_array(5, session()->get('customerRoles'))) { 
               //if customer is supervisor, show only its departments
                $cur_user = User::find(Auth::id());
                
                $this->departments = $cur_user->supervised_departments;
        } else    // user is admin, show all departments 
            $this->departments = Department::where('company_id', $this->companyId)->get();

        if ($this->user)
            $this->setDepartmentsDetails();
    }
    public function setUser(User $user)
    {
        $this->user = $user;
    }
    public function setDepartmentsDetails()
    {
        if ($this->user->company_name == $this->companyId) { //checking if company is changed
            $departments = $this->user->departments;
            foreach ($departments as $dept) {
                $this->selectedDepartments[$dept->id]['department_id'] = $dept->id;
                $this->selectedDepartments[$dept->id]['is_supervisor'] = $dept->pivot->is_supervisor;
            }

            // $this->svDepartments=explode(", ", $user->userdetail->supervisor);;
            if (!is_null($this->user->userdetail))
                $this->defaultDepartment = $this->user->userdetail->department;
            else
                $this->defaultDepartment = 0;
        } else {
            $this->selectedDepartments = [];
            $this->defaultDepartment = 0;
        }

        $this->updateData();
    }
    public function setBookingDepartments($selectedDepartments,$companyId)
    {    
        
        $this->updateCompany($companyId);
        $this->selectedDepartments=$selectedDepartments;
       
    }
    // Child Laravel component's updateData function
    public function updateData($ids = [])
    {
        if($ids)
        {
            $this->selectedDepartments = array_map(static function ($item) {
                return ['department_id' => $item];
            }, $ids);
        
        }
        $departmentNames = [];
        foreach ($this->selectedDepartments as $dept) {
            if ($this->departments->firstWhere('id', $dept['department_id']) != null)
                $departmentNames[] = $this->departments->firstWhere('id', $dept['department_id'])->name;
        }
        // Emit an event to the parent component with the selected industries and default industry
        $this->emitUp('updateSelectedDepartments', $this->selectedDepartments, $this->defaultDepartment, $departmentNames);
    }

    public function updateCompany($companyId)
    {
    
        $this->companyId = $companyId;
       
        if(session()->get('isCustomer')){
            $userId=Auth::user()->id;
            $this->departments=  Department::where('company_id', $this->companyId)->whereIn('id', function($query) use ($userId) {
                $userId = Auth::user()->id;
                $query->select('department_id')
                    ->from('user_departments')
                    ->where('user_id', $userId);
            })->get();
            
        }
        else 
         $this->departments = Department::where('company_id', $companyId)->get();
        //  $this->selectedDepartments = [];
        if ($this->user != null)
            $this->setDepartmentsDetails();
    }

    public function isBooking(){
       
        $this->isBooking=true;
          //checking if customer then need to reset industries
          
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

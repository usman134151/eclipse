<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Department;
use App\Models\Tenant\User;
use Livewire\Component;

class DepartmentManager extends Component
{
    public $showForm,$users=[],$companyId =0, $selectedSupervisors=[], $isDefault=false;
    protected $listeners = [ 'setData','setCompany'];
    
    public function render()
    {
       
        
        $this->users = User::query()
        ->where(['users.status' => 1])
        ->join('user_details', 'user_details.user_id', '=', 'users.id')
        ->join('companies', 'companies.id', '=', 'users.company_name')
        ->where('companies.id', '=', $this->companyId)
        ->select('users.id', 'users.name', 'email', 'profile_pic')
        ->get();
        return view('livewire.app.common.modals.department-manager');
    }

    public function mount()
    {
    }
    public function setCompany($company_id){
        //on company id update
        $this->companyId = $company_id;

                    $this->selectedSupervisors = [];
                    $this->isDefault = 0;
    }

    public function setData($departmentid,$company_id,$selectedSupervisors=[], $defaultSupervisor=0){
        $department = Department::find($departmentid);
        $this->selectedSupervisors=[];
        
         foreach ($selectedSupervisors as $s) {
                    $this->selectedSupervisors[] = $s['user_id'];
                }
                    $this->isDefault=$defaultSupervisor;
    

        $this->companyId = $company_id;

    }

  

    // Child Laravel component's updateData function
    public function updateData()
    {
        // Emit an event to the parent component with the selected values
        $this->emit('updateSelectedSupervisors', $this->selectedSupervisors, $this->isDefault);
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

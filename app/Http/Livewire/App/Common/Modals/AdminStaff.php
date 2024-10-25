<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\User;
use App\Services\App\UserService;
use Livewire\Component;

class AdminStaff extends Component
{
    public $showForm,$adminStaff=[], $selectedStaff = [], $user_id, $selectAll = false;
    protected $listeners = ['showList' => 'resetForm', 'updateCompany' => 'setData','setValues'];
    
    public function setData($company_id)
    {
        $this->adminStaff = User::query()
            ->where(['users.status' => 1])
            ->whereHas('roles', function ($query) {
                $query->where('role_id', '=', 1);
                $query->orWhere('role_id', '=', 3);

            })
            ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
            // ->leftJoin('companies', 'companies.id', '=', 'users.company_name')
            // ->where('companies.id', '=', $company_id)
            ->select('users.id', 'users.name', 'phone','users.status','email','profile_pic')
            ->get();
    }

    public function updateSelectAll()
    {
      
        if ($this->selectAll == true){
            $selected = $this->adminStaff->pluck('id')->toArray();
            $this->selectedStaff = [];            
            foreach($selected as $index=>$val){
                $this->selectedStaff[$index]['id'] =$val;
                $this->selectedStaff[$index]['permission_type'] = 0; 

            }
        }else
            $this->selectedStaff = [];
    }

    public function setValues($user_id)
    {
        $this->user_id = $user_id;

        $userService = new UserService;
        $data = $userService->getUserRolesDetails($this->user_id, 3, 1);
        foreach($data as $index=>$val){
            $this->selectedStaff[$index]['id']=$val['user_id'];
            if($val['permission_type']=='manage')
                $this->selectedStaff[$index]['permission_type'] = true;
            else
                $this->selectedStaff[$index]['permission_type'] = false;

        }
        $this->updateData();
    }

    // Child Laravel component's updateData function
    public function updateData()
    {
        // Emit an event to the parent component with the selected values
        $this->emitUp('updateSelectedStaff', $this->selectedStaff);
    }

    public function render()
    {
        return view('livewire.app.common.modals.admin-staff');
    }

    public function mount()
    {
       
       
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

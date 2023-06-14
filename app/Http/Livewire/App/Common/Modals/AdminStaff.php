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
            ->leftJoin('companies', 'companies.id', '=', 'users.company_name')
            ->where('companies.id', '=', $company_id)
            ->select('users.id', 'users.name', 'phone','users.status')
            ->get();
    }

    public function updateSelectAll()
    {
        if ($this->selectAll == true)
            $this->selectedStaff = $this->adminStaff->pluck('id')->toArray();
        else
            $this->selectedStaff = [];
    }

    public function setValues($user_id)
    {
        $this->user_id = $user_id;

        $userService = new UserService;
        $data = $userService->getUserRolesDetails($this->user_id, 3, 1);

        $this->selectedStaff = $data->pluck('user_id')->toArray();
        // if ($data->where('is_default', 1)->isNotEmpty())
            // $this->isDefault = $data->where('is_default', true)->pluck('user_id')[0];
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

<?php

namespace App\Http\Livewire\App\Common\Modals\Admin;

use App\Models\Tenant\User;
use App\Services\App\UserService;
use Livewire\Component;

class AssignBillingManager extends Component
{
    public $showForm,$bManagers=[], $selectedBManagers = [], $isDefault = false, $user_id, $selectAll = false;
    protected $listeners = ['showList' =>'resetForm', 'updateCompany' => 'setData','setValues', 'selectSelfManager'];

    public function setData($company_id)
    {
        $this->bManagers = User::query()
            ->where(['users.status' => 1])
            ->whereHas('roles', function ($query) {
                $query->where('role_id', 9);
            })
            ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
            ->leftJoin('companies', 'companies.id', '=', 'users.company_name')
            ->where('companies.id', '=', $company_id)
            ->select('users.id', 'users.name', 'phone','email','profile_pic')
            ->get();
    }

    // used to implement "Assign Same User" checkbox ( glitchy )
    public function selectSelfManager($value)
    {
        // if ($value) {
        //     if(!in_array($this->user_id,$this->selectedBManagers) && (in_array($this->user_id, $this->bManagers)))
        //         $this->selectedBManagers[] = $this->user_id;  //not already selected and exists in bmanager role
        // } else {
        //     $key = array_search($this->user_id, $this->selectedBManagers);
        //     if ($key>=0)
        //         unset($this->selectedBManagers[$key]);
        // }
        // $this->updateData();
    }


    public function render()
    {
        return view('livewire.app.common.modals.admin.assign-billing-manager');
    }
    public function updateSelectAll()
    {
        if ($this->selectAll == true)
            $this->selectedBManagers = $this->bManagers->pluck('id')->toArray();
        else
            $this->selectedBManagers = [];
    }

    public function setValues($user_id)
    {
        $this->user_id = $user_id;

        $userService = new UserService;
        $data = $userService->getUserRolesDetails($this->user_id, 9, 1);

        $this->selectedBManagers = $data->pluck('user_id')->toArray();
        if ($data->where('is_default', 1)->isNotEmpty())
            $this->isDefault = $data->where('is_default', true)->pluck('user_id')[0];
        $this->updateData();
    }

    // Child Laravel component's updateData function
    public function updateData()
    {
        // Emit an event to the parent component with the selected values
        $this->emitUp('updateSelectedBManagers', $this->selectedBManagers, $this->isDefault);
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

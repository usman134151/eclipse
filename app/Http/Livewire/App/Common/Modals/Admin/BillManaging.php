<?php

namespace App\Http\Livewire\App\Common\Modals\Admin;

use App\Models\Tenant\User;
use App\Services\App\UserService;
use Livewire\Component;

class BillManaging extends Component
{
    public $showForm,$allUsers=[],  $selectedUsersToManage = [], $user_id, $selectAll = false;
    protected $listeners = ['showList' => 'resetForm', 'updateCompany' => 'setData','setValues'];

    public function render()
    {
        return view('livewire.app.common.modals.admin.bill-managing');
    }
    public function setData($company_id)
    {
        $this->allUsers= User::query()
            ->where(['users.status' => 1])
            ->whereHas('roles', function ($query) {
                $query->where('role_id', '>=', 5);
            })
            ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
            ->leftJoin('companies', 'companies.id', '=', 'users.company_name')
            ->where('companies.id', '=', $company_id)
            ->select('users.id', 'users.name', 'phone')
            ->get();
    }

    public function updateSelectAll()
    {
        if ($this->selectAll == true)
            $this->selectedUsersToManage = $this->allUsers->pluck('id')->toArray();
        else
            $this->selectedUsersToManage = [];
    }

    public function setValues($user_id)
    {
        $this->user_id = $user_id;

        $userService = new UserService;
        $data = $userService->getUserRolesDetails($this->user_id, 9, 0);

        $this->selectedUsersToManage = $data->pluck('associated_user')->toArray();
        $this->updateData();
    }

    public function updateData()
    {
        // Emit an event to the parent component with the selected values
        $this->emitUp('updateSelectedUsersToManager', $this->selectedUsersToManage);
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

<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Company;
use App\Models\Tenant\User;
use App\Services\App\UserService;
use Livewire\Component;

class CompanyUsers extends Component
{
    public $showForm, $companyLabel, $companyId, $users, $rolesArr = [], $isPanel = true;
    protected $listeners = ['showList' => 'resetForm', 'savePermissions' => 'save'];

    public function render()
    {

        return view('livewire.app.common.company-users');
    }




    public function mount($companyId, $companyLabel)
    {
        $this->companyId = $companyId;
        $this->companyLabel = $companyLabel;
        $this->users = User::query()
            ->where(['users.status' => 1])
            ->join('user_details', 'user_details.user_id', '=', 'users.id')
            // ->join('companies', 'companies.id', '=', 'users.company_name')
            ->where('users.company_name', '=', $this->companyId)
            ->join('role_user', 'role_user.user_id', '=', 'users.id') // Join with role_user table
            ->where('role_user.role_id', 4) // Where role_id is 4
            ->select('users.id', 'users.name', 'email', 'phone', 'user_position as position', 'profile_pic')
            ->get();
        $service = new UserService();

        foreach ($this->users as $user) {
            $this->rolesArr[$user->id] =  $service->getCustomerRoles($user->id);
        }
    }
    public function save()
    {
        $service = new UserService();

        foreach ($this->rolesArr as $user_id => $roles) {
            $service->storeCustomerRoles($roles, $user_id);
        }
        if ($this->isPanel) {
            $this->dispatchBrowserEvent('close-company-users');
            $this->emit('showList', 'Permissions saved successfully');
        } else
            $this->emit('showConfirmation', 'Permissions saved successfully');
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

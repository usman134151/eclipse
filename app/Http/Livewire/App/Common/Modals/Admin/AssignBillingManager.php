<?php

namespace App\Http\Livewire\App\Common\Modals\Admin;

use App\Models\Tenant\User;
use Livewire\Component;

class AssignBillingManager extends Component
{
    public $showForm,$bManagers=[];
    protected $listeners = ['showList' =>'resetForm', 'updateCompany' => 'setData'];

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
            ->select('users.id', 'users.name', 'phone')
            ->get();
    }

    public function render()
    {
        return view('livewire.app.common.modals.admin.assign-billing-manager');
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

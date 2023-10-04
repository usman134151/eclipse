<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\User;
use App\Services\App\UserService;
use Livewire\Component;

class Supervising extends Component
{
    public $showForm, $supervising=[], $selectedSupervising=[], $user_id,$selectAll=false;
    protected $listeners = ['showList' => 'resetForm', 'updateCompany' => 'setData', 'setValues'];

    public function setData($company_id)
    {

        $this->supervising = User::query()
            ->where(['users.status' => 1])
            ->whereHas('roles', function ($query) {
                $query->where('role_id','>=', 5);
            })
            ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
            ->leftJoin('companies','companies.id', '=', 'users.company_name')
            ->where('companies.id', '=', $company_id)
            ->select('users.id', 'users.name', 'phone','email','profile_pic')
            ->get();

    }

    public function updateSelectAll()
    {
        if ($this->selectAll == true)
            $this->selectedSupervising = $this->supervising->pluck('id')->toArray();
        else
            $this->selectedSupervising = [];
    }


    public function render()
    {
        return view('livewire.app.common.modals.supervising');
    }

    public function setValues($user_id)
    {
        $this->user_id = $user_id;

        $userService = new UserService;
        $data = $userService->getUserRolesDetails($this->user_id, 5, 0);

// dd($data);
        $this->selectedSupervising = $data->pluck('associated_user')->toArray();
        $this->updateData();
    }

    public function updateData()
    {
        // Emit an event to the parent component with the selected values
        $this->emitUp('updateSelectedSupervising', $this->selectedSupervising);
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

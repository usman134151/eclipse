<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Company;
use App\Models\Tenant\User;
use Livewire\Component;

class CompanyUsers extends Component
{
    public $showForm,$companyLabel,$companyId,$users, $rolesArr=[];
    protected $listeners = ['showList' => 'resetForm', 'savePermissions'=>'save'];

    public function render()
    {
      
        return view('livewire.app.common.company-users');
    }

    


    public function mount($companyId,$companyLabel)
    {
       $this->companyId = $companyId;
       $this->companyLabel = $companyLabel;
        $this->users = User::query()
            ->where(['users.status' => 1])
            ->join('user_details', 'user_details.user_id', '=', 'users.id')
            ->join('companies', 'companies.id', '=', 'users.company_name')
            ->where('companies.id', '=', $this->companyId)
            ->select('users.id', 'users.name', 'email', 'phone', 'user_position as position', 'profile_pic')
            ->get();
    }
    public function save(){
        $this->dispatchBrowserEvent('close-company-users');
        $this->emit('showList', 'Permissions saved successfully');
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

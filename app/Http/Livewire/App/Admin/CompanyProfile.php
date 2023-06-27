<?php

namespace App\Http\Livewire\App\Admin;

use App\Models\Tenant\Company;
use App\Models\Tenant\User;
use Livewire\Component;

class CompanyProfile extends Component
{
    public $company;
	public $showDepartmentProfile;
	protected $listeners = [
		'showDetails',
		'showDepartmentProfile'
	];

	public function render()
	{
		return view('livewire.app.admin.company-profile');
	}

	public function mount()
	{}
		
    public function showDetails($company){
		$this->company=$company;
		$this->company['users'] = User::where('company_name',$company['id'])->get()->count();
			
		$this->company['admins'] = User::query() //setting admins
			->where(['users.status' => 1])
			->whereHas('roles', function ($query) {
				$query->where('role_id', 10);
			})
			->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
			->leftJoin('companies', 'companies.id', '=', 'users.company_name')
			->where('companies.id', '=', $this->company['id'])
			->select('users.id', 'users.name')
			->get()->toArray();
		
        $this->dispatchBrowserEvent('refreshSelects');

	}
     
	public function showDepartmentProfile($department=null)
	{	
		if ($department) {
		$this->department = $department;

		$this->emit('showDepartmentDetails', $department);
	}
	

		$this->showDepartmentProfile = true;
	}

	public function showList($userId=1)
	{
        $company=Company::find($userId);
		$this->emit('showList');
	}
}

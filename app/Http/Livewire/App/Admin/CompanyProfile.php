<?php

namespace App\Http\Livewire\App\Admin;

use App\Models\Tenant\Company;
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

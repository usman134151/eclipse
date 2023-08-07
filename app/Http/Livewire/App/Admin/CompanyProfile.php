<?php

namespace App\Http\Livewire\App\Admin;

use App\Models\Tenant\Company;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\User;
use Livewire\Component;

class CompanyProfile extends Component
{
    public $company;
	public $showDepartmentProfile;
	public $du_counter = 0, $du_departmentId, $du_departmentLabel,  $du_departmentDetails = false; //for company users

	protected $listeners = [
		'showDetails',
		'showDepartmentProfile', 'refreshDepartmentUsers',
		'showConfirmation'
	];

	public function render()
	{
		return view('livewire.app.admin.company-profile');
	}

	public function mount($company=null)
	{
		if($company)
			$this->showDetails($company);
	}
		
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

		$this->company['tags'] = json_decode($this->company['tags']);
		$schedule =  Schedule::where(['model_id'=>$company['id'],'model_type'=>2])->first();
		if($schedule){
			$days = ["Monday" => 1, "Tuesday" => 2, "Wednesday" => 3, "Thursday" => 4, "Friday" => 5, "Saturday" => 6, "Sunday" => 7];

			$sch = $schedule->timeslots->groupBy('timeslot_day')->sortBy(fn ($val, $key) => $days[$key]);
			foreach($sch as $dayName=> $slots){
				$this->company['schedule'][$dayName] = $slots->groupBy('timeslot_type')->toArray();
			}
		}
		// dd($this->company['schedule']);

        $this->dispatchBrowserEvent('refreshSelects');

	}
	public function showConfirmation($message = "")
	{
		if ($message) {
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
	}

	public function lockAccount()
	{
		$company = Company::find($this->company['id']);
		$company->status = !$company->status;
		$company->save();
		$this->company['status'] = $company->status;

		$this->dispatchBrowserEvent('swal:modal', [
			'type' => 'success',
			'title' => 'Success',
			'text' => 'Company Account Locked Successfully',
		]);
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

	//for department-list department users modal

	public function refreshDepartmentUsers($users_departmentId, $users_departmentLabel) //for department users
	{
		if ($this->du_counter == 0) {
			$this->du_departmentId = 0;
			$this->du_departmentLabel = $users_departmentLabel;
			$this->dispatchBrowserEvent('refresh-department-users', ['departmentId' => $users_departmentId, 'departmentLabel' => $users_departmentLabel]);
			$this->du_counter = 1;
			$this->du_departmentDetails = true;
		} else {
			$this->du_departmentId = $users_departmentId;
			$this->du_counter = 0;
		}
	}

}

<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Department;
use App\Models\Tenant\Schedule;
use Livewire\Component;

class DepartmentProfile extends Component
{
	public $showForm;
	public $department, $schedule;
	protected $listeners = [
		'showDepartmentDetails', 'showConfirmation'
	];

	public function render()
	{
		$this->showDepartmentDetails($this->department);

		return view('livewire.app.common.department-profile');
	}

	public function mount($departmentId)
	{
		$this->department= Department::find($departmentId);
	}

	public function lockAccount()
	{
		$department = Department::find($this->department->id);
		$department->status = !$department->status;
		$department->save();
		$this->department->status = $department->status;
		$this->showConfirmation("Account Locked Successfully");
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
	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
	}

	public function showDepartmentDetails($department){
		$this->department=$department;
		$this->department['tags'] = json_decode($this->department->tags);
		$schedule =  Schedule::where(['model_id' => $department->id, 'model_type' => 4])->first();
		if ($schedule){
			$days = ["Monday" => 1, "Tuesday" => 2, "Wednesday" => 3, "Thursday" => 4, "Friday" => 5, "Saturday" => 6, "Sunday" => 7];

			$this->department['schedule'] = $schedule->timeslots->groupBy('timeslot_day')->sortBy(fn ($val, $key) => $days[$key])->toArray();}

		$this->getDepartmentSchedule();
		
        $this->dispatchBrowserEvent('refreshSelects');

	}

	public function getDepartmentSchedule()
	{
		//reinit schedule
		$departmentSchedule = Schedule::where('model_id', $this->department->id)->where('model_type', 4)->get()->first();
		if (!is_null($departmentSchedule)) {
			$this->schedule = $departmentSchedule;
		} else {
			$this->schedule = new Schedule;
			$this->schedule->model_type = 4;
			$this->schedule->working_days = json_encode([]);
			$this->schedule->timezone_id = 0;

			$this->schedule->model_id = $this->department->id;
			$this->schedule->save();
		}
		//as this function is called from mount, cant be emitted from here. 
		//emitted when settings tab is clicked.
		// $this->emit('getRecord', $this->schedule->id, true);
	}

	public function saveSchedule($redirect = 1)
	{
		//save other fields as well
		$this->emit('saveSchedule');
		$this->showConfirmation("Department has been saved successfully");
		
	}



}
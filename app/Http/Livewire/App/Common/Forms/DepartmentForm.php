<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\Company;
use App\Models\Tenant\Department;
use App\Models\Tenant\User;
use Illuminate\Validation\Rule;
use App\Services\App\DepartmentService;
use Carbon\Carbon;

class DepartmentForm extends Component
{
    public $phoneNumbers=[['phone_title'=>'','phone_number'=>'']];
	public $component = 'department-info';
    public $department,$providers=[], $fv=[],$unfv =[];
    public $setupValues = [
        'companies'=>['parameters'=>['Company', 'id', 'name', '', '', 'name', false, 'department.company_id','','company_id',0]],
        'industries'=>['parameters'=>['Industry', 'id', 'name', '', '', 'name', false, 'department.industry_id','','industry_id',1 ]],
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'department.language_id','','language_id',2]]
	];
    protected $listeners = ['updateVal' => 'updateVal'];
    public $step = 1;

	public function showList($message='')
	{
		$this->emit('showList',$message);
	}

	public function mount(Department $department)
	{
		if (request()->departmentID != null) {	//edit
			
			$this->department = Department::find(request()->departmentID);
			if ($this->department->department_service_start_date)
				$this->department->department_service_start_date = Carbon::createFromFormat('Y-m-d', $this->department->department_service_start_date)->format('m/d/Y');
			if ($this->department->department_service_end_date)
			$this->department->department_service_end_date = Carbon::createFromFormat('Y-m-d', $this->department->department_service_end_date)->format('m/d/Y');

			if ($this->department->get('favored_providers') != null)
				$this->fv = explode(', ', $this->department->favored_providers);

			if ($this->department->get('unfavored_providers') != null)
				$this->unfv = explode(', ', $this->department->unfavored_providers);
				// $this->dispatchBrowserEvent('refreshSelects');
			
		}elseif(request()->companyID != null){ 	//create
			$this->department = $department;
			$this->department->company_id= request()->companyID;
			$company = Company::find(request()->companyID);
			$this->department->industry_id = $company->industry_id;

		}

        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
		$this->providers = User::query()
			->where('status', 1)
			->whereHas('roles', function ($query) {
				$query->where('role_id', 2);
			})
			->select('id', 'name')
			->get()->toArray();


    }

    public function rules()
	{
		return [
			'department.name' => [
				'required',
				'string',
				'max:255',
				Rule::unique('departments', 'name')->ignore($this->department->id)],
            'department.company_id'=>'required',
			'department.industry_id'=>'required',
			'department.department_website' => 'nullable|url',
			'department.language_id' => 'nullable',
			'department.department_service_start_date' => 'nullable|date_format:m/d/Y',
			'department.department_service_end_date' => 'nullable|date_format:m/d/Y',
		];
	}
    public function save($redirect = 1){
		$this->validate();
        $this->step=2;
		$this->department->added_by = 1;

		if ($this->department->department_service_start_date != null) //convert before saving
			$this->department->department_service_start_date = Carbon::parse($this->department->department_service_start_date);
		if ($this->department->department_service_end_date != null) //convert before saving
			$this->department->department_service_end_date = Carbon::parse($this->department->department_service_end_date);

		$this->department->favored_providers = implode(', ', $this->fv);
		$this->department->unfavored_providers = implode(', ', $this->unfv);

		

        $departmentService = new DepartmentService;
        $this->department = $departmentService->createDeparment($this->department,$this->phoneNumbers);

		if ($redirect) {
			// save and exit

			$this->showList("Department has been saved successfully");
			$this->department = new Department;

		} else {
			$this->emit('updateComponent', $this->team);
		}


	}
    public function updateVal($attrName, $val)
    {
		if($attrName== 'favored_providers'){
			$this->fv=$val;
		}elseif($attrName == 'unfavored_providers'){
			$this->unfv=$val;
		}else
        $this->department->$attrName = $val;

    }
	public function switch($component)
	{
		$this->component = $component;
	}

	public function render()
	{
		return view('livewire.app.common.forms.department-form');
	}
    public function addPhone(){
		$this->phoneNumbers[]=['phone_title'=>'','phone_number'=>''];
	}
	public function removePhone($index)
    {
        unset($this->phoneNumbers[$index]);
        $this->phoneNumbers = array_values($this->phoneNumbers);
    }
    public function addServices(){
		$this->step=3;
	}
}

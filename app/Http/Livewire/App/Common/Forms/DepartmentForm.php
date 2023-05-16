<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\Department;
use Illuminate\Validation\Rule;
use App\Services\App\DepartmentService;
class DepartmentForm extends Component
{
    public $phoneNumbers=[['phone_title'=>'','phone_number'=>'']];
	public $component = 'department-info';
    public $department;
    public $setupValues = [
        'companies'=>['parameters'=>['Company', 'id', 'name', '', '', 'name', false, 'department.company_id','','company_id',0]],
        'industries'=>['parameters'=>['Industry', 'id', 'name', '', '', 'name', false, 'department.industry_id','','industry_id',1 ]],
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'department.language_id','','language_id',2]]
	];
    protected $listeners = ['updateVal' => 'updateVal'];
    public $step = 1;
	public function showList()
	{
		$this->emit('showList');
	}

	public function mount(Department $department)
	{
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->department=$department;
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
    public function save(){
		$this->validate();
        $this->step=2;
		$this->department->added_by = 1;
        $departmentService = new DepartmentService;
        $this->department = $departmentService->createDeparment($this->department,$this->phoneNumbers);
        $this->department = new Department;

	}
    public function updateVal($attrName, $val)
    {

        $this->department[$attrName] = $val;


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

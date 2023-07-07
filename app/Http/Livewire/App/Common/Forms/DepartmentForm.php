<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\Company;
use App\Models\Tenant\Department;
use App\Models\Tenant\Phone;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\User;
use App\Services\App\AddressService;
use Illuminate\Validation\Rule;
use App\Services\App\DepartmentService;
use App\Services\App\UploadFileService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class DepartmentForm extends Component
{
	use WithFileUploads;
    public $phoneNumbers=[['phone_title'=>'','phone_number'=>'']], $userAddresses = [];
	public $component = 'department-info',$image=null, $companyPhones=[],$companyUsers=[];
    public $department,$providers=[], $fv=[],$unfv =[];
    public $setupValues = [
        'companies'=>['parameters'=>['Company', 'id', 'name', '', '', 'name', false, 'department.company_id','','company_id',0]],
        'industries'=>['parameters'=>['Industry', 'id', 'name', '', '', 'name', false, 'department.industry_id','','industry_id',1 ]],
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'department.language_id','','language_id',2]]
	];
    protected $listeners = ['updateVal' => 'updateVal', 'stepIncremented', 'updateAddress' => 'addAddress','addPhone'];
	public $driveActive, $serviceActive, $scheduleActive, $departmentActive;
	public $schedule,$company_id=0;
	
    public $step = 1;

	public function showList($message='')
	{
		$this->emit('showList',$message,$this->company_id);
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

			if ($this->department->get('company_phones') != null)
				$this->department->company_phones = explode(', ', $this->department->company_phones);

			if (count($this->department->phones)) {
				//dd($company->phones);
				$this->phoneNumbers = [];
				foreach ($this->department->phones as $phone) {
					$this->phoneNumbers[] = ['phone_number' => $phone->phone_number, 'phone_title' => $phone->phone_title, 'id' => $phone->id];
				}
			}
			if (count($this->department->addresses)) {
				//dd($company->phones);
				$this->userAddresses = [];
				foreach ($this->department->addresses as $address) {
					$this->userAddresses[] = $address->toArray();
				}
			}
			if (count($this->department->company->phones)) {
			
				$this->companyPhones = [];
				foreach ($this->department->company->phones as $phone) {
					$this->companyPhones[] = ['phone_number' => $phone->phone_number, 'phone_title' => $phone->phone_title, 'id' => $phone->id];
				}

			}
			$this->dispatchBrowserEvent('refreshSelects');
			
		}elseif(request()->companyID != null){ 	//create
			$this->department = $department;
			$this->department->company_id= request()->companyID;
			$company = Company::find(request()->companyID);
			$this->department->industry_id = $company->industry_id;
			if(count($company->phones)) {
					$this->companyPhones = [];
					foreach ($company->phones as $phone) {
						$this->companyPhones[] = ['phone_number' => $phone->phone_number, 'phone_title' => $phone->phone_title, 'id' => $phone->id];
				
					}
				}
		}
		
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
		$this->providers = User::query()
			->where('status', 1)
			->whereHas('roles', function ($query) {
				$query->where('role_id', 2);
			})
			->select('id', 'name')
			->get()->toArray();
		$this->company_id = $this->department->company_id;

    }
	public function setData(){
		$this->emit('setData', $this->department->company->id);

}
    public function rules()
	{
		return [
			'department.name' => [
				'required',
				'string',
				'max:255',
				'unique:departments,name,'.$this->department->id.',id,company_id,'.$this->company_id,
				// Rule::unique('departments', 'name')->ignore($this->department->id)
			],
            'department.company_id'=>'required',
			'department.industry_id'=>'required',
			'department.department_website' => 'nullable|url',
			'department.language_id' => 'nullable',
			'department.company_phones.*' => 'nullable',
			'department.hide_details' => 'nullable',
			'department.department_service_start_date' => 'nullable|date_format:m/d/Y',
			'department.department_service_end_date' => 'nullable|date_format:m/d/Y',
			'image' => 'nullable|image|mimes:jpg,png,jpeg',

		];
	}
    public function save($redirect = 1){
		$this->validate();
        $this->step=2;
		$this->department->added_by = Auth::id();

		if ($this->department->department_service_start_date != null) //convert before saving
			$this->department->department_service_start_date = Carbon::parse($this->department->department_service_start_date);
		if ($this->department->department_service_end_date != null) //convert before saving
			$this->department->department_service_end_date = Carbon::parse($this->department->department_service_end_date);

		$this->department->favored_providers = implode(', ', $this->fv);
		$this->department->unfavored_providers = implode(', ', $this->unfv);

		if(($this->department->company_phones!=null)&&count($this->department->company_phones))
			$this->department->company_phones = implode(', ', $this->department->company_phones);


		if ($this->image != null) {
			$fileService = new UploadFileService();
			$this->department->department_logo = $fileService->saveFile('profile_pic', $this->image, $this->department->department_logo);
		}

        $departmentService = new DepartmentService;
        $this->department = $departmentService->createDeparment($this->department,$this->phoneNumbers,$this->userAddresses);

		if ($redirect) {
			// save and exit

			$this->showList("Department has been saved successfully");
			$this->department = new Department;

		} else {
			$this->getCompanySchedule();
		}



	}


	public function getCompanySchedule()
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


		$this->scheduleActive = "active";

		$this->switch('schedule');

		$this->emit('getRecord', $this->schedule->id, true);
	}


	public function saveSchedule($redirect = 1)
	{
		$this->emit('saveSchedule');
		if ($redirect) {
			$this->showList("Department has been saved successfully");
			$this->department = new Department;
			$this->schedule = new Schedule();
		} else {
			$this->serviceActive = "active";
			$this->scheduleActive = "";
			$this->switch('service-catalog');
			$this->step = 3;
		}
	}

	public function serviceCatelog($redirect = 1)
	{

		if ($redirect) {
			$this->showList("Department has been saved successfully");
			$this->department = new Department;
			$this->schedule = new Schedule;
		} else {
			$this->serviceActive = "";
			$this->scheduleActive = "";
			$this->driveActive = "active";
			$this->switch('drive-documents');
			$this->step = 4;
		}
	}

	public function setStep($step, $tabName, $component)
	{
		$tabs = ['serviceActive', 'driveActive', 'scheduleActive', 'departmentActive'];
		foreach ($tabs as $key)
			$this->$key = '';
		$this->step = $step;
		$this->$tabName = "active";
		$this->switch($component);
		$this->dispatchBrowserEvent('refreshSelects');
	}

	public function stepIncremented()
	{

		$this->step = $this->step + 1;
		if ($this->step == 4) {
			$this->driveActive = 'active';
			$this->serviceActive = '';
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
		if (key_exists('id', $this->phoneNumbers[$index])) {
			Phone::destroy($this->phoneNumbers[$index]['id']);
		}

		unset($this->phoneNumbers[$index]);
        unset($this->phoneNumbers[$index]);
        $this->phoneNumbers = array_values($this->phoneNumbers);
    }
	public function updateAddressType($type)
	{
		$this->emit('updateAddressType', $type);
	}
	public function addAddress($addressArr)
	{
		$this->userAddresses[] = $addressArr;
	}

	public function deleteAddress($index)
	{
		if (key_exists('id', $this->userAddresses[$index])) {
			AddressService::deleteAddress($this->userAddresses[$index]['id']);
		}

		unset($this->userAddresses[$index]);
		$this->userAddresses = array_values($this->userAddresses);
	}
    public function addServices(){
		$this->step=3;
	}
}

<?php

namespace App\Http\Livewire\App\Admin\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Services\App\CompanyService;
use App\Models\Tenant\Company;
use App\Models\Tenant\Phone;
use App\Models\Tenant\Schedule;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AddCompany extends Component
{
	public $component = 'company-info';
	public $phoneNumbers =[['phone_title'=>'','phone_number'=>'']];
	public $deletedNumbers=[];
	public $setupValues = [
		'industries'=>['parameters'=>['Industry', 'id', 'name', '', '', 'name', false, 'company.industry_id','','industry',1]],
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'company.language_id', '','language',4]],
		'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',4,'setup_value_label',false,'company.company_timezone', '','company_timezone',4]]
	
	];
	protected $listeners = ['updateVal' => 'updateVal','editRecord' => 'edit', 'stepIncremented','updateAddress' => 'addAddress','addPhone'];
	public $step=1;
	public $company,$userAddresses=[];
	public $driveActive,$serviceActive,$scheduleActive;
	public $schedule;
	
	
	

	public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}

	public function render()
	{
		
		return view('livewire.app.admin.forms.add-company');
		
	}

	public function edit(Company $company){
		
        $this->label="Edit";
       $this->company=$company;
	   if(count($company->phones)){
			//dd($company->phones);
			$this->phoneNumbers=[];
			foreach($company->phones as $phone){
				$this->phoneNumbers[]=['phone_number'=>$phone->phone_number,'phone_title'=>$phone->phone_title,'id'=>$phone->id];
			}
		
		}
		if(count($company->addresses)){
			//dd($company->phones);
			$this->userAddresses=[];
			foreach($company->addresses as $address){
				$this->userAddresses[]=$address->toArray();
			}
		
		}	



		
    }
	public function mount(Company $company){
		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
		$this->company=$company;
		$this->showHours=false;
		$this->showAddress=false;

		


	}
	public function updateVal($attrName, $val)
	{  
		   if($attrName=="company_timezone"){
			$this->company['company_timezone'] = $val;
			
		   }
		   else{
			$this->company[$attrName.'_id'] = $val;
		   }
	}
	public function updateAddressType($type){
		$this->emit('updateAddressType',$type);
	}
	public function switch($component)
	{
		$this->component = $component;
	}

	//front function

	public function addPhone($title='',$number=''){
		
		$this->phoneNumbers[]=['phone_title'=>$title,'phone_number'=>$number];
	}
	public function removePhone($index)
    {
		if(key_exists('id',$this->phoneNumbers[$index])){
			Phone::destroy($this->phoneNumbers[$index]['id']);
		}
       
		unset($this->phoneNumbers[$index]);
        $this->phoneNumbers = array_values($this->phoneNumbers);

    }

	public function addAddress($addressArr){
		$this->userAddresses[]=$addressArr;
		
	}

	public function rules()
	{
		return [
			'company.name' => [
				'required',
				'string',
				'max:255',
				Rule::unique('companies', 'name')->ignore($this->company->id)],
			'company.industry_id'=>'required',
			'company.company_website' => 'nullable|url',	
			'company.language_id' => 'nullable',
			'company.company_service_start_date' => 'nullable|date_format:m/d/Y',
			'company.company_service_end_date' => 'nullable|date_format:m/d/Y',
		];
	}

	public function save($redirect=1){
		$this->validate();
		$this->company->added_by = Auth::id();
		$companyService = new CompanyService;
        $this->company = $companyService->createCompany($this->company,$this->phoneNumbers,$this->userAddresses);
		$this->step=2;

		//dd($this->company);
		if($redirect){
			$this->showList("Company has been saved successfully");
			$this->company = new Company;
		}
		else{
			$this->getCompanySchedule();
		
		}

	}

	public function stepIncremented()
	{
	
		$this->step=$this->step+1;
		if($this->step==3)
		 {
			$this->driveActive='active';
			$this->serviceActive='';
		 }
	}

	public function getCompanySchedule(){
		//reinit schedule
		$companySchedule=Schedule::where('model_id',$this->company->id)->where('model_type',2)->get()->first();
		if(!is_null($companySchedule)){
			$this->schedule=$companySchedule;
		}
		else{
			$this->schedule=new Schedule;
			$this->schedule->model_type=2;
			$this->schedule->working_days=json_encode([]);
			$this->schedule->timezone_id=0;
			
			$this->schedule->model_id=$this->company->id;
			$this->schedule->save();

		}


			$this->scheduleActive="active";
			
			$this->switch('schedule');
			
			$this->emit('getRecord', $this->schedule->id,true);
	}

	public function saveSchedule($redirect=1){
		$this->emit('saveSchedule');
		if($redirect){
			$this->showList("Company has been saved successfully");
			$this->company = new Company;
			$this->schedule=new Schedule;
		}
		else{
			$this->serviceActive="active";
			$this->scheduleActive="";
			$this->switch('service-catalog');
			$this->step=3;
		
		}
	}
	public function serviceCatelog($redirect=1){
		
		if($redirect){
			$this->showList("Company has been saved successfully");
			$this->company = new Company;
			$this->schedule=new Schedule;
		}
		else{
			$this->serviceActive="";
			$this->scheduleActive="";
			$this->driveActive="active";
			$this->switch('drive-documents');
			$this->step=4;
		
		}
	}

	public function setStep($step,$tabName,$component){
		$this->step=3;
		$this->$tabName="active";
		$this->switch($component);
		
	}

}

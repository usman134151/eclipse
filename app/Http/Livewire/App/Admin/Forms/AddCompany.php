<?php

namespace App\Http\Livewire\App\Admin\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Services\App\CompanyService;
use App\Models\Tenant\Company;
use Illuminate\Validation\Rule;

class AddCompany extends Component
{
	public $component = 'company-info';
	public $phoneNumbers=[['phone_title'=>'','phone_number'=>'']];
	public $setupValues = [
		'industries'=>['parameters'=>['Industry', 'id', 'name', '', '', 'name', false, 'company.industry_id','','industry',1]],
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'company.language_id', '','languages',4]]
	];
	public $company;

	public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}

	public function render()
	{
		return view('livewire.app.admin.forms.add-company');
	}

	public function mount(Company $company){
		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
		$this->company=$company;

	}

	public function switch($component)
	{
		$this->component = $component;
	}

	//front function

	public function addPhone(){
		$this->phoneNumbers[]=['phone_title'=>'','phone_number'=>''];
	}
	public function removePhone($index)
    {
        unset($this->phoneNumbers[$index]);
        $this->phoneNumbers = array_values($this->phoneNumbers);
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

	public function save(){
		$this->validate();
		$this->company->added_by = 1;
		$companyService = new CompanyService;
        $this->company = $companyService->createCompany($this->company);
		//dd($this->company);
		$this->showList("Company has been saved successfully");
		$this->company = new Company;
	}
}

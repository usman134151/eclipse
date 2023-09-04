<?php

namespace App\Http\Livewire\App\Admin\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Services\App\CompanyService;
use App\Services\App\AddressService;
use App\Models\Tenant\Company;
use App\Models\Tenant\Phone;
use App\Models\Tenant\RoleUser;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\Tag;
use App\Models\Tenant\User;
use App\Services\App\UploadFileService;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class AddCompany extends Component
{
	use WithFileUploads;
	public $component = 'company-info', $image = null, $label = 'Add', $allTags = [], $tags = [];
	public $phoneNumbers = [['phone_title' => '', 'phone_number' => '']];
	public $deletedNumbers = [], $companyUsers = [], $admins = [], $providers = [], $fv_providers = [], $unfv_providers = [];
	public $setupValues = [
		'industries' => ['parameters' => ['Industry', 'id', 'name', '', '', 'name', false, 'company.industry_id', '', 'industry', 1]],
		'languages' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 1, 'setup_value_label', false, 'company.language_id', '', 'language', 4]],
		'timezones' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 4, 'setup_value_label', false, 'company.company_timezone', '', 'company_timezone', 4]]

	];
	protected $listeners = ['updateVal' => 'updateVal', 'editRecord' => 'edit', 'stepIncremented', 'updateAddress' => 'addAddress', 'addPhone'];
	public $step = 1;
	public $company, $userAddresses = [];
	public $driveActive, $serviceActive, $scheduleActive, $companyActive;
	public $schedule;




	public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}

	public function render()
	{

		//null check to avoid break
		if (!is_array($this->tags))
			$this->tags = [];

		return view('livewire.app.admin.forms.add-company');
	}

	public function edit(Company $company)
	{

		$this->label = "Edit";
		$this->company = $company;
		// dd($this->company->user->toArray());

		if (count($company->phones)) {
			//dd($company->phones);
			$this->phoneNumbers = [];
			foreach ($company->phones as $phone) {
				$this->phoneNumbers[] = ['phone_number' => $phone->phone_number, 'phone_title' => $phone->phone_title, 'id' => $phone->id];
			}
		}
		if (count($company->addresses)) {
			//dd($company->phones);
			$this->userAddresses = [];
			foreach ($company->addresses as $address) {
				$this->userAddresses[] = $address->toArray();
			}
		}
		if (count($this->company->user->toArray()) > 0) {
			$this->companyUsers = $this->company->user->toArray();
			$this->admins = User::query() //setting admins
				->where(['users.status' => 1])
				->whereHas('roles', function ($query) {
					$query->where('role_id', 10);
				})
				// ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
				->leftJoin('companies', 'companies.id', '=', 'users.company_name')
				->where('companies.id', '=', $this->company->id)
				->select('users.id', 'users.name')
				->get()->pluck('id')->toArray();
		}

		if ($this->company->get('favored_providers') != null)
			$this->fv_providers = explode(', ', $this->company->favored_providers);
		if ($this->company->get('unfavored_providers') != null)
			$this->unfv_providers = explode(', ', $this->company->unfavored_providers);


		if ($this->company->get('tags') != null)
			$this->tags = json_decode($this->company->tags, true);
		else
			$this->tags = [];


		if ($this->company->company_service_end_date)
			$this->company->company_service_end_date = Carbon::parse($this->company->company_service_end_date)->format('m/d/Y');
		if ($this->company->company_service_start_date)
			$this->company->company_service_start_date = Carbon::parse($this->company->company_service_start_date)->format('m/d/Y');

		$this->dispatchBrowserEvent('refreshSelects');
	}
	public function mount(Company $company)
	{

		$this->setupValues = SetupHelper::loadSetupValues($this->setupValues);
		$this->company = $company;
		$this->showHours = false;
		$this->showAddress = false;
		$this->companyUsers = [];
		$this->allTags = Tag::pluck('name')->toArray();

		$this->providers = User::query()
			->where('status', 1)
			->whereHas('roles', function ($query) {
				$query->where('role_id', 2);
			})
			->select('id', 'name')
			->get()->toArray();

		if (request()->companyID != null) {	//edit
			$company = Company::where('id', request()->companyID)->with(['phones', 'user', 'addresses'])->first();
			$this->edit($company);
		}
	}
	public function updateVal($attrName, $val)
	{
		if ($attrName == "admins") {
			$this->admins = $val;
		} elseif ($attrName == "company_timezone") {
			$this->company['company_timezone'] = $val;
		} elseif ($attrName == "favored_providers") {
			$this->fv_providers = $val;
		} elseif ($attrName == "unfavored_providers") {
			$this->unfv_providers = $val;
		} elseif ($attrName == 'tags') {
			$this->tags = explode(',', $val);
			$this->allTags = array_unique(array_merge($this->allTags, $this->tags));
			$this->allTags = array_values($this->allTags);
		} elseif ($attrName == "company_service_end_date") {
			$this->company['company_service_end_date'] = $val;
		} elseif ($attrName == "company_service_start_date") {
			$this->company['company_service_start_date'] = $val;
		} else {
			$this->company[$attrName . '_id'] = $val;
		}
	}
	public function updateAddressType($type)
	{
		$this->emit('updateAddressType', $type);
	}
	public function switch($component)
	{
		$this->component = $component;
	}

	//front function

	public function addPhone($title = '', $number = '')
	{

		$this->phoneNumbers[] = ['phone_title' => $title, 'phone_number' => $number];
	}
	public function removePhone($index)
	{
		if (key_exists('id', $this->phoneNumbers[$index])) {
			Phone::destroy($this->phoneNumbers[$index]['id']);
		}

		unset($this->phoneNumbers[$index]);
		$this->phoneNumbers = array_values($this->phoneNumbers);
	}

	public function addAddress($addressArr)
	{

		if (isset($addressArr['index'])) { //update existing
			$this->userAddresses[$addressArr['index']] = $addressArr;
		} else
			$this->userAddresses[] = $addressArr;
	}

	public function rules()
	{
		return [
			'company.name' => [
				'required',
				'string',
				'max:255',
				Rule::unique('companies', 'name')->ignore($this->company->id)
			],
			'company.industry_id' => 'required',
			'company.company_website' => 'nullable|url',
			'company.language_id' => 'nullable',
			'company.company_service_start_date' => 'nullable|date_format:m/d/Y',
			'company.company_service_end_date' => 'nullable|date_format:m/d/Y',
			'image' => 'nullable|image|mimes:jpg,png,jpeg',

		];
	}

	public function save($redirect = 1)
	{
		$this->validate();
		$this->company->added_by = Auth::id();

		if ($this->image != null) {
			$fileService = new UploadFileService();
			$this->company->company_logo = $fileService->saveFile('profile_pic', $this->image, $this->company->company_logo);
		}

		$companyService = new CompanyService;
		$this->company->unfavored_providers = implode(', ', $this->unfv_providers);
		$this->company->favored_providers = implode(', ', $this->fv_providers);
		$this->company->tags = json_encode($this->tags);
		if ($this->company->company_service_start_date)
			$this->company->company_service_start_date = Carbon::parse($this->company->company_service_start_date);
		if ($this->company->company_service_end_date)
			$this->company->company_service_end_date = Carbon::parse($this->company->company_service_end_date);

		$this->updateTags();

		$this->company = $companyService->createCompany($this->company, $this->phoneNumbers, $this->userAddresses);
		if (count($this->admins))
			foreach ($this->admins as $admin_id) {
				RoleUser::updateOrCreate(['user_id' => $admin_id, 'role_id' => 10]);
			}

		$this->step = 2;
		$this->dispatchBrowserEvent('refreshSelects');

		//dd($this->company);
		if ($redirect) {
			$this->showList("Company has been saved successfully");
			$this->company = new Company;
		} else {
			$this->getCompanySchedule();


			if ($this->company->company_service_end_date)
				$this->company->company_service_end_date = Carbon::parse($this->company->company_service_end_date)->format('m/d/Y');
			if ($this->company->company_service_start_date)
				$this->company->company_service_start_date = Carbon::parse($this->company->company_service_start_date)->format('m/d/Y');

			$this->setStep(2, 'scheduleActive', 'schedule');
		}
	}

	public function updateTags()
	{
		foreach ($this->allTags as $tag) {
			Tag::firstOrCreate(['name' => $tag]);
		}
	}


	public function stepIncremented()
	{

		$this->step = $this->step + 1;
		if ($this->step == 3) {
			$this->driveActive = 'active';
			$this->serviceActive = '';
		}
	}

	public function getCompanySchedule()
	{
		//reinit schedule
		$companySchedule = Schedule::where('model_id', $this->company->id)->where('model_type', 2)->get()->first();
		if (!is_null($companySchedule)) {
			$this->schedule = $companySchedule;
		} else {
			$this->schedule = new Schedule;
			$this->schedule->model_type = 2;
			$this->schedule->working_days = json_encode([]);
			$this->schedule->timezone_id = 0;

			$this->schedule->model_id = $this->company->id;
			$this->schedule->save();
		}

		// $this->scheduleActive="active";

		// $this->switch('schedule');

		$this->emit('getRecord', $this->schedule->id, true);
	}

	public function saveSchedule($redirect = 1)
	{
		$this->emit('saveSchedule');
		if ($redirect) {
			$this->showList("Company has been saved successfully");
			$this->company = new Company;
			$this->schedule = new Schedule;
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
			$this->showList("Company has been saved successfully");
			$this->company = new Company;
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
		$tabs = ['serviceActive', 'driveActive', 'scheduleActive', 'companyActive'];
		foreach ($tabs as $key)
			$this->$key = '';
		$this->step = $step;
		$this->$tabName = "active";
		$this->switch($component);

		// loading schedule on back button
		if ($this->step == 2)
			$this->getCompanySchedule();

		$this->dispatchBrowserEvent('refreshSelects');
	}


	public function deleteAddress($index)
	{
		if (key_exists('id', $this->userAddresses[$index])) {
			AddressService::deleteAddress($this->userAddresses[$index]['id']);
		}

		unset($this->userAddresses[$index]);
		$this->userAddresses = array_values($this->userAddresses);
	}

	public function editAddress($index, $type)
	{
		$this->userAddresses[$index]['index'] = $index;	//passing ref index
		$this->emit('updateAddressType', $type, $this->userAddresses[$index]);
	}
}

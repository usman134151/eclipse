<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use App\Models\Tenant\Tag;
use Illuminate\Support\Facades\Auth;
use App\Services\App\UserService;
use App\Services\App\AddressService;
use App\Services\App\UploadFileService;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;


use Carbon\Carbon;


class CustomerForm extends Component
{
	use withFileUploads;
	public $isCustomer = false, $selfProfile = false;		// true when component called from customer panel	
	public $user, $isAdd = true, $userAddresses = [], $image = null, $label = 'Add', $tags = [], $file=null;
	public $userdetail = [
		'industry' => null, 'phone' => null, 'gender_id' => null, 'language_id' => null, 'timezone_id' => null, 'ethnicity_id' => null,
		'user_introduction' => null, 'title' => null, 'user_position' => null, 'profile_pic' => null, 'address_line1' =>
		'', 'address_line2' => '', 'city' => '', 'state' => '', 'country' => '', 'user_introduction'=>'','user_introduction_file'=>null
	];
	public $providers = [], $allUserSchedules = [], $unfavored_providers = [], $favored_providers = [];
	public $user_configuration = ['hide_from_providers' => "false", 'grant_access_to_schedule' => "false", 'hide_billing' => "false", 'require_approval' => "false", 'have_access_to' => []];
	public $rolesArr = [], $same_sv, $same_bm;
	public $component = 'customer-info';
	public $setupValues = [
		'companies' => ['parameters' => ['Company', 'id', 'name', '', '', 'name', false, 'user.company_name', '', 'user.company_name', 1]],
		'languages' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 1, 'setup_value_label', false, 'userdetail.language_id', '', 'language_id', 4]],
		'ethnicities' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 3, 'setup_value_label', false, 'userdetail.ethnicity_id', '', 'ethnicity_id', 2]],
		'gender' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 2, 'setup_value_label', false, 'userdetail.gender_id', '', 'gender_id', 3]],
		'timezones' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 4, 'setup_value_label', false, 'userdetail.timezone_id', '', 'timezone_id', 4]],
		'countries' => ['parameters' => ['Country', 'name', 'name', '', '', 'name', false, 'userdetail.country', '', 'country', 4]],

	];
	public $driveActive, $serviceActive, $permissionActive, $customerActive;


	public $step = 1, $email_invitation = 1, $limit, $allTags = [];
	protected $listeners = [
		'updateVal' => 'updateVal', 'stepIncremented', 'updateSelectedIndustries' => 'selectIndustries',
		'updateSelectedDepartments' => 'selectDepartments', 'updateSelectedSupervisors', 'updateSelectedBManagers', 'updateSelectedSupervising', 'updateSelectedUsersToManager',
		'updateSelectedStaff', 'updateAddress' => 'addAddress'
	];
	public $serviceConsumer = false;

	//modals variables
	public $selectedIndustries = [],  $selectedDepartments = [], $svDepartments = [], $industryNames = [], $departmentNames = [], $selectedSupervisors = [],
		$defaultSupervisor, $selectedSupervising = [], $supervisingNames = [], $selectedBManagers = [], $defaultBManager, $selectedUsersToManage = [], $selectedAdminStaff = [];

	public $supervisorNames = [], $sv_limit, $bManagerNames = [], $bm_limit, $managerNames = [], $m_limit, $adminStaffNames = [], $s_limit;
	//end of modals variables



	public function render()
	{
		//null check to avoid break
		if (!is_array($this->tags))
			$this->tags = [];

		return view('livewire.app.common.forms.customer-form');
	}
	public function mount(User $user)
	{




		$this->setupValues = SetupHelper::loadSetupValues($this->setupValues);
		$this->user = $user;
		$this->providers = User::query()
			->where('status', 1)
			->whereHas('roles', function ($query) {
				$query->where('role_id', 2);
			})
			->select('id', 'name')
			->get();
		$this->allTags = Tag::pluck('name')->toArray();
		$this->tags = [];

		if (request()->customerID != null) {

			$customer_id = request()->customerID;
			$user = User::with(['userdetail', 'industries', 'company', 'addresses'])->find($customer_id);
			$this->emit('updateCompany', $this->user->company_name);

			$this->edit($user);
			$this->emit('editRecord', $user);

			// $this->switch(request()->step);/



		}
		//edit from customer panel
		if ($this->isCustomer) {
			if ($user->id)
				$this->edit($user);
			else	//create
			{
				$this->user->company_name = Auth::user()->company_name;
				$admin_user = User::find(Auth::id());	//set default values same as current logged in user
				$this->industryNames = $admin_user->industries->pluck('name');
				$this->departmentNames = $admin_user->supervised_departments->pluck('name');
				$this->selectedDepartments = $admin_user->supervised_departments->pluck('id');
				$this->selectedIndustries = $admin_user->industries->pluck('id');
			}
		}
	}

	public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}

	public function switch($component, $step = 0, $check = false)
	{

		if ($step != 0) {
			if ($check == false || ($check == true && !is_null($this->user->email)))
				$this->step = $step;
		}
		$this->component = $component;
	}

	public function setServiceConsumer(){
		$this->serviceConsumer = !$this->serviceConsumer;
	}
	public function permissionConfiguration($redirect = 1)
	{
		$rules = ['file' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv'];
		$this->validate($rules);
		// dd($this->selectedSupervisors);
		$userService = new UserService;
		$userService->storeCustomerRoles($this->rolesArr, $this->user->id);
		$userService->storeUserRolesDetails($this->user->id, $this->selectedSupervisors, 5, 1, $this->defaultSupervisor);
		$userService->storeUserRolesDetails($this->user->id, $this->selectedSupervising, 5, 0);
		$userService->storeUserRolesDetails($this->user->id, $this->selectedBManagers, 9, 1, $this->defaultBManager);
		$userService->storeUserRolesDetails($this->user->id, $this->selectedUsersToManage, 9, 0);
		$userService->storeUserRolesDetails($this->user->id, $this->selectedAdminStaff, 3, 1);


		$userDet = $this->user->userdetail;
		$userDet['unfavored_users'] = implode(', ', $this->unfavored_providers);
		$userDet['favored_users'] = implode(', ', $this->favored_providers);
		$userDet['user_configuration'] = json_encode($this->user_configuration);
		if($this->serviceConsumer){
		$userDet['user_introduction'] = $this->userdetail['user_introduction'];

		if ($this->file != null) {
			$fileService = new UploadFileService();
			$userDet['user_introduction_file'] = $fileService->saveFile('files', $this->file, $this->userdetail['user_introduction_file']);
				$this->userdetail['user_introduction_file'] = $userDet['user_introduction_file'];
		}}else{
			$userDet['user_introduction']=null;
			$userDet['user_introduction_file']=null;
		}


		$userDet->save();


		if ($redirect) {
			if ($this->isCustomer) {	//return to team members page 
				return redirect('/customer/team-members');
			}

			$this->showList("Customer has been saved successfully");
			$this->user = new User;
		}
		$this->step = 3;
		$this->switch('service-catalog');
	}
	public function addServices()
	{
		$this->step = 4;

		$this->switch('drive-documents');
	}

	public function edit(User $user)
	{

		$this->user = $user;
		//    if(is_array($user['userdetail']))
		//    	$this->userdetail=$user['userdetail'];

		if ($user->userdetail != null && $user->userdetail->exists())
			$this->userdetail = $user->userdetail->toArray();

		if ($this->user->userdetail->get('user_configuration') != null)
			$this->user_configuration = json_decode($this->userdetail['user_configuration'], true);
		if ($this->user->userdetail->get('tags') != null)
			$this->tags = json_decode($this->userdetail['tags'], true);
		else
			$this->tags = [];

		$this->label = "Edit";
		$this->user = $user;
		$this->isAdd = false;
		if ($this->user->user_dob)
			$this->user->user_dob = Carbon::parse($this->user->user_dob)->format('m/d/Y');

		$this->industryNames = $this->user->industries->pluck('name');
		$this->departmentNames = $this->user->departments->pluck('name');
		$this->selectedDepartments = $this->user->departments->pluck('id');
		$this->selectedIndustries = $this->user->industries->pluck('id');



		if (count($user->addresses)) {
			//dd($company->phones);
			$this->userAddresses = [];
			foreach ($user->addresses as $address) {
				$this->userAddresses[] = $address->toArray();
			}
		}
		// dd($this->userdetail);
		if (!is_null($this->user->company_name)) {
			$this->emit('updateCompany', $this->user->company_name);
		}



		$this->dispatchBrowserEvent('refreshSelects');
	}

	// TO-DO:
	// if user's company is changed
	// all its records will be changed
	// departments, roles, roles_details (choosen from modals),user_configuration

	// remove self-customer from lists?

	public function updateVal($attrName, $val)
	{
		if ($this->step == 1) {
			if ($attrName == 'user_dob') {
				$this->user['user_dob'] = $val;
			} elseif ($attrName == "user.company_name") {

				$this->user['company_name'] = $val;
				// Emit an event with data
				$this->emit('updateCompany', $val);
				$this->departmentNames = [];
			} else {
				$this->userdetail[$attrName] = $val;
			}
			if ($attrName == 'tags') {
				$this->tags = explode(',', $val);
				$this->allTags = array_unique(array_merge($this->allTags, $this->tags));
				$this->allTags = array_values($this->allTags);
			}
		} else if ($attrName == "have_access_to")
			$this->user_configuration['have_access_to'] = $val;
		else
			$this->$attrName = $val;
	}

	public function rules()
	{
		return [
			'user.company_name' => [
				'required'
			],
			'user.first_name' => [
				'required',
				'string',
				'max:255'
			],
			'user.last_name' => [
				'required',
				'string',
				'max:255'
			],
			'user.email' => [
				'required',
				'email',
				'max:255',
				Rule::unique('users', 'email')->ignore($this->user->id)
			],
			'user.user_dob' => [
				'nullable',
				'date', 'date_format:m/d/Y',
				'before:today'
			],
			'userdetail.user_position' => [
				'nullable',
				'string',
				'max:255'
			],
			'userdetail.title' => [
				'nullable',
				'string',
				'max:255'
			],
			'userdetail.ethnicity_id' => [
				'nullable'
			],
			'userdetail.language_id' => [
				'nullable'
			],
			'userdetail.timezone_id' => [
				'nullable'
			],
			'userdetail.gender_id' => [
				'nullable'
			],
			'userdetail.phone' => [
				'nullable', 'max:150'
			],
			'userdetail.state' => ['nullable', 'max:150'],
			'userdetail.city' => ['nullable', 'max:150'],
			'userdetail.zip' => ['nullable', 'max:150'],
			'image' => 'nullable|image|mimes:jpg,png,jpeg',
			'selectedIndustries' => 'required',
			



		];
	}


	public function save($redirect = 1)
	{


		$this->validate();
		if ($this->user->user_dob) {
			$this->user->user_dob = Carbon::parse($this->user->user_dob);
			// Carbon::createFromFormat('d/m/Y', $this->user->user_dob)->format('Y-m-d');
		}

		$this->user->name = $this->user->first_name . ' ' . $this->user->last_name;
		$this->user->added_by = Auth::id();
		$this->user->status = 1;

		$this->userdetail['user_configuration'] = json_encode($this->user_configuration);
		$this->userdetail['tags'] = json_encode($this->tags);
		$this->updateTags();


		if ($this->image != null) {
			$fileService = new UploadFileService();
			$this->userdetail['profile_pic'] = $fileService->saveFile('profile_pic', $this->image, $this->userdetail['profile_pic']);
		}
		$userService = new UserService;

		$this->user = $userService->createUser($this->user, $this->userdetail, 4, $this->email_invitation, $this->selectedIndustries, $this->isAdd);

		$this->user->departments()->sync($this->selectedDepartments);
		if ($this->step == 1) {

			$addressService = new AddressService();
			$addressService->saveAddresses($this->user->id, 1, $this->userAddresses);
		}

		if ($redirect) {
			if ($this->isCustomer && $this->selfProfile) { //for customer panel

				if ($this->user->user_dob)
					$this->user->user_dob = Carbon::parse($this->user->user_dob)->format('m/d/Y');
				$this->emit('showConfirmation', 'Profile updated successfully');
			} elseif ($this->isCustomer) {	//return to team members page 
				return redirect('/customer/team-members');
			} else {

				$this->showList("Customer has been saved successfully");
				$this->user = new User;
			}
		} else {

			$this->setStep(2, 'permissionActive', 'permission-configurations');
		}
	}

	public function setPermissions()
	{
		if (!is_null($this->user->company_name)) {
			$this->emit('updateCompany', $this->user->company_name);
		}

		$company_id = $this->user->company_name;
		$this->allUserSchedules = User::query()
			->where(['users.status' => 1])
			->where('users.id', '<>', $this->user->id)
			->whereHas('roles', function ($query) {
				$query->where('role_id', '>', 4);
			})
			->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
			->leftJoin('companies', 'companies.id', '=', 'users.company_name')
			->where('companies.id', '=', $company_id)
			->select('users.id', 'users.name', 'phone')
			->get();

		if ($this->user->userdetail->get('favored_users') != null)
			$this->favored_providers = explode(', ', $this->user->userdetail['favored_users']);
		if ($this->user->userdetail->get('unfavored_users') != null)
			$this->unfavored_providers = explode(', ', $this->user->userdetail['unfavored_users']);
		if ($this->user->userdetail->get('user_configuration') != null)
			$this->user_configuration = json_decode($this->user->userdetail->user_configuration, true);
		
			$userService = new UserService;

		$this->rolesArr = $userService->getCustomerRoles($this->user->id);
		$this->serviceConsumer = in_array(7,array_keys($this->rolesArr));
		// set modal values for step 2
		$this->emit('setValues', $this->user->id);
	}

	public function updateTags()
	{
		foreach ($this->allTags as $tag) {
			Tag::firstOrCreate(['name' => $tag]);
		}
	}


	public function serviceCatelog($redirect = 1)
	{

		if ($redirect) {
			if ($this->isCustomer) {
				return redirect('/customer/team-members');
			} else {
				$this->showList("Company has been saved successfully");
				$this->user = new User;
			}
		} else {
			$this->serviceActive = "";
			$this->permissionActive = "";
			$this->driveActive = "active";
			$this->switch('drive-documents');
			$this->step = 4;
		}
	}

	public function setStep($step, $tabName, $component)
	{
		$tabs = ['serviceActive', 'driveActive', 'permissionActive', 'customerActive'];
		foreach ($tabs as $key)
			$this->$key = '';
		
		if ($this->step == 2) // check if existing step was 2 then save permissions
			$this->permissionConfiguration(0);

		$this->step = $step;
		$this->$tabName = "active";
		$this->switch($component);
		if ($this->step == 1) {
			if ($this->user->user_dob)
				$this->user->user_dob = Carbon::parse($this->user->user_dob)->format('m/d/Y');
		}
		if ($this->step == 2)
			$this->setPermissions();

		$this->dispatchBrowserEvent('refreshSelects');
	}


	public function selectSameSupervisor()
	{
		$this->emit('selectSelfSupervisor', $this->same_sv);
	}
	public function selectSameBManager()
	{
		$this->emit('selectSelfManager', $this->same_bm);
	}

	public function stepIncremented()
	{

		$this->step = $this->step + 1;
		if ($this->step == 3) {
			$this->driveActive = 'active';
			$this->serviceActive = '';
		}
	}

	//modal functions

	public function selectIndustries($selectedIndustries, $defaultIndustry, $industryNames)
	{

		$this->selectedIndustries = $selectedIndustries;
		$this->industryNames = $industryNames;
		$this->userdetail['industry'] = $defaultIndustry;
	}

	public function selectDepartments($selectedDepartments, $defaultDepartment, $departmentNames)
	{
		$this->selectedDepartments = $selectedDepartments;
		$this->userdetail['department'] = $defaultDepartment;
		// $this->userdetail['supervisor'] = implode(', ', $svDepartments);
		$this->departmentNames = $departmentNames;
	}

	public function updateSelectedSupervisors($selectedSupervisors, $default)
	{
		$this->selectedSupervisors = $selectedSupervisors;
		$this->defaultSupervisor = $default;

		$this->supervisorNames = [];
		foreach ($selectedSupervisors as $us) {
			$this->supervisorNames[] = User::where('id', $us)->with('userdetail')->first()->toArray();
		}
		if (count($this->supervisorNames) >= 4)
			$this->sv_limit = 3;
		else
			$this->sv_limit = count($this->supervisorNames) - 1;

		// if (in_array($this->user->id, $this->selectedSupervisors)) //setting checkbox
		// 	$this->same_sv = true;
		// else
		// 	$this->same_sv = false;
	}
	public function updateSelectedSupervising($selectedSupervising)
	{
		$this->supervisingNames = [];
		$this->selectedSupervising = $selectedSupervising;
		$this->supervisingNames = [];
		foreach ($selectedSupervising as $us) {
			$this->supervisingNames[] = User::where('id', $us)->with('userdetail')->first()->toArray();
		}
		if (count($this->supervisingNames) >= 4)
			$this->limit = 3;
		else
			$this->limit = count($this->supervisingNames) - 1;
	}
	public function updateSelectedBManagers($selectedBManagers, $default)
	{
		$this->selectedBManagers = $selectedBManagers;
		$this->defaultBManager = $default;

		$this->bManagerNames = [];
		foreach ($selectedBManagers as $us) {
			$this->bManagerNames[] = User::where('id', $us)->with('userdetail')->first()->toArray();
		}
		if (count($this->bManagerNames) >= 4)
			$this->bm_limit = 3;
		else
			$this->bm_limit = count($this->bManagerNames) - 1;
		// if (in_array($this->user->id, $this->selectedBManagers)) //setting checkbox
		// 	$this->same_bm = true; 
		// else
		// 	$this->same_bm = false;

	}

	public function updateSelectedUsersToManager($selectedUsersToManage)
	{
		$this->selectedUsersToManage = $selectedUsersToManage;

		$this->managerNames = [];
		foreach ($selectedUsersToManage as $us) {
			$this->managerNames[] = User::where('id', $us)->with('userdetail')->first()->toArray();
		}
		if (count($this->managerNames) >= 4)
			$this->m_limit = 3;
		else
			$this->m_limit = count($this->managerNames) - 1;
	}
	public function updateSelectedStaff($selectedStaff)
	{
		$this->selectedAdminStaff = $selectedStaff;
		$this->adminStaffNames = [];
		foreach ($selectedStaff as $us) {
			$this->adminStaffNames[] = User::where('id', $us['id'])->with('userdetail')->first()->toArray();;
		}
		if (count($this->adminStaffNames) >= 4)
			$this->s_limit = 3;
		else
			$this->s_limit = count($this->adminStaffNames) - 1;
	}

	public function updateAddressType($type)
	{
		$this->emit('updateAddressType', $type);
	}

	public function addAddress($addressArr)
	{

		if (isset($addressArr['index'])) { //update existing
			$this->userAddresses[$addressArr['index']] = $addressArr;
		} else
			$this->userAddresses[] = $addressArr;
	}

	public function back($component)
	{
		$this->step--;
		$this->switch($component);
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

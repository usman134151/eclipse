<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use App\Services\App\UserService;
use App\Services\App\AddressService;
use Illuminate\Validation\Rule;
use Carbon\Carbon;


class CustomerForm extends Component
{
    public $user,$isAdd=true,$userAddresses=[];
    public $userdetail=['industry'=>null, 'phone' => null, 'gender_id' => null, 'language_id' => null, 'timezone_id' => null, 'ethnicity_id' => null,
	'user_introduction'=>null, 'title' => null, 'user_position' => null];
    public $providers=[], $allUserSchedules=[],$unfavored_providers=[],$favored_providers=[];
	public $user_configuration= ['hide_from_providers'=>"false",'grant_access_to_schedule'=> "false", 'hide_billing'=>"false", 'require_approval'=>"false", 'have_access_to'=>[] ];    
	public $rolesArr=[],$same_sv,$same_bm;
	public $component = 'customer-info';
    public $setupValues = [
        'companies'=>['parameters'=>['Company', 'id', 'name', '', '', 'name', false, 'user.company_name','','user.company_name',1]],
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'userdetail.language_id', '','language_id',4]],
        'ethnicities' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 3, 'setup_value_label', false,'userdetail.ethnicity_id','','ethnicity_id',2]],
        'gender' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 2, 'setup_value_label', false,'userdetail.gender_id','','gender_id',3]],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'userdetail.timezone_id','','timezone_id',4]],
		'countries' => ['parameters' => ['Country', 'id', 'name', '', '', 'name', false, 'userdetail.country_id','','country',4]],

	];
	
    public $step = 1,$email_invitation,$limit;
    protected $listeners = ['updateVal' => 'updateVal','editRecord' => 'edit', 'stepIncremented', 'updateSelectedIndustries' => 'selectIndustries',
		'updateSelectedDepartments' => 'selectDepartments', 'updateSelectedSupervisors', 'updateSelectedBManagers','updateSelectedSupervising', 'updateSelectedUsersToManager',
		'updateSelectedStaff','updateAddress' => 'addAddress'];
	public $serviceConsumer=false;

	//modals variables
	public $selectedIndustries=[],  $selectedDepartments = [], $svDepartments=[],$industryNames=[], $departmentNames=[],$selectedSupervisors=[],
		$defaultSupervisor, $selectedSupervising=[],$supervisingNames=[], $selectedBManagers=[], $defaultBManager,$selectedUsersToManage,$selectedAdminStaff;
	
	//end of modals variables



	public function render()
	{   //dd($this->user->company_name);
		return view('livewire.app.common.forms.customer-form');
	}
    public function mount(User $user){

		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->user=$user;
		$this->providers = User::query()
			->where('status', 1)
			->whereHas('roles', function ($query) {
				$query->where('role_id', 2);
			})
			->select('id', 'name')
			->get();


	}

	public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}

	public function switch($component,$step=0,$check=false)
	{
		
		if($step!=0){
			if($check==false || ($check==true && !is_null($this->user->email)))
			   $this->step=$step;
		}
		$this->component = $component;

	}

    public function permissionConfiguration($redirect=1){

		// dd($this->selectedSupervisors);
		$userService = new UserService;
		$userService->storeCustomerRoles($this->rolesArr,$this->user->id);
		$userService->storeUserRolesDetails($this->user->id,$this->selectedSupervisors,5,1,$this->defaultSupervisor);
		$userService->storeUserRolesDetails($this->user->id, $this->selectedSupervising, 5, 0);
		$userService->storeUserRolesDetails($this->user->id, $this->selectedBManagers, 9, 1, $this->defaultBManager);
		$userService->storeUserRolesDetails($this->user->id, $this->selectedUsersToManage, 9, 0);
		$userService->storeUserRolesDetails($this->user->id, $this->selectedAdminStaff, 3, 1);


		$userDet = $this->user->userdetail;
		$userDet['unfavored_users'] = implode(', ', $this->unfavored_providers);
		$userDet['favored_users'] = implode(', ', $this->favored_providers);
		$userDet['user_configuration'] = json_encode($this->user_configuration);
		$userDet->save();


		if ($redirect) {

			$this->showList("Customer has been saved successfully");
			$this->user = new User;
		}
        $this->step =3;
		$this->switch('service-catalog');
    }
    public function addServices(){
        $this->step = 4;
		
		$this->switch('drive-documents');
    }

    public function edit(User $user){
		
	   $this->user=$user;
		//    if(is_array($user['userdetail']))
		//    	$this->userdetail=$user['userdetail'];
		if($user->userdetail->exists())
		$this->userdetail = $user->userdetail->toArray();
		if ($this->user->userdetail->get('user_configuration') != null)
		 $this->user_configuration = json_decode($this->userdetail['user_configuration'],true);
		
       $this->label="Edit";
       $this->user=$user;
	   $this->isAdd=false;
	   if($this->user->user_dob)
		$this->user->user_dob = Carbon::createFromFormat('Y-m-d', $this->user->user_dob)->format('d/m/Y');

		$this->industryNames = $this->user->industries->pluck('name');
		$this->departmentNames = $this->user->departments->pluck('name');
		if(count($user->addresses)){
			//dd($company->phones);
			$this->userAddresses=[];
			foreach($user->addresses as $address){
				$this->userAddresses[]=$address->toArray();
			}
		
		}	
		// dd($this->userdetail);
		if (!is_null($this->user->company_name)) {
			$this->emit('updateCompany', $this->user->company_name);
		}
     
    }

	// TO-DO:
	// if user's company is changed
	// all its records will be changed
	// departments, roles, roles_details (choosen from modals),user_configuration
	
	// remove self-customer from lists?

	public function updateVal($attrName, $val)
	{  
		if($this->step == 1){
			if($attrName=='user_dob'){
            	$this->user['user_dob']=$val;
				
        	}
		   elseif($attrName=="user.company_name"){
			
			$this->user['company_name'] = $val;
			// Emit an event with data
			$this->emit('updateCompany', $val);
			$this->departmentNames=[];
			
		   }
		   else{
			$this->userdetail[$attrName] = $val;
		   }
		}
		else if($attrName == "have_access_to")
				$this->user_configuration['have_access_to'] =$val;
		else
			$this->$attrName = $val;

	}

	public function rules()
	{
		return [
            'user.company_name' => [
				'required'],
			'user.first_name' => [
				'required',
				'string',
				'max:255'],
            'user.last_name' => [
                'required',
                'string',
                'max:255'],
            'user.email' => [
                'required',
                'email',
                'max:255',
				Rule::unique('users', 'email')->ignore($this->user->id)],    
            'user.user_dob' => [
                    'nullable',
                    'date',
                    'before:today'],                        
            'userdetail.user_position' => [
                    'nullable',
                    'string',
                    'max:255'],  
            'userdetail.title' => [
                'nullable',
                'string',
                'max:255'],            
            'userdetail.ethnicity_id' => [
                'nullable'],  
            'userdetail.language_id' => [
                'nullable'],  
            'userdetail.timezone_id' => [
                'nullable'],  
            'userdetail.gender_id' => [
                'nullable'],
			'userdetail.phone' => [
					'nullable']   	                              
			
		];
	}


	public function save($redirect=1){
		
		$this->validate();
		if ($this->user->user_dob) {
			$this->user->user_dob = Carbon::createFromFormat('d/m/Y', $this->user->user_dob)->format('Y-m-d');
		}

        $this->user->name=$this->user->first_name.' '.$this->user->last_name;
		$this->user->added_by = Auth::id();
		$this->user->status=1;

		$this->userdetail['user_configuration']= json_encode($this->user_configuration);
		$userService = new UserService;
      
        $this->user = $userService->createUser($this->user,$this->userdetail,4,$this->email_invitation,$this->selectedIndustries,$this->isAdd);

		$this->user->departments()->sync($this->selectedDepartments);
		if($this->step==1){
			$userService->saveAddresses($this->user,$this->userAddresses);
		}
		if ($redirect) {

			$this->showList("Customer has been saved successfully");
			$this->user = new User;
		}
		else{
		$this->step=2;
		$this->serviceActive="active";
		
			if (!is_null($this->user->company_name)){
				$this->emit('updateCompany', $this->user->company_name);
			}

			$company_id = $this->user->company_name;
			$this->allUserSchedules = User::query()
				->where(['users.status' => 1])
				->where('users.id','<>',$this->user->id)
				->whereHas('roles', function ($query) {
					$query->where('role_id', '>', 4);
				})
				->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
				->leftJoin('companies', 'companies.id', '=', 'users.company_name')
				->where('companies.id', '=', $company_id)
				->select('users.id', 'users.name', 'phone')
				->get();
			
			if($this->user->userdetail->get('favored_users')!=null)
				$this->favored_providers = explode(', ', $this->user->userdetail['favored_users']);
			if ($this->user->userdetail->get('unfavored_users')!=null)
				$this->unfavored_providers = explode(', ', $this->user->userdetail['unfavored_users']);
			if ($this->user->userdetail->get('user_configuration') != null)
				$this->user_configuration = json_decode($this->user->userdetail->user_configuration,true);

			$this->rolesArr = $userService->getCustomerRoles($this->user->id);
			// set modal values for step 2
			$this->emit('setValues', $this->user->id);

			$this->dispatchBrowserEvent('refreshSelects');
			

			
		}
		
		
	}

	public function selectSameSupervisor(){
			$this->emit('selectSelfSupervisor',$this->same_sv);
	}
	public function selectSameBManager()
	{
		$this->emit('selectSelfManager', $this->same_bm);
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

	//modal functions

	public function selectIndustries($selectedIndustries, $defaultIndustry,$industryNames)
	{

		$this->selectedIndustries=$selectedIndustries;
		$this->industryNames = $industryNames;
    	$this->userdetail['industry'] = $defaultIndustry;
		

	}
	public function selectDepartments($selectedDepartments, $defaultDepartment,$departmentNames)
	{
		$this->selectedDepartments = $selectedDepartments;
		$this->userdetail['department'] = $defaultDepartment;
		// $this->userdetail['supervisor'] = implode(', ', $svDepartments);
		$this->departmentNames = $departmentNames;
	}

	public function updateSelectedSupervisors($selectedSupervisors,$default)
	{
		$this->selectedSupervisors = $selectedSupervisors;
		$this->defaultSupervisor = $default;
		// if (in_array($this->user->id, $this->selectedSupervisors)) //setting checkbox
		// 	$this->same_sv = true;
		// else
		// 	$this->same_sv = false;
	}
	public function updateSelectedSupervising($selectedSupervising)
	{
		$this->supervisingNames=[];
		$this->selectedSupervising = $selectedSupervising;
		foreach($selectedSupervising as $us){
			$this->supervisingNames[] = User::find($us)->toArray();
		}
		if(count($this->supervisingNames)>=4)
			$this->limit = 4;
		else
			$this->limit= count($this->supervisingNames)-1;
	}
	public function updateSelectedBManagers($selectedBManagers, $default)
	{
		$this->selectedBManagers = $selectedBManagers;
		$this->defaultBManager = $default;
        // if (in_array($this->user->id, $this->selectedBManagers)) //setting checkbox
		// 	$this->same_bm = true; 
		// else
		// 	$this->same_bm = false;

	}

	public function updateSelectedUsersToManager($selectedUsersToManage)
	{
		$this->selectedUsersToManage = $selectedUsersToManage;
	}
	public function updateSelectedStaff($selectedStaff)
	{
		$this->selectedAdminStaff = $selectedStaff;
	}

	public function updateAddressType($type){
		$this->emit('updateAddressType',$type);
	}

	public function addAddress($addressArr){
		
		$this->userAddresses[]=$addressArr;
		
	} 

	public function back($component){
        $this->step--;
		$this->switch($component);
		
    
    }
	public function deleteAddress($index){
		if(key_exists('id',$this->userAddresses[$index])){
			AddressService::deleteAddress($this->userAddresses[$index]['id']);
			
		}
       
		unset($this->userAddresses[$index]);
        $this->userAddresses= array_values($this->userAddresses);
		
	}
}

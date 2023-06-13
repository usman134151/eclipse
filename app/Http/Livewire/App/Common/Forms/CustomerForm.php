<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use App\Services\App\UserService;
use Illuminate\Validation\Rule;
use Carbon\Carbon;


class CustomerForm extends Component
{
    public $user,$isAdd=true;
    public $userdetail=['industry'=>null, 'phone' => null, 'gender_id' => null, 'language_id' => null, 'timezone_id' => null, 'ethnicity_id' => null,
	'user_introduction'=>null, 'title' => null, 'user_position' => null];
    public $providers=[], $allUserSchedules=[],$unfavored_providers=[],$favored_providers=[];
	public $user_configuration= ['grant_access_to_schedule'=> "false", 'hide_billing'=>"false", 'require_approval'=>"false", 'have_access_to'=>[] ];    
	
	public $component = 'customer-info';
    public $setupValues = [
        'companies'=>['parameters'=>['Company', 'id', 'name', '', '', 'name', false, 'user.company_name','','user.company_name',1]],
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'userdetail.language_id', '','language_id',4]],
        'ethnicities' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 3, 'setup_value_label', false,'userdetail.ethnicity_id','','ethnicity_id',2]],
        'gender' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 2, 'setup_value_label', false,'userdetail.gender_id','','gender_id',3]],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'userdetail.timezone_id','','timezone_id',4]],

	];
	
    public $step = 1,$email_invitation;
    protected $listeners = ['updateVal' => 'updateVal','editRecord' => 'edit', 'stepIncremented', 'updateSelectedIndustries' => 'selectIndustries',
		'updateSelectedDepartments' => 'selectDepartments'];
	public $serviceConsumer=false;

	//modals variables
	public $selectedIndustries=[],  $selectedDepartments = [], $svDepartments=[],$industryNames=[], $departmentNames=[];
	
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

	public function switch($component,$step=0)
	{
		if($step!=0)
		  $this->step=$step;
		$this->component = $component;
	}

    public function permissionConfiguration($redirect=1){

		$userDet = $this->user->userdetail;
		$userDet['unfavored_users'] = implode(', ', $this->unfavored_providers);
		$userDet['favored_users'] = implode(', ', $this->favored_providers);
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
		
       $this->label="Edit";
       $this->user=$user;
	   $this->isAdd=false;
	   if($this->user->user_dob)
	   	$this->user->user_dob = Carbon::createFromFormat('Y-m-d', $this->user->user_dob)->format('d/m/Y');

		$this->industryNames = $this->user->industries->pluck('name');
		$this->departmentNames = $this->user->departments->pluck('name');

		// dd($this->userdetail);
		if (!is_null($this->user->company_name)) {
			$this->emit('updateCompany', $this->user->company_name);
		}
     
    }

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
		if($this->user->user_dob){
            $this->user->user_dob = Carbon::createFromFormat('d/m/Y', $this->user->user_dob)->format('Y-m-d');

        }
        $this->user->name=$this->user->first_name.' '.$this->user->last_name;
		$this->user->added_by = Auth::id();
		$this->user->status=1;
		$userService = new UserService;
      
        $this->user = $userService->createUser($this->user,$this->userdetail,4,$this->email_invitation,$this->selectedIndustries,$this->isAdd);

		$this->user->departments()->sync($this->selectedDepartments);
		if ($redirect) {

			$this->showList("Customer has been saved successfully");
			$this->user = new User;
		}
		else{
		$this->step=2;
		$this->serviceActive="active";
		$this->switch('permission-configurations');
		

		// setting values for next step
		if (!is_null($this->user->company_name)){
			$this->emit('updateCompany', $this->user->company_name);
		}

		$company_id = $this->user->company_name;
		$this->allUserSchedules = User::query()
			->where(['users.status' => 1])
			->whereHas('roles', function ($query) {
				$query->where('role_id','>=', 5);
			})
			->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
			->leftJoin('companies', function ($join) use ($company_id) {
				$join->where('companies.id', '=', $company_id);
				$join->where('companies.id', '=', 'users.company_name');
			})
			->select('users.id', 'users.name', 'phone')
			->get();
		
		if($this->user->userdetail->get('favored_users')!=null)
			$this->favored_providers = explode(',', $this->user->userdetail['favored_users']);
		if ($this->user->userdetail->get('unfavored_users')!=null)
			$this->unfavored_providers = explode(',', $this->user->userdetail['unfavored_users']);
		$this->dispatchBrowserEvent('refreshSelects');

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
}

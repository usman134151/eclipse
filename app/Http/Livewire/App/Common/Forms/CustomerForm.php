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
    public $userdetail=['industry','phone','gender_id','language_id','timezone_id','ethnicity_id','user_introduction','title','user_position'];
    
    
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
	public $selectedIndustries=[],  $selectedDepartments = [];
	
	//end of modals variables



	public function render()
	{   //dd($this->user->company_name);
		return view('livewire.app.common.forms.customer-form');
	}
    public function mount(User $user){
		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->user=$user;


	}

	public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}

	public function switch($component)
	{
		$this->component = $component;
	}

    public function permissionConfiguration(){
      //  dd($this->step);
        $this->step =3;
    }
    public function addServices(){
        $this->step = 4;
    }

    public function edit(User $user){
	   $this->user=$user;
	   $this->userdetail=$user['userdetail']->toArray();	
       $this->label="Edit";
       $this->user=$user;
	   $this->isAdd=false;
	   if($this->user->user_dob)
	   	$this->user->user_dob = Carbon::createFromFormat('Y-m-d', $this->user->user_dob)->format('d/m/Y');

     
    }

	public function updateVal($attrName, $val)
	{  
			if($attrName=='user_dob'){
            	$this->user['user_dob']=$val;
				
        	}
		   elseif($attrName=="user.company_name"){
			
			$this->user['company_name'] = $val;
			
		   }
		   else{
			$this->userdetail[$attrName] = $val;
		   }

           
		   
		  
		
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
		$this->step=2;
		$this->serviceActive="active";
		
		if($redirect){
			
			$this->showList("Customer has been saved successfully");
			$this->user = new User;
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

	public function selectIndustries($selectedIndustries, $defaultIndustry)
	{

		$this->selectedIndustries=[];
		foreach($selectedIndustries as $industryId=>$selected){
			if($selected)
			$this->selectedIndustries[]=$industryId;
		}
    	$this->userdetail['industry'] = $defaultIndustry;
		

	}
	public function selectDepartments($selectedDepartments, $defaultDepartment)
	{

		$this->selectedDepartments = [];
		foreach ($selectedDepartments as $departmentId => $selected) {
			if ($selected)
				$this->selectedDepartments[] = $departmentId;
		}
		$this->userdetail['department'] = $defaultDepartment;
	}
}

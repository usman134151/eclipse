<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Tenant\SystemRole;
use App\Services\App\UserService;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class ProviderForm extends Component
{
    public $user,$isAdd=true;
    public $ethnicity;
    public $timezone;
    public $gender;
    public $languages;

	public $component = 'profile';
    public $userdetail=['gender_id','country','timezone_id','ethnicity_id','title','address_line1','address_line2','zip','permission','city','state','phone','education','note','user_introduction','user_experience','certificate'];
    public $setupValues = [
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'userdetail.language_id', '','language_id',0]],
        'ethnicities' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 3, 'setup_value_label', false,'userdetail.ethnicity_id','','ethnicity_id',1]],
        'gender' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 2, 'setup_value_label', false,'userdetail.gender_id','','gender_id',2]],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'userdetail.timezone_id','','timezone_id',3]],
        'countries' => ['parameters' => ['Country', 'id', 'name', '', '', 'name', false, 'userdetail.country_id','','country',4]],
        'certifications' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 8, 'setup_value_label', true, 'userdetail.certification', '', 'certification', 5]],
        // 'favored_users' => ['parameters' => ['User', 'id', 'name', '', '1 OR exists (select * from `roles` inner join `role_user` on `roles`.`id` = `role_user`.`role_id` where `users`.`id` = `role_user`.`user_id` and `role_id` = 2', 'name', true, 'userdetail.favored_users', '', 'favored_users', 6]]
    ];

        // $providers = User::query()
		// ->where('status',1)
		// ->whereHas('roles', function ($query) {
		// 	$query->where('role_id',2);})
        // ->get();
    public $inpersons=[[
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'exclude_after_hours'=>'',
        'exclude_closed_hours'=>''

    ]];
    public $invirtuals=[[
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'exclude_after_hours'=>'',
        'exclude_closed_hours'=>''

    ]];
    public $phones=[[
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'exclude_after_hours'=>'',
        'exclude_closed_hours'=>''

    ]];
    public $teleconfrences=[[
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'exclude_after_hours'=>'',
        'exclude_closed_hours'=>''

    ]];
    public $scheduled_inpersons=[[
        'hours'=>'',
        'charges'=>'',
        'cancellations'=>'',
        'exclude-after-hours'=>'',
        'modification'=>'',
        'exclude_closed_hours'=>'',
        'rescheduling'=>'',
        'bill_service_minimum'=>'',
        'duration'=>'',

    ]];
    public $scheduled_virtules=[[
        'hours'=>'',
        'charges'=>'',
        'cancellations'=>'',
        'exclude-after-hours'=>'',
        'modification'=>'',
        'exclude_closed_hours'=>'',
        'rescheduling'=>'',
        'bill_service_minimum'=>'',
        'duration'=>'',

    ]];
    public $scheduled_phones=[[
        'hours'=>'',
        'charges'=>'',
        'cancellations'=>'',
        'exclude-after-hours'=>'',
        'modification'=>'',
        'exclude_closed_hours'=>'',
        'rescheduling'=>'',
        'bill_service_minimum'=>'',
        'duration'=>'',

    ]];
    public $scheduled_teleconfrences=[[
        'hours'=>'',
        'charges'=>'',
        'cancellations'=>'',
        'exclude-after-hours'=>'',
        'modification'=>'',
        'exclude_closed_hours'=>'',
        'rescheduling'=>'',
        'bill_service_minimum'=>'',
        'duration'=>'',

    ]];
    public $speclizations=[[
        'in_person'=>'',
        'virtual'=>'',
        'phone'=>'',
        'teleconference'=>'',
        'hide_from_customers'=>'',
        'hide_from_providers'=>"",
        'duration'=>''
    ]];
   public $step = 1,$email_invitation;
   protected $listeners = [
    'updateVal' => 'updateVal',
    'editRecord' => 'edit', 'stepIncremented',
        'updateSelectedTeams'
    ];
    public $providers;
    public $selectedTeams =[];
	public function render()
	{
        $roles = SystemRole::get();
		return view('livewire.app.common.forms.provider-form',[
            'roles' => $roles
        ]);
	}
    public function mount(User $user){
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->user=$user;

        // initialization 
        $this->userdetail['certification'] = [];
        $this->userdetail['favored_users'] = [];
        $this->userdetail['unfavored_users'] = [];

        $this->providers = User::query()
		->where('status',1)
		->whereHas('roles', function ($query) {
			$query->where('role_id',2);})
        ->select('id','name')
        ->get();

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
    public function rules()
	{
		return [
			'user.first_name' => [
				'required',
				'string',
				'max:255'],
            'user.last_name' => [
                'required',
                'string',
                'max:255'],
            'user.user_dob' => [
                'nullable',
                'date',
                'before:today'],
            'user.email' => [
                'required',
                'email',
                'max:255',
				Rule::unique('users', 'email')->ignore($this->user->id)],
            'userdetail.user_introduction' => [
                'nullable',
                'string',
                'max:255'],
            'userdetail.address_line1' => [
                'nullable',
                'string',
                'max:255'],
            'userdetail.address_line2' => [
                'nullable',
                'string',
                'max:255'],
            'userdetail.zip' => [
                'nullable',
                'string',
                'max:255'],
            'userdetail.city' => [
                'nullable',
                'string',
                'max:255'],
            'userdetail.state' => [
                'nullable',
                'string',
                'max:255'],
            'userdetail.title' => [
                'nullable',
                'string',
                'max:255'],
            'userdetail.education' => [
                'nullable',
                'string',
                'max:255'],
            'userdetail.note' => [
                'nullable',
                'string',
                'max:255'],
            'userdetail.phone' => [
                'nullable',
                'string',
                'max:255'],
            'userdetail.ethnicity_id' => [
                'nullable'],
            'userdetail.timezone_id' => [
                'nullable'],
            'userdetail.gender_id' => [
                'nullable'],
            'userdetail.country' => [
                'nullable'],

		];
	}
    public function ProvideService(){
        $this->step = 3;
    }
    public function save($redirect=1){
		$this->validate();
        if($this->user->user_dob){
            $this->user->user_dob = Carbon::createFromFormat('d/m/Y', $this->user->user_dob)->format('Y-m-d');

        }
        $this->user->name=$this->user->first_name.' '.$this->user->last_name;
		$this->user->added_by = Auth::id();
        $this->user->status=1;
        // process multiselect values
        $this->userdetail['certification'] =implode(', ', $this->userdetail['certification']);
        $this->userdetail['favored_users'] = implode(', ', $this->userdetail['favored_users']);
        $this->userdetail['unfavored_users'] = implode(', ', $this->userdetail['unfavored_users']);

        
        $userService = new UserService;
        $this->user = $userService->createUser($this->user,$this->userdetail,2,1,[],$this->isAdd);
        // put null/empty check for teams 
        $userService->addProviderTeams($this->selectedTeams,$this->user);
		if($redirect){
			$this->showList("Provider has been saved successfully");
			$this->user = new User;
		}

	}
    public function edit(User $user){

        $this->user=$user;
        $user['userdetail']['certification'] = explode(", ", $user['userdetail']['certification'] );
        $user['userdetail']['favored_users'] = explode(", ", $user['userdetail']['favored_users']);
        $user['userdetail']['unfavored_users'] = explode(", ", $user['userdetail']['unfavored_users']);
        
	   $this->userdetail=$user['userdetail']->toArray();
       $this->label="Edit";
       $this->user=$user;
	   $this->isAdd=false;
       if($this->user->user_dob)
           $this->user->user_dob = Carbon::createFromFormat('Y-m-d', $this->user->user_dob)->format('d/m/Y');
        //removing edit-user from provider list
        $this->providers = $this->providers->filter(function ($provider, $key) {
            return $provider->id != $this->user->id;
        });

    }
     public function updateVal($attrName, $val)
     {
        if($attrName=='user_dob'){
            $this->user['user_dob']=$val;
        }
        else
         $this->userdetail[$attrName] = $val;


     }
     public function addscheduledInPerson(){
        $this->scheduled_inpersons[] = [
            'hours'=>'',
            'charges'=>'',
            'cancellations'=>'',
            'exclude-after-hours'=>'',
            'modification'=>'',
            'exclude_closed_hours'=>'',
            'rescheduling'=>'',
            'bill_service_minimum'=>'',
            'duration'=>'',
        ];
    }
    public function addscheduledVirtual(){
        $this->scheduled_virtules[] = [
            'hours'=>'',
            'charges'=>'',
            'cancellations'=>'',
            'exclude-after-hours'=>'',
            'modification'=>'',
            'exclude_closed_hours'=>'',
            'rescheduling'=>'',
            'bbill_service_minimum'=>'',
            'duration'=>'',
        ];
    }
    public function addscheduledPhone(){
        $this->scheduled_phones[] = [
            'hours'=>'',
            'charges'=>'',
            'cancellations'=>'',
            'exclude-after-hours'=>'',
            'modification'=>'',
            'exclude_closed_hours'=>'',
            'rescheduling'=>'',
            'bill_service_minimum'=>'',
            'duration'=>'',
        ];
    }
    public function addscheduledTeleconference(){
        $this->scheduled_teleconfrences[] = [
            'hours'=>'',
            'charges'=>'',
            'cancellations'=>'',
            'exclude-after-hours'=>'',
            'modification'=>'',
            'exclude_closed_hours'=>'',
            'rescheduling'=>'',
            'bill_service_minimum'=>'',
            'duration'=>'',
        ];
    }
    public function addInPerson(){
        $this->inpersons[] = [
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'exclude-after-hours'=>'',
            'exclude_closed_hours'=>''
        ];
    }
    public function addInVirtual(){
        $this->invirtuals[] = [
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'exclude-after-hours'=>'',
            'exclude_closed_hours'=>''
        ];
    }
    public function addPhone(){
        $this->phones[] = [
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'exclude-after-hours'=>'',
            'exclude_closed_hours'=>''
        ];
    }
    public function addTeleconference(){
        $this->teleconfrences[] = [
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'exclude-after-hours'=>'',
            'exclude_closed_hours'=>''
        ];
    }
    public function addSpeclizations()
    {
        $this->speclizations[]=[
            'in_person'=>'',
            'virtual'=>'',
            'phone'=>'',
            'teleconference'=>'',
            'hide_from_customers'=>'',
            'hide_from_providers'=>"",
            'duration'=>''
        ];
    }
    public function removeInPerson($index)
    {
        unset($this->inpersons[$index]);
        $this->inpersons = array_values($this->inpersons);
    }
    public function removeInVirtual($index)
    {
        unset($this->invirtuals[$index]);
        $this->invirtuals = array_values($this->invirtuals);
    }
    public function removePhone($index)
    {
        unset($this->phones[$index]);
        $this->phones = array_values($this->phones);
    }
    public function removeteleConference($index)
    {
        unset($this->teleconfrences[$index]);
        $this->teleconfrences = array_values($this->teleconfrences);
    }
    public function removescheduledInPerson($index)
    {
        unset($this->scheduled_inpersons[$index]);
        $this->scheduled_inpersons = array_values($this->scheduled_inpersons);
    }
    public function removescheduledVirvual($index)
    {
        unset($this->scheduled_virtules[$index]);
        $this->scheduled_virtules = array_values($this->scheduled_virtules);
    }
    public function removescheduledPhone($index)
    {
        unset($this->scheduled_phones[$index]);
        $this->scheduled_phones = array_values($this->scheduled_phones);
    }
    public function removescheduledTeleconference($index)
    {
        unset($this->scheduled_teleconfrences[$index]);
        $this->scheduled_teleconfrences = array_values($this->scheduled_teleconfrences);
    }
    public function removeSpeclization($index)
    {
        unset($this->speclizations[$index]);
        $this->speclizations = array_values($this->speclizations);
    }

    //modal functions

    public function updateSelectedTeams($selectedTeams)
    {
        $this->selectedTeams = $selectedTeams;
    }
}

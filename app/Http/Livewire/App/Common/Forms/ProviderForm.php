<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Tenant\SystemRole;
use App\Services\App\UserService;
use Illuminate\Validation\Rule;
class ProviderForm extends Component
{
    public $user,$isAdd=true;
    public $ethnicity;
    public $timezone;
    public $gender;
    public $languages;

	public $component = 'profile';
    public $userdetail=['gender_id','country','timezone_id','userdetail.ethnicity_id','title','address_line1','address_line2','zip','permission','city','state','phone','education','note','user_introduction'];
    public $setupValues = [
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'userdetail.language_id', '','language_id',0]],
        'ethnicities' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 3, 'setup_value_label', false,'userdetail.ethnicity_id','','ethnicity_id',1]],
        'gender' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 2, 'setup_value_label', false,'userdetail.gender_id','','gender_id',2]],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'userdetail.timezone_id','','timezone_id',3]],
        'countries' => ['parameters' => ['Country', 'id', 'name', '', '', 'name', false, 'userdetail.country_id','','country',4]]
	];
   public $step = 1,$email_invitation;
   protected $listeners = ['updateVal' => 'updateVal','editRecord' => 'edit', 'stepIncremented'];
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
        $this->user->name=$this->user->first_name.' '.$this->user->last_name;
		$this->user->added_by = Auth::id();
        $this->user->status=1;
		$userService = new UserService;
        $this->user = $userService->createUser($this->user,$this->userdetail,2);
		if($redirect){
			$this->showList("Provider has been saved successfully");
			$this->user = new User;
		}

	}
    public function edit(User $user){

        $this->user=$user;
	   $this->userdetail=$user['userdetail']->toArray();
       $this->label="Edit";
       $this->user=$user;
	   $this->isAdd=false;


    }
     public function updateVal($attrName, $val)
     {

         $this->userdetail[$attrName] = $val;


     }
}

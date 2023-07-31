<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use App\Models\Tenant\SystemRole;
use App\Models\Tenant\SystemRoleUser;
use App\Services\App\UploadFileService;
use Illuminate\Support\Facades\Auth;
use App\Services\App\UserService;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Arr;

class AccountProfile extends Component
{
    use WithFileUploads;
    public $showForm;
    public $user,$isAdd=true,$image=null,$user_roles=[];
    public $userdetail=['gender_id','country','timezone_id','userdetail.ethnicity_id','title','user_position','address_line1','address_line2','zip','permission','city','state','phone'];
    public $setupValues = [
        'ethnicities' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 3, 'setup_value_label', false,'userdetail.ethnicity_id','','ethnicity_id',0]],
        'gender' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 2, 'setup_value_label', false,'userdetail.gender_id','','gender_id',1]],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'userdetail.timezone_id','','timezone_id',2]],
        'countries' => ['parameters' => ['Country', 'name', 'name', '', '', 'name', false, 'userdetail.country','','country',3]],
        'roles'=>['parameters'=>['SystemRole', 'id',
        'system_role_name', 'status', 1, 'system_role_name', true, 'user_roles','','roles',7]]
	];
    protected $listeners = ['updateVal' => 'updateVal','editRecord' => 'edit'];
    public function render()
    {
        $roles = SystemRole::get();
        return view('livewire.app.common.account-profile',[
            'roles' => $roles
        ]);
    }

    public function mount()
    {
        $this->setupValues = SetupHelper::loadSetupValues($this->setupValues);
        $this->showForm(User::with('userdetail')->find(Auth::id()));
        $this->user_roles=Arr::flatten(SystemRoleUser::where(['user_id'=>$this->user->id,'system_user_type'=>1])->select('system_role_id')->get()->toArray());
        
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
            'user.email' => [
                'required',
                'email',
                'max:255',
				Rule::unique('users', 'email')->ignore($this->user->id)],
            'userdetail.user_position' => [
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
			'image' => 'nullable|mimes:png,jpg,jpeg,gif,bmp,svg',


		];
	}
    public function save(){
		$this->validate();
        $this->user->name=$this->user->first_name.' '.$this->user->last_name;
		$this->user->added_by = Auth::id();
        $this->user->status=1;
        if($this->image!=null){ 
            $fileService = new UploadFileService();
            $this->userdetail['profile_pic'] = $fileService->saveFile('profile_pic', $this->image, $this->userdetail['profile_pic']);
        
        }
		$userService = new UserService;
       // dd($this->user);
        $this->user = $userService->createUser($this->user,$this->userdetail,1,1,[],false);
        $userService->storeAdminRoles($this->user_roles,$this->user->id);
    	// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => "Account profile has been saved",
			]);
	//	$this->user = new User;


	}
    public function updateVal($attrName, $val)
	{
        if($attrName=='roles')
            $this->user_roles = $val;
        else
        $this->userdetail[$attrName] = $val;


	}
    public function showForm(User $user)
{
    $this->user = $user;
    $this->userdetail = $user->userdetail ? $user->userdetail->toArray() : ['user_position'=>'','address_line1'=>'','address_line2'=>'','zip'=>'','city'=>'','state'=>'','title'=>'','phone'=>'','ethnicity_id'=>'','gender_id'=>'','country'=>'0','profile_pic'=>''];
    $this->showForm = true;
}
    public function edit(User $user){
        $this->user=$user;

        $this->userdetail=$user['userdetail']->toArray();
        $this->label="Edit";
      


    }
}

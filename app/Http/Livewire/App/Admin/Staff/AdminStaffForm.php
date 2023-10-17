<?php

namespace App\Http\Livewire\App\Admin\Staff;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use App\Models\Tenant\SystemRole;
use App\Models\Tenant\SystemRoleUser;
use App\Services\App\UploadFileService;
use Illuminate\Support\Facades\Auth;
use App\Services\App\UserService;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;

use DB, Arr;
use Livewire\WithFileUploads;

class AdminStaffForm extends Component
{
    use WithFileUploads;

    public $component = 'profile',$label='Add';
    public $user,$isAdd=true,$user_roles=[],$image =null;
    
    public $userdetail=['gender_id','country'=>"",'timezone_id','ethnicity_id','title','user_position','address_line1'=>"",'address_line2'=>"",'zip','permission','city'=>"",'state'=>'','phone','roles','profile_pic'=>null];
    public $setupValues = [
        'ethnicities' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 3, 'setup_value_label', false,'userdetail.ethnicity_id','','ethnicity_id',5]],
        'gender' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 2, 'setup_value_label', false,'userdetail.gender_id','','gender_id',4]],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'userdetail.timezone_id','','timezone_id',16]],
        'countries' => ['parameters' => ['Country', 'name', 'name', '', '', 'name', false, 'userdetail.country','','country',12]],
        'roles'=>['parameters'=>['SystemRole', 'id',
        'system_role_name', 'status', 1, 'system_role_name', true, 'user_roles','','roles',7]]
	];
    public $step =1;
    protected $listeners = ['updateVal' => 'updateVal','editRecord' => 'edit','stepIncremented'];
	public function showList($message='')
	{
		$this->emit("showList",$message);
	}
    public function mount(User $user){
		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->user=$user;

        if (request()->userID != null) {    //edit
            $user = User::where('id', request()->userID)->with(['phones', 'userdetail', 'addresses'])->first();
            $this->edit($user);
        }
		

	}

	public function render()
	{
		$roles = SystemRole::get();
		return view('livewire.app.admin.staff.admin-staff-form',[
            'roles' => $roles
        ]);
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

			'image' => 'nullable|image|mimes:jpg,png,jpeg',


		];
	}
    public function save($redirect=1){
		$this->validate();
        $type = !is_null($this->user->id) ? "update" : "create";
        $this->user->name=$this->user->first_name.' '.$this->user->last_name;
		$this->user->added_by = Auth::id();
        $this->user->status=1;


        if ($this->image != null) {
            $fileService = new UploadFileService();

            $this->userdetail['profile_pic'] = $fileService->saveFile('profile_pic', $this->image, $this->userdetail['profile_pic']);
        }
        

		$userService = new UserService;
       
        $this->user = $userService->createUser($this->user,$this->userdetail,1,1,[],$this->isAdd);
     //   dd($this->user_roles);
        $userService->storeAdminRoles($this->user_roles,$this->user->id);
		if($redirect){
			$this->showList("Admin Staff has been saved successfully");
			$this->user = new User;
		}
        callLogs($this->user->id,"Admin_staff",$type);

	}
    public function updateVal($attrName, $val)
	{
        if($attrName=='roles')
            $this->user_roles = $val;
        else
            $this->userdetail[$attrName] = $val;


	}
    public function edit(User $user){
        $this->user=$user;
        $this->userdetail=$user['userdetail']->toArray();
        $this->user_roles=Arr::flatten(SystemRoleUser::where(['user_id'=>$this->user->id,'system_user_type'=>1])->select('system_role_id')->get()->toArray());
      //  dd($this->user_roles);
        $this->label="Edit";
        $this->isAdd=false;


    }

}

<?php

namespace App\Http\Livewire\App\Admin\Team;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\AdminTeam;
use App\Models\Tenant\SystemRoleUser;
use App\Models\Tenant\User;
use App\Services\App\AdminTeamService;
use App\Services\App\UploadFileService;
use App\Services\App\UserService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;

class TeamInfo extends Component
{
    public $component = 'team-info';
	use WithFileUploads;

    public $image = null;
    protected $listeners = ['editRecord' => 'edit','updateVal'];
    public $label = "Add";
    public $teamAdmin=[];
    public $team,$user_roles;

	public $setupValues = [		'roles' => ['parameters' => [
			'SystemRole', 'id',
			'system_role_name', 'status', 1, 'system_role_name', true, 'user_roles', '', 'roles', 7
		]]
	];
	public function showList($message = "")
	{
		$this->emit('showList', $message);
	}
    public function mount(AdminTeam $team){
		$this->setupValues = SetupHelper::loadSetupValues($this->setupValues);

		$this->teamAdmin=User::query()
		->where('status',1)
		->whereHas('roles', function ($query) {
			$query->wherein('role_id',[1,3]);
		})->select([
			'id',
			'name',
			'email',
			
		])->get()->toArray();
        $this->team=$team;
	

	}
    public function rules()
	{
		return [
			'team.team_name' => [
				'required',
				'string',
				'max:255',
				Rule::unique('admin_teams', 'team_name')->ignore($this->team->id)],
            'team.admin_id'=>'required',
			'image' => 'nullable|mimes:png,jpg,jpeg,gif,bmp,svg',
			'team.team_email'=>'nullable|email',
            'team.team_phone'=>[
				'nullable',
				'string',
				'max:255',
			],
            'team.team_description'=> [
				'nullable',
				'string',
				'max:255',
			],
            'team.team_notes'=> [
				'nullable',
				'string',
				'max:255',
			]
		];
	}
	public function updateVal($attrName, $val)
	{
		
		if ($attrName == 'roles')
			$this->user_roles = $val;
		else
			$this->team[$attrName] = $val;

		
	}
	public function render()
	{

		return view('livewire.app.admin.team.team-info');
	}
	public function save($redirect=1){
		$this->validate();
		
		if(!is_null($this->team->id)){
            $type = "update";
        }
        else{
            $type = "create";
        }

        $teamService = new AdminTeamService;
        $this->team = $teamService->createAdminTeam($this->team);

		if($this->image!=null){
			$fileService = new UploadFileService();
			$this->team->team_image = $fileService->saveFile('profile_pic',$this->image,$this->team->team_image);
		}
		$this->team->save();
		$userService = new UserService;
		if($this->user_roles!=null)
			$userService->storeAdminRoles($this->user_roles, $this->team->id,2); //storing team roles


		if($redirect){
		// save and exit

			$this->showList("Admin Staff Team has been saved successfully");
			$this->team = new AdminTeam;
		
		}else{
			$this->emit('updateComponent', $this->team);
		}

		// hammad 16-10-23
		addLogs([
			'action_by' => \Auth::id(),
			'action_to' => $this->team->id,
			'item_type' => 'admin_team',
			'type' => $type,
			'message' => 'Admin-Team '. $type .'d by '. \Auth::user()->name,
			'ip_address' => \request()->ip(), 
		]);
		
	}

	


    public function edit(AdminTeam $team){
        $this->label = "Edit";
        $this->team=$team;
		$this->user_roles = Arr::flatten(SystemRoleUser::where(['user_id' => $this->team->id, 'system_user_type' => 2])->select('system_role_id')->get()->toArray());
    }

	public function switch($component)
	{
			$this->emit('switch', $component); //hit parent component switch func

	}


}

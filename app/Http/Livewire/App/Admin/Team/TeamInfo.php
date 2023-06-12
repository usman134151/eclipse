<?php

namespace App\Http\Livewire\App\Admin\Team;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\AdminTeam;
use App\Models\Tenant\User;
use App\Services\App\AdminTeamService;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
class TeamInfo extends Component
{
    public $component = 'team-info';
	use WithFileUploads;

    public $image;
    protected $listeners = ['editRecord' => 'edit','updateVal','changeComponent'=>'switch'];
    public $label = "Add";
    public $teamAdmin=[];
    public $team;
	public function showList($message = "")
	{
		$this->emit('showList', $message);
	}
    public function mount(AdminTeam $team){
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
		
		   $this->team[$attrName] = $val;
		
	}
	public function render()
	{

		return view('livewire.app.admin.team.team-info');
	}
	public function save($redirect=1){
		$this->validate();
		if ($this->image) {
			$path = $this->image->store('public/profile_images');
			
		}	
        $teamService = new AdminTeamService;
        $this->team = $teamService->createAdminTeam($this->team);

		if($redirect){
		// save and exit

			$this->showList("Admin has been saved successfully");
			$this->team = new AdminTeam;
		
		}

	}

	
	public function saveImage()
	{
		
		if ($this->image) {
			
        	$this->image->store('public/profile_images');
			
			//chmod(storage_path().$thi,755);
    	}
	}



    public function edit(AdminTeam $team){
        $this->label = "Edit";
        $this->team=$team;

    }
    public function switch($component)
	{
		$this->component = $component;
		$this->emit('changeComponent', $component);

	}
}

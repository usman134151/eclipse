<?php

namespace App\Http\Livewire\App\Admin\Team;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\AdminTeam;
use App\Services\App\AdminTeamService;
use Illuminate\Validation\Rule;
class TeamInfo extends Component
{
    protected $listeners = ['editRecord' => 'edit'];

    public $setupValues = [
		'users'=>['parameters'=>['User', 'id', 'name', '', '', 'name', false, 'team.admin_id','','users',1]],
	];
    public $team;
	public function showList($message = "")
	{
		$this->emit('showList', $message);
	}
    public function mount(AdminTeam $team){
		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
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
			'team.team_email'=>'required',
            'team.team_phone'=>'required',
            'team.team_description'=>'required',
            'team.team_notes'=>'nullable'
		];
	}
	public function render()
	{

		return view('livewire.app.admin.team.team-info');
	}
	public function save(){
		$this->validate();
        $teamserivice = new AdminTeamService;
        $this->team = $teamserivice->createAdminTeam($this->team);
		$this->showList("Customer has been saved successfully");
		$this->team = new AdminTeam;
	}
    public function edit(AdminTeam $team){
        $this->team=$team;

    }
}

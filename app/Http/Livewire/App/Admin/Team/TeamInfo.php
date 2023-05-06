<?php

namespace App\Http\Livewire\App\Admin\Team;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\AdminTeam;
use App\Services\App\AdminTeamService;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
class TeamInfo extends Component
{
    public $component = 'team-info';
	use WithFileUploads;

    public $image;
    protected $listeners = ['editRecord' => 'edit','updateVal'];
    public $label = "Add";
    public $setupValues = [
		'users'=>['parameters'=>['User', 'id', 'name', '', '', 'name', false, 'team.admin_id','','admin_id',1]],
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
			'team.team_email'=>'nullable|email',
            'team.team_phone'=>'nullable',
            'team.team_description'=>'nullable',
            'team.team_notes'=>'nullable'
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
	public function save(){
		$this->validate();
		if ($this->image) {
			$path = $this->image->store('public/images');
		}	
        $teamService = new AdminTeamService;
        $this->team = $teamService->createAdminTeam($this->team);
		$this->showList("Customer has been saved successfully");
		$this->team = new AdminTeam;
	}
	public function saveImage()
	{

		if ($this->image) {
        	$this->image->store('tmp');
			chmod(storage_path().$this->image->temporaryUrl(),755);
    	}
	}



    public function edit(AdminTeam $team){
        $this->label = "Edit";
        $this->team=$team;

    }
    public function switch($component)
	{
		$this->component = $component;
	}
}

<?php

namespace App\Http\Livewire\App\Admin\Forms;

use App\Helpers\SetupHelper;
use App\Models\Tenant\Team;
use App\Models\Tenant\User;
use Illuminate\Validation\Rule;

use Livewire\Component;

class TeamsForm extends Component
{
    public $showForm;
	public $component = 'Team';
    public $specializations=[], $accommodations=[], $services = [], $selected_providers=[];
    public $label,$team,$providers;
    protected $listeners = ['showList' => 'resetForm', 'editRecord' => 'edit','updateVal'];
    public $setupValues = [
        'accommodations' => ['parameters' => ['Accommodation', 'id', 'name', 'status', 1, 'name', true, 'accommodations', '', 'accommodations', 2]],
        'specializations' => ['parameters' => ['Specialization', 'id', 'name', 'status', 1, 'name', true, 'specializations', '', 'specializations', 4]],
        'services' => ['parameters' => ['ServiceCategory', 'id', 'name', 'status', 1, 'name', true, 'services', '', 'services', 3]]
    ];

    public function mount(Team $team)
    {
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->team=$team;
        $this->label="Add";
        $this->providers = User::query()
        ->where('status', 1)
        ->whereHas('roles', function ($query) {
            $query->where('role_id', 2);
        })
            ->select('id', 'name')
            ->get();
    }

    public function render()
    {
        return view('livewire.app.admin.forms.teams-form');
    }


    // Validation Rules
    public function rules()
    {
        return [
                'team.name' => [
                    'required',
                    'string',
                    'max:255',
                Rule::unique('teams','name')->ignore($this->team->id)],
                'team.description' => ['max:255','nullable'],
                'team.team_notes' => ['max:255','nullable'],
            ];
    }
    // functions

    public function save(){
        $this->validate();
        $this->team->save();

        // save team information
        $this->team->providers()->sync($this->selected_providers);
        $this->team->accommodations()->sync($this->accommodations);
        $this->team->specializations()->sync($this->specializations);
        $this->team->services()->sync($this->services);

        $this->showList("Record saved successfully");
        $this->team=new Team;
    }

    public function edit(Team $team){
        $this->label="Edit";
        $this->team=$team;

        // read team information
        $this->selected_providers = $this->team->providers()->allRelatedIds()->toArray();
        $this->accommodations = $this->team->accommodations()->allRelatedIds()->toArray();
        $this->specializations = $this->team->specializations()->allRelatedIds()->toArray();
        $this->services = $this->team->services()->allRelatedIds()->toArray();
        $this->dispatchBrowserEvent('refreshSelects');
    }

    public function showList($message="")
    {
        // save data
        $this->emit('showList',$message);
    }

    function showForm()
    {
       $this->showForm=true;
       
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

    public function updateVal($attrName, $val)
	{
       
		 $this->$attrName=$val;

	}

}

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
    public $specializations=[];
    public $accommodations=[], $services = [];
    public $selected_providers,$label,$team,$providers;
    protected $listeners = ['showList' => 'resetForm', 'editRecord' => 'edit'];
    public $setupValues = [
        'accommodations' => ['parameters' => ['Accommodation', 'id', 'name', 'status', 1, 'name', true, 'accommodations', '', 'accommodations', 2]],
        'specializations' => ['parameters' => ['Specialization', 'id', 'name', 'status', 1, 'name', true, 'specializations', '', 'specializations', 4]],
        'services' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 4, 'setup_value_label', false, 'company.company_timezone', '', 'company_timezone', 4]]

    ];
    public function mount(Team $team)
    {
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->selected_providers=[];
        $this->team=$team;
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
        dd($this->selected_providers,$this->accommodations, $this->specializations);
        $this->validate();
        $this->team->save();
        $this->team->providers()->sync($this->selected_providers);
        $this->team->accommodations()->sync($this->accommodations);
        $this->team->specializations()->sync($this->specializations);

        // save team_providers

        $this->showList("Record saved successfully");
        $this->team=new Team;
    }

    public function edit(Team $team){
        $this->label="Edit";
        $this->team=$team;
        $this->selected_providers = $this->team->providers()->allRelatedIds()->toArray();
        $this->accommodations = $this->team->accommodations()->allRelatedIds()->toArray();
        $this->specializations = $this->team->specializations()->allRelatedIds()->toArray();

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

}

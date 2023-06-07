<?php

namespace App\Http\Livewire\App\Admin\Forms;
use App\Models\Tenant\Team;
use App\Models\Tenant\User;
use Illuminate\Validation\Rule;

use Livewire\Component;

class TeamsForm extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm','editRecord' => 'edit'];
	public $component = 'Team';
    public $specializations=[];
    public $accommodations=[],$providers, $selectedProviders,$label;
    
    public function mount(Team $team)
    {
        // $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
		// $this->company=$company;
        // $this->selectedProviders = [];
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
        dd($this->selectedProviders);
        $this->validate();
        $this->team->save();
        $this->team->providers()->attach($this->selectedProviders);
        // save team_providers

        $this->showList("Record saved successfully");
        $this->team=new Team;
    }

    public function edit(Team $team){
        $this->label="Edit";
       $this->team=$team;
       $this->selectedProviders= $this->team->providers()->allRelatedIds()->toArray();
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

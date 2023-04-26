<?php

namespace App\Http\Livewire\App\Admin\Forms;
use App\Models\Tenant\Team;
use Illuminate\Validation\Rule;

use Livewire\Component;

class TeamsForm extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
	public $component = 'Team';
    public $setupValues = [
		'industries'=>['parameters'=>['Industry', 'id', 'name', '', '', 'name', false, 'company.industry_id','','industry',1]],
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'company.language_id', '','languages',4]]
	];

    public function mount(Team $team)
    {
        // $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
		// $this->company=$company;
        $this->team=$team;

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
                'team.description' => 'max:255',
            ];
    }
    // functions

    public function save(){
        $this->validate();
        $this->team->save();
        $this->showList("Record saved successfully");
        $this->team=new Team;
    }

    public function edit(Team $team){
        $this->label="Edit";
       $this->team=$team;
       //dd($this->industry);
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

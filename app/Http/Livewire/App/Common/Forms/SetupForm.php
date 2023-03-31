<?php

namespace App\Http\Livewire\App\Common\Forms;
use App\Models\Tenant\SetupValue;


use Livewire\Component;

class SpecializationForm extends Component
{
    public $setupValue;
    public $label="Add";
    protected $listeners = ['editRecord' => 'edit'];


    public function mount(SetupValue $setupvalue){
        $this->specialization=$setupvalue;
    }

    
    // Validation Rules
    public function rules()
    {
        return [
                'specialization.name' => 'required|string|max:255|unique:specializations,name',
                'specialization.description'=>'' 
            ];
    }
    public function showList($message="")
    {
        // save data
        $this->emit('showList',$message);
    }

    public function edit(SetupValue $setupvalue){
        $this->label="Edit";
        $this->specialization=$setupvalue;
        
       
    }

    public function save(){
        $this->validate();
        $this->specialization->added_by=1;
        $this->specialization->save();
        $this->showList("Record saved successfully");
        $this->specialization=new SetupValue;
    }

    public function render()
    {

        return view('livewire.app.common.forms.specialization-form');
    }

  
}

<?php

namespace App\Http\Livewire\App\Common\Forms;
use App\Models\Tenant\Specialization;


use Livewire\Component;

class SpecializationForm extends Component
{
    public $specialization;
    

    public function mount(Specialization $specialization){
        $this->specialization=$specialization;
    }
    
    // Validation Rules
    public function rules()
    {
        return [
                'specialization.name' => 'required'    
            ];
    }
    public function showList($message="")
    {
        // save data
        $this->emit('showList',$message);
    }

    public function save(){
        $this->validate();
        $this->specialization->added_by=1;
        $this->specialization->save();
        $this->showList("Record created successfully");
    }

    public function render()
    {
        return view('livewire.app.common.forms.specialization-form');
    }

  
}

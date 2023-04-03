<?php

namespace App\Http\Livewire\App\Common\Forms;
use App\Models\Tenant\SetupValue;
use Illuminate\Validation\Rule;


use Livewire\Component;

class SetupForm extends Component
{
    public $setupValue;
    public $label="Add";
    protected $listeners = ['editRecord' => 'edit'];


    public function mount(SetupValue $setupvalue){
        $this->setupvalue=$setupvalue;
    }

    
    // Validation Rules
    public function rules()
    {
        return [
            'setupvalue.setup_value_label' => [
                'required',
                'string',
                'max:255',
                Rule::unique('setup_values', 'setup_value_label')->where(function ($query) {
                    return $query->where('setup_id', $this->setupvalue->setup_id);
                })->ignore($this->setupvalue->id)
            ],
            'setupvalue.setup_id' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'setupvalue.setup_value_label' => 'setup value',
            'setupvalue.setup_id' => 'section',
        ];
    }

    public function showList($message="")
    {
        // save data
        $this->emit('showList',$message);
    }

    public function edit(SetupValue $setupvalue){
        $this->label="Edit";
        $this->setupvalue=$setupvalue;
        
       
    }

    public function save(){
       // dd($this->setupvalue->setup_id);
        $this->validate();
        //$this->setupvalue->added_by=1;
        $this->setupvalue->save();
        $this->showList("Record saved successfully");
        $this->setupvalue=new SetupValue;
    }

    public function render()
    {

        return view('livewire.app.common.forms.setup-form');
    }

  
}

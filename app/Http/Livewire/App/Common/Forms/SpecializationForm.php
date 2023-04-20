<?php

namespace App\Http\Livewire\App\Common\Forms;
use App\Models\Tenant\Specialization;
use Illuminate\Validation\Rule;


use Livewire\Component;

class SpecializationForm extends Component
{
    public $specialization;
    public $label="Add";
    protected $listeners = ['editRecord' => 'edit'];


    public function mount(Specialization $specialization){
        $this->specialization=$specialization;
    }


    // Validation Rules
    public function rules()
    {
        return [
                'specialization.name' =>[
                'required',
                'string',
                'max:255',
                Rule::unique('specializations','name')->ignore($this->specialization->id)],
                'specialization.description'=>''
            ];

    }
    public function showList($message="")
    {
        // save data
        $this->emit('showList',$message);
    }

    public function edit(Specialization $specialization){
        $this->label="Edit";
        $this->specialization=$specialization;


    }

    public function save(){
        $this->validate();
        $this->specialization->added_by=1;
        $this->specialization->save();
        $this->showList("Record saved successfully");
        $this->specialization=new Specialization;
    }

    public function render()
    {

        return view('livewire.app.common.forms.specialization-form');
    }


}

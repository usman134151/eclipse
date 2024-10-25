<?php

namespace App\Http\Livewire\App\Common\Forms;
use App\Models\Tenant\Industry;
use Illuminate\Validation\Rule;

use Livewire\Component;

class IndustriesForm extends Component
{
    public $industry, $label="Add";
    protected $listeners = ['editRecord' => 'edit'];


    public function mount(Industry $industry){
        $this->industry=$industry;
    }


    // Validation Rules
    public function rules()
    {
        return [
                'industry.name' => [
                    'required',
                    'string',
                    'max:255',
                Rule::unique('industries','name')->ignore($this->industry->id)]

            ];
    }
    public function showList($message="")
    {
        // save data
        $this->emit('showList',$message);
    }

    public function edit(Industry $industry){
        $this->label="Edit";
       $this->industry=$industry;
       
       //dd($this->industry);
    }

    public function save(){
        $this->validate();
        if(!is_null($this->industry->id)){
            $type = 'update';
        }
        else{
            $type = "create";
        }
        $this->industry->added_by=1;
        $this->industry->save();
        $this->showList("Record saved successfully");
        addLogs([
            'action_by' => \Auth::id(),
            'action_to' => $this->industry->id,
            'item_type' => 'industry',
            'type' => $type,
            'message' => 'Industry '. $type . 'd by '. \Auth::user()->name,
            'ip_address' => \request()->ip(),
        ]);
        $this->industry=new Industry;
        
    }

    public function render()
    {
        return view('livewire.app.common.forms.industries-form');
    }


}

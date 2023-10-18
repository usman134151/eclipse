<?php

namespace App\Http\Livewire\App\Common\Forms;
use App\Models\Tenant\SetupValue;
use Illuminate\Validation\Rule;
use App\Helpers\SetupHelper;

use Livewire\Component;

class SetupForm extends Component
{
    public $setupValue;
    public $label="Add";
    protected $listeners = ['editRecord' => 'edit','updateVal'];
    public $setupValues = [
        'setup'=>['parameters'=>['Setup', 'id', 'setup_value', 'setup_deleteable', '1', 'setup_value', false, 'setupvalue.setup_id', '','setup_id',0 ]],
	];

    public function mount(SetupValue $setupvalue){
        $this->setupvalue=$setupvalue;
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);

    }
	public function updateVal($attrName, $val)
	{
		
		   $this->setupvalue[$attrName] = $val;
		
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
       $type = !is_null($this->setupvalue->id) ? "update" : "create";
        $this->validate();
        //$this->setupvalue->added_by=1;
        $this->setupvalue->save();
        $this->showList("Record saved successfully");
        $this->setupvalue=new SetupValue;
        callLogs($this->setupvalue->id,"setup_value",$type);
    }

    public function render()
    {

        return view('livewire.app.common.forms.setup-form');
    }


}

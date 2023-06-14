<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\CustomizeFormFields;
use App\Models\Tenant\CustomizeForms;
use App\Models\Tenant\Industry;
use App\Services\CustomizeForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddCustomizedForm extends Component
{
    protected $listeners = ['updateVal'];
    public $industry_id='',$industries=[];
    public $questions=[[
        'feild_name'=>'','field_type'=>'','placeholder'=>'','required'=>'','hide_response_from_provider'=>null,
        'customize_form_id'=>'','form_industry_id'=>'','screen_name'=>'','title'=>'','scenario'=>'','placeholder'=>'',
        'document_name'=>'','required'=>null,'allow_redo'=>null, 
        // 'options'=>[
        //     'form_id'=>'','form_field_id'=>'','field_type_id'=>'', 'option_field_name'=>''
        // ]
    ]];

    public $custom_form_details=['form_name_id'=>'', 'industry_id' => '', 'screen_name' => '', 'request_form_name' => ''];

	public function showList()
	{
		$this->emit('showList');
	}

    public function save(){
        // dd($this->questions, $this->custom_form_details);

        // $customizeService = new CustomizeForm;
        $this->custom_form_details['added_by']=Auth::id();
        $this->custom_form_details['updated_by'] = Auth::id();

        $form=CustomizeForms::create($this->custom_form_details);
        foreach($this->questions as $question){
            $question['customize_form_id']=$form->id;
            $question['form_industry_id'] = $form->industry_id;
            $question['added_by'] = Auth::id();
            $question['updated_by'] = Auth::id();

            $question=CustomizeFormFields::create($question);
            //save options if existing 
        }
    }


    public function mount()
    {
        $this->industries= Industry::where('status',1)->get()->toArray();
		$this->dispatchBrowserEvent('refreshSelects');

    }

    public function setIndustry(){
        $custom_form_details['industry_id']=$this->industry_id;
        $questions['form_industry_id'] = $this->industry_id;
    }

	public function render()
	{
		return view('livewire.app.common.forms.add-customized-form');
	}
    public function addQuestion(){
        $this->questions[] = [
            'feild_name' => '', 'field_type' => '', 'placeholder' => '', 'required' => '', 'hide_response_from_provider' => null,
            'customize_form_id' => '', 'form_industry_id' => '', 'screen_name' => '', 'title' => '', 'scenario' => '', 'placeholder' => '',
            'document_name' => '', 'required' => null, 'allow_redo' => null
       
        // 'options'=>[
        //     'form_id'=>'','form_field_id'=>'','field_type_id'=>'', 'option_field_name'=>''
        //     ]
        ];
        
    }
    public function removeQuestion($index)
    {
        unset($this->questions[$index]);
        $this->questions = array_values($this->questions);
    }

    public function updateVal($attrName, $val)
    {
        if ($attrName == 'form_name_id') {
            $this->custom_form_details['form_name_id'] = $val;
            // clear questions
            $this->questions = [['feild_name' => '', 'field_type' => '', 'placeholder' => '', 'required' => '', 'hide_response_from_provider' => null,
                'customize_form_id' => '', 'form_industry_id' => '', 'screen_name' => '', 'title' => '', 'scenario' => '', 'placeholder' => '',
                'document_name' => '', 'required' => null, 'allow_redo' => null,
         // 'options'=>[
                //     'form_id'=>'','form_field_id'=>'','field_type_id'=>'', 'option_field_name'=>''
                // ]
            ]];
        }
        // } else
        //     $this->$attrName = $val;
    }
}

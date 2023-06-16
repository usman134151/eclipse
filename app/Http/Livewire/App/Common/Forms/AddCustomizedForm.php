<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\CustomizeFormFields;
use App\Models\Tenant\CustomizeFormOptionFields;
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
        'feild_name'=>'','field_type'=>0,'placeholder'=>'','required'=>'','hide_response_from_provider'=>null,
        'customize_form_id'=>'','form_industry_id'=>0,'screen_name'=>'','title'=>'','scenario'=>'','placeholder'=>'',
        'document_name'=>'','required'=>null,'allow_redo'=>null, 'position'=>0,
        'options'=>[[
            'option_field_name'=>''
            ]            // 'form_id' => '', 'form_field_id' => '', 'field_type_id' => '', 
        ]
    ]];

    public $custom_form_details=['form_name_id'=>'', 'industry_id' => 0, 'screen_name' => '', 'request_form_name' => ''];

	public function showList($message)
	{
		$this->emit('showList',$message);
	}

    public function rules()
    {
        $rules = [
            'custom_form_details.form_name_id' => [
                'required', 'numeric'
            ],
        ];
        if($this->custom_form_details['form_name_id']==40){
            $rules['questions.*.title'] = ['required', 'max:255'];
            $rules['questions.*.scenario'] = ['required', 'max:255'];
        } else{
            $rules['questions.*.field_name'] = ['required','max:255'];
            $rules['questions.*.field_type'] = ['required','gt:0'];
        }
        
        
        return $rules;
    }

    public function save(){
        $this->validate();

        $customizeService = new CustomizeForm;
        $customizeService->saveForm($this->custom_form_details,$this->questions);

        $this->showList("Custom Form has been saved successfully");
        $this->clearFields();
    }

    function clearFields(){
        
        $this->industry_id=0;
        // clear questions
        $this->questions = [[
            'feild_name' => '', 'field_type' => 0, 'placeholder' => '', 'required' => '', 'hide_response_from_provider' => null,
            'customize_form_id' => '', 'form_industry_id' => 0, 'screen_name' => '', 'title' => '', 'scenario' => '', 'placeholder' => '',
            'document_name' => '', 'required' => null, 'allow_redo' => null, 'position'=>0,
            'position' => 0,
            'options'=>[[
                 'option_field_name'=>''
                ]
            ]
        ]];
        $this->resetValidation();

    }

    

    public function mount()
    {
        if(request()->formID!=null){
            $formId = request()->formID;

            $customizeService = new CustomizeForm;
            $data =$customizeService->getFormDetails($formId);
            $this->custom_form_details = $data['custom_form_details'];
            $this->questions = $data['questions'];

        }
        $this->industries= Industry::where('status',1)->get()->toArray();
		$this->dispatchBrowserEvent('refreshSelects');
    }

    public function render()
	{
		return view('livewire.app.common.forms.add-customized-form');
	}
    public function addQuestion(){
        if(count($this->questions)==1)
            $count =1;
        else
            $count= count($this->questions);

        $this->questions[] = [
            'feild_name' => '', 'field_type' => 0, 'placeholder' => '', 'required' => '', 'hide_response_from_provider' => null,
            'customize_form_id' => '', 'form_industry_id' => 0, 'screen_name' => '', 'title' => '', 'scenario' => '', 'placeholder' => '',
            'document_name' => '', 'required' => null, 'allow_redo' => null,'position'=>$count,
            'options'=>[[
                 'option_field_name'=>''
            ]]
        ];
        
    }

    public function updateOrder($list)
    {
        // update order of questions in array
        foreach ($list as $item) {
            // value == position and order == array index
            $this->questions[$item['order']-1]['position'] = $item['value'];
                
        }

        $positions = array_column($this->questions, 'position');
        array_multisort($positions, SORT_ASC, $this->questions);
    } 
    public function addOption($index)
    {
        $this->questions[$index]['options'][] = [
                'option_field_name' => ''
        ];
    }

    public function removeQuestion($index)
    {
        unset($this->questions[$index]);
        $this->questions = array_values($this->questions);
    }

    public function removeOption($index,$index_option)
    {
        unset($this->questions[$index]['options'][$index_option]);
        $this->questions = array_values($this->questions);
    }

    public function updateVal($attrName, $val)
    {
        if ($attrName == 'form_name_id') {
            $this->custom_form_details['form_name_id'] = $val;
            $this->clearFields();
          
        }
        // } else
        //     $this->$attrName = $val;
    }
}

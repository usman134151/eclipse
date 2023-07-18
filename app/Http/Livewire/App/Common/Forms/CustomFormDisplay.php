<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\BookingCustomizeData;
use App\Services\CustomizeForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomFormDisplay extends Component
{
    public $showForm, $form_id,$assignment_id ,$questions=[],$formInfo=[], $answers=[],$booking_id;
    
    protected $listeners = ['showList' => 'resetForm', 'updateVal'];

    public function render()
    {
        return view('livewire.app.common.forms.custom-form-display');
    }

    public function mount()
    {
       $formService = new CustomizeForm();
       $formData = $formService->getFormDetails($this->form_id);
       if(count($formData)){
            $this->formInfo = $formData['custom_form_details'];
            foreach($formData['questions'] as $index=> $question){
                    $this->answers[$index]['customize_id']= $question['id'];
                    $this->answers[$index]['field_title'] = $question['field_name'];
                    $this->answers[$index]['added_by'] = Auth::id();
                    $this->answers[$index]['booking_id'] = $this->booking_id;


                    $this->questions[]=$formService->getformfield($question, 'answers.'.$index.'.data_value', $index);
            }
        }
    }

    public function save(){
        // dd($this->checkbox);
        foreach($this->answers as $answer){
            BookingCustomizeData::create($answer);
        }
    }


    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

    public function updateVal($attrName, $val)
    {
        $this->answers[$attrName]['data_value'] = $val;
    }


}

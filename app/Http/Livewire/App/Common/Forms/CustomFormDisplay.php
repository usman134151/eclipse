<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Services\CustomizeForm;
use Livewire\Component;

class CustomFormDisplay extends Component
{
    public $showForm, $form_id,$assignment_id ,$questions=[],$formInfo=[], $answers=[];
    
    protected $listeners = ['showList' => 'resetForm'];

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
                    $this->questions[]=$formService->getformfield($question, 'answers.'.$question['id'], $index);
            }
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

}

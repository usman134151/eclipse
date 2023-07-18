<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\BookingCustomizeData;
use App\Services\CustomizeForm;
use Illuminate\Support\Arr;
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
                    $this->answers[$index] = BookingCustomizeData::where(['booking_id' => $this->booking_id, 'customize_id' => $question['id']])
                                        ->select('id','booking_log_id','booking_log_bbid','quote_id','provider_application_id','booking_id',
                                        'service_id','customize_id',  'field_title',  'data_value', 'customize_data','added_by')
                                        ->first();
                    
                    if($this->answers[$index]==null){ //create new
                        $this->answers[$index]['customize_id']= $question['id'];
                        $this->answers[$index]['field_title'] = $question['field_name'];
                        $this->answers[$index]['booking_id'] = $this->booking_id;
                    }else{
                    //fetch existing
                    $this->answers[$index] =$this->answers[$index]->toArray();
                        if($question['field_type']==4){
                            $values=explode(',',$this->answers[$index]['data_value']);
                            foreach($values  as $val){
                                $d[$val]=true;
                            }
                            $this->answers[$index]['data_value']=$d;
                        }
                    }

                    $this->questions[]=$formService->getformfield($question, 'answers.'.$index.'.data_value', $index);
            }
        }
    }

    public function save(){
        // dd($this->answers);
        foreach($this->answers as $answer){
            if(isset($answer['data_value']))
                if(is_array($answer['data_value'])){
                    $filtered= array_keys(array_filter($answer['data_value']));
                    $answer['data_value'] = implode(',', $filtered);

                }
            $answer['added_by'] = Auth::id();

            if (isset($answer['id'])){  //update existing
                $id = $answer['id'];
                unset($answer['id']);

                $updated =BookingCustomizeData::where('id',$id)->update($answer);
            }else
                BookingCustomizeData::create($answer);
        }
        $this->confirmation('Form saved successfully');
    }


    public function confirmation($message = '')
    {
        if ($message) {
            // Emit an event to display a success message using the SweetAlert package
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => $message,
            ]);
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

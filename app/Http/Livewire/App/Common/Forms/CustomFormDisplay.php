<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\BookingCustomizeData;
use App\Services\App\UploadFileService;
use App\Services\CustomizeForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CustomFormDisplay extends Component
{
    use WithFileUploads;
    public $showForm, $formId, $questions = [], $formInfo = [], $answers = [], $bookingId, $lastForm = false, $formType = 1;
    public $service_id = null, $added_by_id = null, $next = 0;
    protected $listeners = ['showList' => 'resetForm', 'updateVal', 'saveCustomForm' => 'save'];

    public function render()
    {
        return view('livewire.app.common.forms.custom-form-display');
    }
    public $rules = [];

    public function mount()
    {
        // dd($this->bookingId,$this->service_id,$this->formId,$this->formType, $this->added_by_id);
        $formService = new CustomizeForm();
        $formData = $formService->getFormDetails($this->formId);
        if ($this->added_by_id == null)
            $this->added_by_id = Auth::id();
        if (count($formData)) {
            $this->formInfo = $formData['custom_form_details'];
            foreach ($formData['questions'] as $index => $question) {
                $query = BookingCustomizeData::where(['booking_id' => $this->bookingId, 'customize_id' => $question['id'], 'form_type' => $this->formType]);
                if ($this->formType > 1)
                    $query->where(['added_by' => $this->added_by_id, 'service_id' => $this->service_id]);
                $this->answers[$index] = $query
                    ->select(
                        'id',
                        'booking_log_id',
                        'booking_log_bbid',
                        'quote_id',
                        'provider_application_id',
                        'booking_id',
                        'service_id',
                        'customize_id',
                        'field_title',
                        'data_value',
                        'field_type',
                        'added_by'
                    )
                    ->first();
                if ($this->answers[$index] == null) { //create new
                    $this->answers[$index]['customize_id'] = $question['id'];
                    $this->answers[$index]['field_title'] = $question['field_name'];
                    $this->answers[$index]['booking_id'] = $this->bookingId;
                } else {
                    //fetch existing
                    $this->answers[$index] = $this->answers[$index]->toArray();
                    if ($question['field_type'] == 4) {
                        $values = explode(',', $this->answers[$index]['data_value']);
                        foreach ($values  as $val) {
                            $d[$val] = true;
                        }
                        $this->answers[$index]['data_value'] = $d;
                    }
                }
                $this->answers[$index]['field_type'] = $question['field_type'];

                if ($question['field_type'] == 6)
                    $this->rules['answers.' . $index . '.data_value'] = 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv';
                $this->questions[] = $formService->getformfield($question, 'answers.' . $index . '.data_value', $index);
            }
        }
    }


    public function saveAllForms()
    {
        if (count($this->rules))
            $this->validate($this->rules);

        $this->emit('saveCustomForm');
      //  $this->emit('confirmation',  "All Form Data saved successfully!");
        if ($this->next)
            $this->emit('switch', 'payment-info');
    }

    public function save($redirect = 1)
    {
        $fileService = new UploadFileService();

        foreach ($this->answers as $index => $answer) {
            if (isset($answer['data_value']))
                if (is_array($answer['data_value'])) {
                    $filtered = array_keys(array_filter($answer['data_value']));
                    $answer['data_value'] = implode(',', $filtered);
                }
            if ($answer['field_type'] == 6) {
                // run validation

                if (key_exists('data_value',$answer) && $answer['data_value'] != null && !is_string($answer['data_value'])) {
                    $answer['data_value'] = $fileService->saveFile('booking_custom_form', $answer['data_value']);
                }
            }
            $answer['added_by'] = $this->added_by_id;
            $answer['form_type'] = $this->formType;
            $answer['service_id'] = $this->service_id;


            if (isset($answer['id'])) {  //update existing
                $id = $answer['id'];
                unset($answer['id']);

                $updated = BookingCustomizeData::where('id', $id)->update($answer);
            } else
                BookingCustomizeData::create($answer);
        }
        // if ($this->formType == 1)
        //     $this->emit('confirmation', (isset($this->formInfo['request_form_name']) ? $this->formInfo['request_form_name'] : '') . " Form Data saved successfully!");

        // $this->emitToParent($redirect);
    }

    public function emitToParent($redirect = 1)
    {
        $this->emit('saveCustomFormData', $redirect);
        // $this->emit('setStep', $redirect);

    }

    // public function switchParentComponent()
    // {
    //     $this->emit('switch', $redirect);
    //     // $this->emit('setStep', $redirect);

    // }



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
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }

    public function updateVal($attrName, $val)
    {
        $this->answers[$attrName]['data_value'] = $val;
    }
}

<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Http\Livewire\App\Admin\Customer\ServiceCatelog;
use App\Models\Tenant\CustomizeFormFields;
use App\Models\Tenant\CustomizeFormOptionFields;
use App\Models\Tenant\CustomizeForms;
use App\Models\Tenant\Industry;
use App\Models\Tenant\ServiceCategory;
use App\Services\CustomizeForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Services\ExportDataFile;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;




class AddCustomizedForm extends Component
{
    use WithFileUploads;
    protected $listeners = ['updateVal'];
    public $industry_id = '', $industries = [], $formId = null, $services = [];
    public $questions = [[
        'feild_name' => '', 'field_type' => 0, 'placeholder' => '', 'required' => '', 'hide_response_from_provider' => null,
        'customize_form_id' => '', 'form_industry_id' => 0, 'screen_name' => '', 'title' => '', 'scenario' => '', 'placeholder' => '',
        'document_name' => '', 'required' => null, 'allow_redo' => null, 'position' => 0,
        'options' => [
            [
                'option_field_name' => ''
            ]            // 'form_id' => '', 'form_field_id' => '', 'field_type_id' => '', 
        ]
    ]];

    public $custom_form_details = ['form_name_id' => '', 'industry_id' => 0, 'screen_name' => '', 'request_form_name' => ''];

    protected $exportDataFile;
    public $warningMessage = '';
    public $file;
    public $optionsIndex;



    public function showList($message = '')
    {
        $this->emit('showList', $message);
    }

    public function rules()
    {
        $rules = [
            'custom_form_details.form_name_id' => [
                'required', 'numeric'
            ],
        ];
        if ($this->custom_form_details['form_name_id'] == 40) {
            $rules['custom_form_details.screen_name'] = ['required', 'max:255'];
            $rules['questions.*.title'] = ['required', 'max:255'];
            $rules['questions.*.scenario'] = ['required', 'max:255'];
        } else {
            $rules['questions.*.field_name'] = ['required', 'max:255'];
            $rules['questions.*.field_type'] = ['required', 'gt:0'];
        }


        return $rules;
    }

    public function save()
    {

        $this->validate();
        $customizeService = new CustomizeForm;
        $formid = $customizeService->saveForm($this->custom_form_details, $this->questions, $this->formId);
        //delete existing relations
        ServiceCategory::where('request_form_id', $formid)->update(['request_form_id'=> null]);

        if (count($this->services))
            //add new relations
            // foreach ($this->services as $serviceid) {
                ServiceCategory::whereIn('id', $this->services)->update(['request_form_id'=> $formid]);
            // }

        $this->showList("Custom Form has been saved successfully");
        $this->clearFields();
    }

    function clearFields()
    {

        $this->industry_id = 0;
        $this->formId = null;
        // clear questions
        $this->questions = [[
            'feild_name' => '', 'field_type' => 0, 'placeholder' => '', 'required' => '', 'hide_response_from_provider' => null,
            'customize_form_id' => '', 'form_industry_id' => 0, 'screen_name' => '', 'title' => '', 'scenario' => '', 'placeholder' => '',
            'document_name' => '', 'required' => null, 'allow_redo' => null, 'position' => 0,
            'position' => 0,
            'options' => [
                [
                    'option_field_name' => ''
                ]
            ]
        ]];
        $this->resetValidation();
    }



    public function mount()
    {
        if (request()->formID != null) {
            $this->formId = request()->formID;

            $customizeService = new CustomizeForm;
            $data = $customizeService->getFormDetails($this->formId);
            $this->custom_form_details = $data['custom_form_details'];
            $this->questions = $data['questions'];

            if (count($this->questions) == 0)  //to not leave blank page
                $this->addQuestion();
            $this->services = ServiceCategory::where('request_form_id', $this->formId)->get()->pluck('id')->toArray();
        }
        $this->industries = Industry::where('status', 1)->get()->toArray();
        // $this->services = ServiceCategory::where('status')
        $this->dispatchBrowserEvent('refreshSelects');
    }

    public function render()
    {
        return view('livewire.app.common.forms.add-customized-form');
    }
    public function addQuestion()
    {
        if (count($this->questions) == 1)
            $count = 1;
        else
            $count = count($this->questions);

        $this->questions[] = [
            'feild_name' => '', 'field_type' => 0, 'placeholder' => '', 'required' => '', 'hide_response_from_provider' => null,
            'customize_form_id' => '', 'form_industry_id' => 0, 'screen_name' => '', 'title' => '', 'scenario' => '', 'placeholder' => '',
            'document_name' => '', 'required' => null, 'allow_redo' => null, 'position' => $count,
            'options' => [[
                'option_field_name' => ''
            ]]
        ];
    }

    public function updateOrder($list)
    {
        // update order of questions in array
        foreach ($list as $item) {
            // value == position and order == array index
            $this->questions[$item['order'] - 1]['position'] = $item['value'];
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

    // hammad date:13/10/23

    public function getIndex($index)
    {
        $this->optionsIndex = $index;
    }

    public function updatedFile()
    {
        $this->validate([
            'file' => 'required|file|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    
        // Reset the warning message at the beginning.
        $this->warningMessage = '';
    
        $rows = Excel::toArray([], $this->file)[0];
        $options = [];
    
        foreach ($rows as $row) {
            try {
                if ($row[0] != '') {
                    $option = [];
                    $option['option_field_name'] = $row[0];
                    if($option['option_field_name']!='Options')
                    {
                        $option_exists = false;

                        // Check if the option already exists in the $options array
                        foreach ($options as $existing_option) {
                            if ($existing_option['option_field_name'] == $option['option_field_name']) {
                                $option_exists = true;
                                break;
                            }
                        }
                        if(!$option_exists)
                            $options[] = $option;
                    }
                }
            } catch (\ErrorException $e) {
                $this->warningMessage = "Please make sure that you are trying to upload a valid file to import data.";
            }
        }
    
        if (count($options) == 0 && $this->warningMessage == '') {
            $this->warningMessage = "Please ensure that the file contains records before proceeding with the import. Currently, the file is empty.";
        }
    
        $this->questions[$this->optionsIndex]['options'] = $options;
    }
    

    public function downloadExportFile()
    {
        return $this->exportDataFile->generateOptionsExcelTemplate();
    }
    public function __construct()
    {
        $this->exportDataFile = new ExportDataFile;
    }

    public function removeQuestion($index)
    {
        unset($this->questions[$index]);
        $this->questions = array_values($this->questions);
    }

    public function removeOption($index, $index_option)
    {
        unset($this->questions[$index]['options'][$index_option]);
        $this->questions = array_values($this->questions);
    }

    public function updateVal($attrName, $val)
    {
        if ($attrName == 'form_name_id') {
            $this->custom_form_details['form_name_id'] = $val;
            $this->clearFields();
        } elseif ($attrName == 'industry') {
            $this->custom_form_details['industry_id'] = $val;
        } else
            $this->$attrName = $val;
    }
}

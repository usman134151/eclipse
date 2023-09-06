<?php
namespace App\Services;

use App\Models\Tenant\CustomizeFormFields;
use App\Models\Tenant\CustomizeFormOptionFields;
use App\Models\Tenant\CustomizeForms;
use Illuminate\Support\Facades\Auth;

/**
 *  Module: Make Custom Form
 *  Dev:Sakhawat Kamran
 *   
 */

class CustomizeForm 
{
    public static function field( $title, $type, $place_holder, $value = null, $option = array() )
    {
        $options = self::addOption($option);
        $fieldSet = [
            'name' => str_replace(' ','_',strtolower($title)),
            'value'=> $value,
            'title'=> $title,
            'place_holder'=> $place_holder,
            'type' => $type,
            'option' => $options,
            'required' => true,
        ];
        return $fieldSet;
    }


    /***
     *  Add Options For Options Feild
     */
    public static function addOption($options = array())
    {
        if(!empty($options)){
            $options_feild = array();
            foreach ($options as $key => $option) {
                $options_feild[] = [
                    'label' => $option['title'],
                    'value' => $option['value']
                ];
            }
            return $options_feild;
        }    
        return null;
    }

    public function saveForm($custom_form_details,$questions,$formId=0){
        if($formId){
            $custom_form_details['updated_by'] = Auth::id();
            unset($custom_form_details['id']);
        }else{
            $custom_form_details['added_by'] = Auth::id();
            $custom_form_details['updated_by'] = Auth::id();
        }

        $form = CustomizeForms::updateOrCreate(['id'=>$formId],$custom_form_details);

        // delete existing questions 
        $questions_tbd = CustomizeFormFields::where('customize_form_id', $formId)->get();
        // and respective options
        CustomizeFormOptionFields::whereIn('form_field_id',$questions_tbd->pluck('id')->toArray())->delete();
        CustomizeFormFields::where('customize_form_id', $formId)->delete();

        foreach ($questions as $index=>$question) {
            $q = $question;
            $q['customize_form_id'] = $form->id;
            $q['form_industry_id'] = $form->industry_id;
            $q['added_by'] = Auth::id();
            $q['updated_by'] = Auth::id();
            $q['position'] = $index;
            unset($q['options']);   //removing to save form

            $sQuestion = CustomizeFormFields::create($q);

            //check if options should exist 
            if ($question['field_type'] > 2 && $question['field_type'] < 6) {

                // save options
                foreach ($question['options'] as $option) {
                    if ($option['option_field_name'] != "") { //null check
                        $option['form_id'] = $form->id;
                        $option['form_field_id'] = $sQuestion->id;
                        $option['field_type_id'] = $sQuestion->field_type;
                        $option['added_by'] = Auth::id();
                        $option['updated_by'] = Auth::id();
                        CustomizeFormOptionFields::create($option);
                    }
                }
            }

        }
        return $form->id;

    }



    public function getFormDetails($formId){

        $data['custom_form_details'] = CustomizeForms::where('id', $formId)->get();
        if(count($data['custom_form_details'])){
            $data['custom_form_details'] = $data['custom_form_details']->toArray()[0];
            $data['questions'] = CustomizeFormFields::where('customize_form_id', $formId)->orderBy('position')->get()->toArray();
            foreach ($data['questions'] as $index => $question) {
                if ($question['field_type'] > 2 && $question['field_type'] < 6) {
                    $data['questions'][$index]['options'] = CustomizeFormOptionFields::where(['form_id' => $formId, 'form_field_id' => $question['id']])->get()->toArray();
                    // dd(CustomizeFormOptionFields::where(['form_id' => $formId, 'form_field_id' => $question['id']])->get()->toArray());
                } else
                    $data['questions'][$index]['options'] = [
                        'option_field_name' => ''
                    ];
            }
            return $data;

        }
        return [];

    }

    public static function getformfield($fieldArr=[], $wireVariable=null,$tabIndex =0)
    {
        $options=[];
        if($fieldArr['field_type'] >2&& $fieldArr['field_type'] <6)
            $options = self::addFieldOption($fieldArr['options']);
        $field['set'] = [
            'id' => $fieldArr['id'],
            'name' => str_replace(' ', '_', strtolower($fieldArr['field_name'])),
            'value' => isset($fieldArr['value']) ? $fieldArr['value'] : false,
            'title' => $fieldArr['field_name'],
            'place_holder' => $fieldArr['placeholder'],
            'type' => $fieldArr['field_type'],
            'option' => $options,
            'required' => $fieldArr['required']==null ? false : true,
            'hide_response_from_provider' => $fieldArr['hide_response_from_provider'],
            'allow_redo' => $fieldArr['allow_redo'],
            // use these for future
            'scenario' => $fieldArr['scenario'],
            'document_name' => $fieldArr['document_name'],



        ];
        if($fieldArr['field_type'] == 1)    // text 
        $field['rendered'] = self::createTextField($fieldArr['field_name'], $fieldArr['placeholder'], $field['set']['required'], $wireVariable, "",  $tabIndex);
        elseif($fieldArr['field_type']==2)  //text area
            $field['rendered'] =self::createTextAreaField($fieldArr['field_name'], $fieldArr['placeholder'], $field['set']['required'], $wireVariable, "",  $tabIndex);
        elseif ($fieldArr['field_type'] == 3){  //dropdown
            $options = self::addFieldOption($fieldArr['options']);
            $field['rendered'] = self::createDropDown($options,$wireVariable,"",$fieldArr['field_name'], $field['set']['required'], $tabIndex);
        }elseif ($fieldArr['field_type'] == 4)  //checkbox
            $field['rendered'] = self::createCheckboxes($options, $wireVariable, $fieldArr['field_name'], $field['set']['required'], [], $tabIndex);
        elseif ($fieldArr['field_type'] == 5)  //radio 
            $field['rendered'] = self::createRadio($options, $wireVariable, $fieldArr['field_name'], $field['set']['required'], [], $tabIndex);
        elseif ($fieldArr['field_type'] == 6)  //file 
            $field['rendered'] = '';

        return $field;
    }


    /***
     *  Add Options For Options Feild
     */
    protected static function addFieldOption($options = array())
    {
        if (!empty($options)) {
            $options_feild = array();
            foreach ($options as $key => $option) {
                $options_feild[] = [
                    'label' => $option['option_field_name'],
                    'value' => $option['id']
                ];
            }
            return $options_feild;
        }
        return null;
    }


    protected static function getHtmlAttributes(array $attributes): string
    {
        $html = '';

        foreach ($attributes as $name => $value) {
            $html .= $name . '="' . htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8', false) . '" ';
        }

        return trim($html);
    }

    protected static function createTextField(string $fieldName ='',string $placeHolder='',bool $required=false, string $wireVariable ='', string $value='', int $tabIndex =0){
        $attributes = [
            'name' => str_replace(' ', '_', strtolower($fieldName)),
            'id' => $tabIndex,
            'class' => 'form-control', 'type'=>'text',
            'placeholder'=>$placeHolder , 
        ];
        if ($wireVariable) {
            $attributes['wire:model.defer'] = $wireVariable;
        }
        if ($required) {
            $attributes['required'] = 'true';
        }
        $html = '<input ' . self::getHtmlAttributes($attributes) .  ' "/>';

        return $html;
      
    }

    protected static function createTextAreaField(string $fieldName = '', string $placeHolder = '', bool $required = false, string $wireVariable = '', string $value = '', int $tabIndex = 0)
    {
                                              
        $attributes = [
            'name' => str_replace(' ', '_', strtolower($fieldName)),
            'id' => $tabIndex,
            'class' => 'form-control', 'rows' => '3', 'cols'=>4,
            'placeholder' => $placeHolder,
        ];
        if ($wireVariable) {
            $attributes['wire:model.defer'] = $wireVariable;
        }
        if ($required) {
            $attributes['required'] = 'true';
        }
        $html = '<textarea ' . self::getHtmlAttributes($attributes) .'>'.  ' "</textarea>';

        return $html;
    }

    public static function createDropDown(array $values,  string $wireVariable = null, $selectedValue = '', string $selectName = '', bool $required = false, int $tabIndex = 0,): string
    {
        $attributes = [
            'name' => str_replace(' ', '_', strtolower($selectName)) ,
            'id' => $tabIndex,
            'class' => 'select2 form-select',
            
        ];

        if ($wireVariable) {
            $attributes['wire:model'] = $wireVariable;
        }
        if ($required) 
            $attributes['required'] = 'true';

        if ($tabIndex) {
            $attributes['tabindex'] = $tabIndex;
        }
        $html = '<select ' . self::getHtmlAttributes($attributes) . '  aria-label="Select ' . str_replace('_', ' ', $selectName) . '">';

        $html .= '<option value="">Select an option</option>';

        foreach ($values as $value) {
            $selected = ($selectedValue == $value['value']) ? 'selected' : '';
            $html .= '<option value="' . $value['label'] . '" ' . $selected . '>' . $value['label'] . '</option>';
        }

        $html .= '</select>';

        return $html;
    }
    public static function createCheckboxes(array $values,$wireVariable = '', $displayCol = '',bool $required =false,array $selectedValues = [], $tabIndex = 0): string
    {
        $html = '';
        $name = $displayCol;
        $loop = 0;
        $wireAttribute ="";
       
        if ($required)
            $isRequired = 'required';
        else
            $isRequired = '';

        
        foreach ($values as $key=>$value) {

            if ($wireVariable) {
                $wireAttribute = 'wire:model.defer="' . $wireVariable.'.'.$value['label'].'"';
                // .$wireVariable;
            }
            // $cValue = count($checkValues) == 0 ? $value->{$valueCol} : $checkValues[$loop];

            // $isChecked = in_array($cValue, $selectedValues) ? 'checked' : '';
            $isChecked ='';
            $html .= '<div class="form-check form-check-inline">';
            $html .= '<input class="form-check-input" type="checkbox" id="' . $value['value'] . '" wire:key="'. $key.'" ' . $isChecked . ' ' . $isRequired  . ' ' . $wireAttribute . ' >';
            $html .= '<label class="form-check-label"  for="' . $value['value'] . '">' . $value['label'] . '</label>';
            $html .= '</div>';
            $loop++;
        }

        return $html;
    }

    public static function createRadio( array $values, $wireVariable ='', string $radioName = '', bool $required=false, $selectedValue = '', $tabIndex = 0): string
    {

        $html = '';
        $wireAttribute = "";

        if ($wireVariable) {
            $wireAttribute = 'wire:model.defer="' . $wireVariable . '"';
        }

        if ($required)
            $isRequired = 'required';
        else
            $isRequired = '';

        foreach ($values as $value) {
            $checked = ($selectedValue == $value['value']) ? 'checked' : '';


            $html .= '<div class=" form-check form-check-inline">';
            $html .= '<input class="form-check-input" type="radio" name="' . $radioName . '" id="' . $value['value'] . '" value="' . $value['label'] . '" ' . $checked . '' . $isRequired . ' tabindex=' . $tabIndex ." " . $wireAttribute. '>';
            $html .= '<label class="form-check-label"  for="' . $value['value'] . '">' . $value['label'] . '</label>';
            $html .= '</div>';
        }

        return $html;
    }

}

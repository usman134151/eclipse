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

    public function saveForm($custom_form_details,$questions){
        $custom_form_details['added_by'] = Auth::id();
        $custom_form_details['updated_by'] = Auth::id();

        $form = CustomizeForms::create($custom_form_details);
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
    }
}

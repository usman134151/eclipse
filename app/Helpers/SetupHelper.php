<?php

namespace App\Helpers;

use App\Models\SetupValue;

class SetupHelper
{
    /**
     * Create a dropdown based on the setup values.
     *
     * @param int $setupId The ID of the setup.
     * @param string $fieldName The name of the field.
     * @param string $orderBy The field to order by.
     * @param bool $multipleSelect Whether the dropdown should allow multiple selections.
     * @param string|null $wireVariable The name of the Livewire public variable to link the dropdown with.
     * @return string The HTML for the dropdown.
     */
/*    public static function createDropDown(int $setupId, string $fieldName, string $orderBy, bool $multipleSelect = false, string $wireVariable = null, string $selectedValue=''): string
    {
        $values = SetupValue::where('setup_id', $setupId)
            ->orderBy($orderBy)
            ->get();
    
        $attributes = [
            'name' => $fieldName,
            'id' => $fieldName,
            'class' => 'form-control',
        ];
    
        if ($multipleSelect) {
            $attributes['multiple'] = 'multiple';
        }
    
        if ($wireVariable) {
            $attributes['wire:model.defer'] = $wireVariable;
        }
    
        $html = '<select ' . self::getHtmlAttributes($attributes) . '>';
    
        $html .= '<option value="">Select an option</option>';
    
        foreach ($values as $value) {
            $selected = ($selectedValue == $value->id) ? 'selected' : '';
            $html .= '<option value="' . $value->id . '" '.$selected.'>' . $value->setup_value_label . '</option>';
        }
    
        $html .= '</select>';
    
        return $html;
    }
    

    /**
     * Get the HTML attributes for an element.
     *
     * @param array $attributes The attributes to format.
     * @return string The formatted attributes.
     */
    protected static function getHtmlAttributes(array $attributes): string
    {
        $html = '';

        foreach ($attributes as $name => $value) {
            $html .= $name . '="' . htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8', false) . '" ';
        }

        return trim($html);
    }
    public static function createDropDown(string $model, string $valueCol, string $displayCol, string $filterCol = null, $filterValue = null, string $orderBy = null, bool $multipleSelect = false, string $wireVariable = null, $selectedValue = '', string $selectName = '',int $tabIndex=0,$checkStatus=true): string
    {
        $values = self::getValuesFromDatabase($model, $valueCol, $displayCol, $filterCol, $filterValue, $orderBy);
        $multiple='';
        $attributes = [
            'name' => $selectName ?: $displayCol,
            'id' => $selectName ?: $displayCol,
            'class' => 'select2 form-select',
        ];
    
        if ($multipleSelect) {
           // $attributes['multiple'] = 'multiple';
        }
        //dd($wireVariable);
        if ($wireVariable) {
            $attributes['wire:model'] = $wireVariable;
        }

        if($multipleSelect){
            $attributes['class'] = ' select2 form-select ';
            $multiple='multiple';
            

        }
        else{
            $attributes['class'] = 'select2 form-select';
        }

        if($tabIndex){
            $attributes['tabindex'] = $tabIndex;
        }
        $html = '<select ' . self::getHtmlAttributes($attributes) .$multiple. '  aria-label="Select '.str_replace('_',' ',$selectName).'">';
    
        $html .= '<option value="">Select an option</option>';
    
        foreach ($values as $value) {
            $selected = ($selectedValue == $value->{$valueCol}) ? 'selected' : '';
            $html .= '<option value="' . $value->{$valueCol} . '" '.$selected.'>' . $value->{$displayCol} . '</option>';
        }
    
        $html .= '</select>';
    
        return $html;
    }
    public static function createCheckboxes(string $model, string $valueCol, string $displayCol, string $filterCol = null, $filterValue = null, string $orderBy = null, array $selectedValues = [],$tabIndex=0,$divClass="form-check",$name="",$wireModel='',$checkValues=[],$wireClick=''): string
    {
        $values = self::getValuesFromDatabase($model, $valueCol, $displayCol, $filterCol, $filterValue, $orderBy);

        $html = '';
      //  dd($selectedValues);
        $name==''?$name=$displayCol:$name;
        $loop=0;
        foreach ($values as $value) {
            
            
            $cValue=count($checkValues)==0?$value->{$valueCol}:$checkValues[$loop];
          
            $isChecked = in_array($cValue, $selectedValues) ? 'checked' : '';
            $html .= '<div class="'.$divClass.'">';
            $html .= '<input class="form-check-input" type="checkbox" id="' . $name . '" name="' . $name . '[]" value="' . $cValue . '" ' . $isChecked . ' tabindex='.$tabIndex.' '.$wireModel.' '.$wireClick.'>';
            $html .= '<label class="form-check-label"  for="' . $value->{$valueCol} . '">' . $value->{$displayCol} . '</label>';
            $html .= '</div>';
            $loop++;

        }

        return $html;
    }

    public static function createRadio(string $model, string $valueCol, string $displayCol, string $filterCol = null, $filterValue = null, string $orderBy = null, string $radioName = '', $selectedValue = '',$tabIndex=0,$divClass="form-check"): string
    {

        $values = self::getValuesFromDatabase($model, $valueCol, $displayCol, $filterCol, $filterValue, $orderBy);
        $html = '';

        foreach ($values as $value) {
            $checked = ($selectedValue == $value->{$valueCol}) ? 'checked' : '';
          
    
            $html .= '<div class="'.$divClass.'">';
            $html .= '<input class="form-check-input" type="radio" name="' . $radioName . '" value="' . $value->{$valueCol} . '" '.$checked.' tabindex='.$tabIndex.'>';
            $html .= '<label class="form-check-label"  for="' . $value->{$valueCol} . '">' . $value->{$displayCol} . '</label>';
            $html .= '</div>';
        }

        return $html;
    }


    private static function getValuesFromDatabase(string $model, string $valueCol, string $displayCol, string $filterCol = null, $filterValue = null, string $orderBy = null,$checkStatus=true)
    {
        $model = '\App\Models\Tenant\\' . $model;
        $query = $model::query();

        if ($filterCol && $filterValue) {
            $query->where($filterCol, $filterValue);
        }

        if($checkStatus){
            $query->where('status',1);
        }

        if ($orderBy) {
            $query->orderBy($orderBy);
        }

        return $query->get([$valueCol, $displayCol]);
    }
    public static function loadSetupValues($setupValues){ //added by Amna Bilal function to get all setup values rendered on mount
		foreach($setupValues as $key=>$setupValue){

			$setupValues[$key]['rendered'] = self::createDropDown($setupValue['parameters'][0], $setupValue['parameters'][1],$setupValue['parameters'][2], $setupValue['parameters'][3], $setupValue['parameters'][4], $setupValue['parameters'][5], $setupValue['parameters'][6],$setupValue['parameters'][7],$setupValue['parameters'][8],$setupValue['parameters'][9],$setupValue['parameters'][10]);
		}

        return $setupValues;


	}

    public static function loadSetupCheckboxes($setupValues){ //added by Amna Bilal function to get all setup values rendered on mount
		foreach($setupValues as $key=>$setupValue){

			$setupValues[$key]['rendered'] = self::createCheckboxes($setupValue['parameters'][0], $setupValue['parameters'][1],$setupValue['parameters'][2], $setupValue['parameters'][3], $setupValue['parameters'][4], $setupValue['parameters'][5], $setupValue['parameters'][6],$setupValue['parameters'][7],$setupValue['parameters'][8],$setupValue['parameters'][9],$setupValue['parameters'][10],$setupValue['parameters'][11],$setupValue['parameters'][12]);
		}
       
        return $setupValues;


	}


    public static function getSetupValueById($id)
    {
        if($id){
            
            $model = '\App\Models\Tenant\\SetupValue';
            $record = $model::find($id);
            if(!is_null($record))
                return $record->setup_value_label;
        }
        return 'N/A';
    }
    public static function getSetupValueByValue($value,$setup_id)
    {
        if($value){
            $model = '\App\Models\Tenant\SetupValue';
            $record = $model::get()->where('setup_value_label',$value)->where('setup_id',$setup_id)->first();
            if(!is_null($record))
                return $record->id;
        }
        return 0;

    }

    
    
}
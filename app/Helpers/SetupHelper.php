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
    public static function createDropDown(string $model, string $valueCol, string $displayCol, string $filterCol = null, $filterValue = null, string $orderBy = null, bool $multipleSelect = false, string $wireVariable = null, $selectedValue = '', string $selectName = ''): string
    {
        $model = '\App\Models\\' . $model;
        $query = $model::query();
    
        if ($filterCol && $filterValue) {
            $query->where($filterCol, $filterValue);
        }
    
        if ($orderBy) {
            $query->orderBy($orderBy);
        }
    
        $values = $query->get([$valueCol, $displayCol]);
    
        $attributes = [
            'name' => $selectName ?: $displayCol,
            'id' => $selectName ?: $displayCol,
            'class' => 'select2 form-select',
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
            $selected = ($selectedValue == $value->{$valueCol}) ? 'selected' : '';
            $html .= '<option value="' . $value->{$valueCol} . '" '.$selected.'>' . $value->{$displayCol} . '</option>';
        }
    
        $html .= '</select>';
    
        return $html;
    }
    
}
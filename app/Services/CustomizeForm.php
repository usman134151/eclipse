<?php
namespace App\Services;

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
}

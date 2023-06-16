<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomizeFormFields extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customize_form_id', 'form_industry_id', 'field_name', 'screen_name', 'title', 'scenario', 'field_type', 'placeholder', 'document_name', 'hide_response_from_provider', 'required', 'allow_redo','position', 'status', 'added_by', 'updated_by', 'deleted_by'
    ];
}

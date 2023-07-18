<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingCustomizeData extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_log_id',   
        'booking_log_bbid',
        'quote_id',
        'provider_application_id',
        'booking_id', 
        'service_id', 
        'customize_id',  //custom_form_field_id
        'field_title',  //custom_form_field_title
        'data_value',   //user response for custom field
        'customize_data', 
        'added_by'
    ];
}

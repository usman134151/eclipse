<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandardRate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'accommodation_id', 'accommodation_service_id', 'hours_price', 'hours_price_v', 'after_hours_price', 'after_hours_price_v', 'day_rate_price', 'day_rate_price_v', 'fixed_rate', 'fixed_rate_v', 'expedited_hour', 'expedited_hour_v', 'expedited_hour_p', 'expedited_hour_t', 'emergency_price', 'virtual_phone', 'added_by', 'updated_by', 'deleted_by',
        'fixed_rate_p',
        'fixed_rate_t',
        'day_rate_price_p',
        'day_rate_price_t',
        'service_charge',
        'service_charge_v',
        'service_charge_p',
        'service_charge_t',
        'one_time_payment_p',
        'one_time_payment_t',
        'emergency_hour',
        'emergency_hour_v',        
        'emergency_hour_p',
        'emergency_hour_t',
        'cancellation_hour1',
        'cancellation_hour1_v',
        'cancellation_hour1_t',
        'cancellation_hour1_p',
        'hours_price_t',
        'hours_price_p',
        'after_hours_price_t',
        'after_hours_price_p',
        'payment_increment',
        'payment_increment_p',
        'service_payment',
        'service_payment_p',
        'service_payment_t',
        'service_payment_v',
        'request_form_id'
    ];
}

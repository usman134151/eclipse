<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategoriesCompanyRates extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'accommodations_id', 'name', 'description', 'frequency_id', 'service_type', 'provider_return_window', 'bill_status', 'service_status', 'company_id', 'customer_id', 'service_charge', 'service_charge_v', 'one_time_payment', 'one_time_payment_v', 'emergency_hour', 'billing_increment', 'billing_increment_v', 'emergency_hour_v', 'minimum_assistance_hours', 'minimum_assistance_hours_v', 'minimum_assistance_min', 'minimum_assistance_min_v', 'payment_deduct_hour', 'cancellation_hour1', 'cancellation_hour1_v', 'cancellation_hour2', 'cancellation_percentage1', 'cancellation_percentage2', 'hours_price', 'hours_price_v', 'after_hours_price', 'after_hours_price_v', 'day_rate_price', 'day_rate_price_v', 'fixed_rate', 'fixed_rate_v', 'standard_in_person_multiply_provider', 'standard_rate_virtual_multiply_provider', 'fixed_rate_multiply_provider', 'rate_status', 'request_form_id', 'emergency_price', 'virtual_phone', 'status', 'service_end_address', 'added_by', 'updated_by', 'deleted_by'
    ];
}

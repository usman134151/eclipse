<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSetup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    protected $fillable = [
        'user_id' , 'business_name', 'business_start_time' , 'business_end_time' , 'after_start_time' , 'after_end_time' ,
        'default_colour','foreground_color','portal_url','company_logo','login_screen','welcome_text','notification_email','response_email',
        'staff_providers', 'contract_providers', 'feedback', 'deposit_form_file', 'require_provider_approval', 'rate_for_providers', 'measurement_providers',
        'rate_for_travel_time', 'currency', 'billing_days', 'service_agreements_file', 'service_url_link', 'send_qoutes',
        'customer_approve_on_login', 'policy_file', 'policy_link', 'customer_drive', '	cd_show_policy_customer', 'provider_drive', 'pd_show_policy_customer',
        'payment_payroll', 'customer_billing', 'enable_staff_providers', 'enable_contract_providers'

    ];
}

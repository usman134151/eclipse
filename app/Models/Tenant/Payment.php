<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'booking_id', 'payment_method', 'payment_method_type', 'payment_reference', 'override_payment_stripe_id', 'reschedule_payment_stripe_id', 'stripe_refund_id', 'sub_total', 'coupon_discount_amount', 'additional_label', 'additional_charge', 'additional_label_provider', 'additional_charge_provider', 'total_amount', 'outstanding_amount', 'cancellation_charges', 'reschedule_booking_charges', 'additional_override_booking_charges', 'coupon_id', 'coupon_type', 'is_override', 'override_amount', 'payment_by', 'payment_proceed_on', 'modification_fee' 
    ];
}

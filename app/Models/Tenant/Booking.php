<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_number', 'user_id', 'frequency_id', 'industry_id', 'accommodation_id', 'service_category', 'physical_address_id', 'physical_end_address_id', 'phone', 'is_additional_override_booking', 'override_booking_duration', 'isCompleted', 'service_type', 'requester_information', 'contact_point', 'poc_phone', 'company_id', 'customer_id', 'supervisor', 'billing_manager_id', 'layout', 'meeting_link', 'meeting_phone', 'meeting_passcode', 'booking_start_at', 'booking_end_at', 'booking_cancelled_at', 'provider_count', 'cancel_provider_payment', 'duration_hours', 'duration_minute', 'payment_type', 'type', 'status', 'booking_status', 'coupon_id', 'coupon_referral_type', 'provider_notes', 'customer_notes', 'private_notes', 'cancellation_notes', 'booking_reschedule_at', 'reschedule_start_at', 'reschedule_end_at', 'reschedule_by', 'reschedule_reason', 'reschedule_type', 'reschedule_until', 'reschedule_status', 'billing_address_id', 'is_completed', 'auto_assign', 'auto_notify', 'booking_notify', 'created_at', 'updated_at', 'referral_code', 'added_by', 'approved_by', 'updated_by', 'invoice_id', 'invoice_status', 'previous_logs', 'cancelled_by', 'parent_id', 'is_recurring', 'recurring_start_at', 'recurring_end_at', 'is_from_quote', 'deleted_at', 'reschedule_from', 'return_review', 'provider_response', 'admin_response'
    ];
}

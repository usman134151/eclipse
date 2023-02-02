<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingLog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'quote_id', 'frequency_id', 'bbid', 'industry_id', 'accommodation_id', 'service_category_id', 'service_type', 'requester_information', 'contact_point', 'poc_phone', 'company_id', 'customer_id', 'supervisor', 'billing_manager_id', 'layout', 'meeting_link', 'meeting_phone', 'meeting_passcode', 'specialization_id', 'physical_address_id', 'physical_end_address_id', 'phone', 'provider_count', 'booking_start_at', 'booking_end_at', 'duration_hours', 'duration_minute', 'status', 'created_at', 'updated_at', 'is_recurring', 'recurring_start_at', 'recurring_end_at', 'past' 
    ];
}

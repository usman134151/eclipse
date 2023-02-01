<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteLead extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quote_number', 'consumer', 'email', 'phone', 'company', 'industry_id', 'accommodation_id', 'service_category', 'service_type', 'booking_start_at', 'booking_end_at', 'expiration_date', 'meeting_link', 'meeting_phone', 'meeting_passcode', 'issued_at', 'pdf', 'provider_count', 'duration_hours', 'duration_minute', 'specialization_id', 'status', 'quote_status', 'notes', 'customer_id', 'booking_id', 'lead_converted', 'quote_converted', 'deleted_at', 'created_at', 'updated_at', 'service_price', 'override_amount', 'additional_charge', 'additional_label_provider', 'additional_charge_provider', 'override_appied', 'total_price', 'customer_respond', 'phy_address_name', 'phy_address_line_one', 'phy_address_line1', 'phy_address_line2', 'phy_city', 'phy_state', 'phy_zip', 'phy_latitude', 'phy_longitude', 'bill_address_name', 'bill_address_line_one', 'bill_address_line1', 'bill_address_line2', 'bill_city', 'bill_state', 'bill_zip', 'bill_latitude', 'bill_longitude', 'additional_label'
    ];
}

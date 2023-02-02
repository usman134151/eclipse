<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingServices extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_log_id', 'booking_id', 'accommodation_id', 'attendees', 'service_consumer', 'is_manual_consumer', 'is_manual_attendees', 'services', 'service_types', 'specialization', 'meeting_link', 'meeting_phone', 'meeting_passcode', 'day_rate', 'duration_day', 'duration_hour', 'duration_minute', 'start_time', 'end_time', 'provider_count', 'time_zone', 'status'
    ];
}

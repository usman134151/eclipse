<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'company_logo', 'email_enabled', 'sms_enabled', 'call_enabled', 'notification_enabled', 'default_location', 'booking_availablity', 'holiday_preferences', 'after_hour_preferences', 'last_minute_booking', 'overlapping_booking_count', 'holiday_booking_count', 'booking_break_time',
    ];
}

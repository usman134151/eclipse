<?php

namespace App\Models\Tenant;

use App\Models\User;
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
        'booking_log_id', 'booking_id', 'accommodation_id', 'attendees','is_closed',
         'service_consumer', 'is_manual_consumer', 'is_manual_attendees', 'services', 'service_types', 'specialization', 'meeting_link', 'meeting_phone', 'meeting_passcode', 'day_rate', 'duration_day', 'duration_hour', 'duration_minute', 'start_time', 'end_time', 'provider_count', 'time_zone', 'status', 'meetings'
    ];

    public function service()
    {
        return $this->hasOne(ServiceCategory::class, 'id', 'services');
    }

   

    public function services_data()
    {
        return $this->hasOne(ServiceCategory::class, 'id', 'services');
    }

    public function accommodation()
    {
        return $this->hasOne(Accommodation::class, 'id', 'accommodation_id');
    }
    public function providers()
    {
        return $this->hasMany(BookingProvider::class, 'id', 'booking_service_id');
    }
    public function checked_out_providers()
    {
        return $this->hasMany(BookingProvider::class, 'id', 'booking_service_id')->where(['check_in_status'=>3]);
    }

    public function serviceConsumerUser()
    {
        return $this->belongsTo(User::class, 'service_consumer');
    }


}

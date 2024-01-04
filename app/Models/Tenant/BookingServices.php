<?php

namespace App\Models\Tenant;

use App\Models\User;
use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingServices extends Model
{
    use HasFactory;
    // public $timestamps = false; //removed line to enable timestamps - Maarooshaa
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_log_id', 'booking_id', 'accommodation_id', 'attendees', 'attendees_manual', 'is_closed',
        'service_consumer', 'service_consumer_manual', 'is_manual_consumer', 'is_manual_attendees', 'services', 'service_types', 'specialization', 'meeting_link', 'meeting_phone', 'meeting_passcode',
        'day_rate', 'duration_day', 'duration_hour', 'duration_minute', 'start_time',
        'end_time', 'provider_count', 'time_zone', 'status', 'meetings', 'auto_assign', 'auto_notify'
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
        return $this->belongsTo(BookingProvider::class, 'id', 'booking_service_id');
    }
    public function checked_out_providers()
    {
        return $this->hasMany(BookingProvider::class, 'id', 'booking_service_id')->where(['check_in_status' => 3]);
    }

    public function serviceConsumerUser()
    {
        return $this->belongsTo(User::class, 'service_consumer');
    }


    public function specializationsArray()
    {
        $val = [];
        $s = json_decode($this->attributes['specialization']);
        if (count($s) && !is_array($s[0]))
            $val = Specialization::whereIn('id', $s)->where('status', 1)->select('name', 'id')->get()->toArray();
        // dd($val);
        return $val;
    }



    public function specializationsNameString()
    {
        $str = null;
        $s = json_decode($this->attributes['specialization']);
        if ((is_array($s)) && count($s) && !is_array($s[0])) {
            $val = Specialization::whereIn('id', $s)->where('status', 1)->pluck('name')->toArray();
            $str = count($val) ? implode(', ', $val) : null;
        } // dd($val);
        return $str;
    }
}

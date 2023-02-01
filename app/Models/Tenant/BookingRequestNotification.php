<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRequestNotification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_log_id', 'booking_id', 'service_id', 'user_id', 'type', 'status', 'request_info', 'first_notified_datetime', 'last_notified_datetime',
    ];
}

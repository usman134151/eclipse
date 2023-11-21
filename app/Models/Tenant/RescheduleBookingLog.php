<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RescheduleBookingLog extends Model
{
    use HasFactory;
    protected $table = 'reschedule_booking_log';

    protected $fillable = [
        'booking_id', 'previous_start_time', 'previous_end_time', 'current_start_time', 'current_end_time', 'reschedule_by', 'charges'
    ];
}

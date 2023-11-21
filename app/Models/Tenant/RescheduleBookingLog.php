<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RescheduleBookingLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id', 'previous_start_time', 'previous_end_time', 'rescheduled_by', 'charges'
    ];
}

<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingServiceCharges extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_id', 'booking_service_id', 'service_rate', 'business_hour_rate', 'after_hour_rate', 'emergency_hour_rate', 'virtual_rate', 'created_at', 'updated_at', 'emergency_hour_duration', 'business_hour_duration', 'after_hour_duration', 'virtual_duration', 'emergency_hour_price', 'business_hour_price', 'after_hour_price', 'virtual_price'
    ];
}

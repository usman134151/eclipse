<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderPayment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider_id', 'booking_id', 'service_charge', 'specialization_charge', 'total_charge', 'after_hours_duration', 'after_hours_price', 'business_hours_duration', 'business__hours_price', 'hours_type', 'hours_price', 'duration'
    ];
}

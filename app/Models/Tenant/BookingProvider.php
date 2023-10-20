<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingProvider extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_id', 'provider_id', 'remittance_id', 'is_override_price', 'business_hours_override_price', 'after_hours_override_price', 'additional_label_provider', 'additional_charge_provider', 'check_in_status', 'payment_status', 'payment_method', 'issued_at', 'payment_scheduled_at', 'paid_at', 'deleted_at', 'paid_amount', 'return_status', 'provider_response',
        'booking_service_id','running_late_hour','running_late_min', 'check_in_procedure_values', 'check_out_procedure_values','total_amount'
    ];

    public function user()
    {
        return $this->hasOne(User::class,'id','provider_id');
    }
    public function booking()
    {
        return $this->hasOne(Booking::class, 'id', 'booking_id');
    }
    public function booking_service()
    {
        return $this->hasOne(Booking::class, 'id', 'booking_service_id');
    }
    protected $casts = [
        'check_out_procedure_values' => 'array',
        'check_in_procedure_values' => 'array'
    ];

}

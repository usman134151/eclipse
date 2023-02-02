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
        'booking_id', 'provider_id', 'remittance_id', 'is_override_price', 'override_price', 'additional_label_provider', 'additional_charge_provider', 'check_in_status', 'payment_status', 'payment_method', 'issued_at', 'payment_scheduled_at', 'paid_at', 'deleted_at', 'paid_amount', 'return_status', 'provider_response'
    ];
}

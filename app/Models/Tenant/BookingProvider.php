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
        'booking_id', 'provider_id', 'remittance_id', 'is_override_price', 'override_price', 'service_payment_details', 'additional_payments', 'additional_label_provider', 'additional_charge_provider', 'check_in_status', 'payment_status', 'payment_method', 'issued_at', 'payment_scheduled_at', 'paid_at', 'deleted_at', 'paid_amount', 'return_status', 'provider_response',
        'booking_service_id', 'running_late_hour', 'running_late_min', 'check_in_procedure_values', 'check_out_procedure_values',
         'total_amount', 'admin_approved_payment_detail', 'time_extension_status', 'invoice_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'provider_id');
    }
    public function provider_invoice()
    {
        return $this->hasOne(ProviderInvoice::class, 'id', 'invoice_id');
    }
    public function booking()
    {
        return $this->hasOne(Booking::class, 'id', 'booking_id');
    }
    public function booking_service()
    {
        return $this->hasOne(BookingServices::class, 'id', 'booking_service_id');
    }

    public function reimbursements()
    {
        return $this->hasManyThrough(BookingReimbursement::class, Booking::class, 'id','booking_id','booking_id','id')->where('booking_reimbursements.status',1);
    }
    protected $casts = [
        'check_out_procedure_values' => 'array',
        'check_in_procedure_values' => 'array',
        'service_payment_details' => 'array',
        'additional_payments' => 'array',
        'admin_approved_payment_detail'=>'array',

    ];
}

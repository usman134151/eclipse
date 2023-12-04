<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingReimbursement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'qb_item_id', 'qb_expense_id', 'booking_id', 'provider_id','reimbursement_number', 'remittance_id', 'amount', 'reason', 'document', 'admin_repsonse','status', 'payment_status', 'payment_method', 'issued_at', 'payment_scheduled_at', 'paid_at', 'added_by', 'approved_by', 'approved_at', 'deleted_at', 'charge_to_customer'
    ];


    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }

    public function provider()
    {
        return $this->hasOne(User::class, 'id', 'provider_id');
    }
}

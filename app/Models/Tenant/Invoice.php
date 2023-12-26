<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'qb_item_id', 'qb_invoice_id', 'company_id', 'invoice_number', 'invoice_date', 'po_number',
         'invoice_due_date', 'invoice_status', 'invoice_pdf', 'total_price', 'outstanding_amount',
          'payment_reference', 'paid_on', 'supervisor_id', 'payment_method', 'supervisor_payment_status',
          'billing_manager_id','billing_address_id', 'provider_invoice_number', 'provider_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class,'invoice_id')->where('company_id',$this->company_id);
    }
    public function billing_manager()
    {
        return $this->belongsTo(User::class, 'billing_manager_id');
    }
    public function billingAddress()
    {
        return $this->belongsTo(UserAddress::class, 'billing_address_id', 'id');
    }

    public function totalPaid(){
        return $this->total_price - $this->outstanding_amount;
    }
    public function booking(): HasMany
    {
        return $this->hasMany(Booking::class,'invoice_id');
    }

}

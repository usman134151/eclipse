<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePayment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'invoice_id', 'paid_amount', 'payment_method', 'paid_date', 'outstanding_amount', 'approved_by_admin', 'created_by', 'approved_by'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}

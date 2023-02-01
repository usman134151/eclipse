<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'qb_item_id', 'qb_invoice_id', 'company_id', 'invoice_number', 'invoice_date', 'po_number', 'invoice_due_date', 'invoice_status', 'invoice_pdf', 'total_price', 'outstanding_amount', 'payment_reference', 'paid_on', 'supervisor_id', 'payment_method', 'supervisor_payment_status'
    ];
}

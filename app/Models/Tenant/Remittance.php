<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remittance extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'qb_bill_id', 'number', 'provider_id', 'amount', 'payment_status', 'payment_method', 'issued_at', 'payment_scheduled_at', 'paid_at'
    ];
}

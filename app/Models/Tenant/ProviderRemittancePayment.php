<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderRemittancePayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id', 'reason', 'total_amount'
    ];
}

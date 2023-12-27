<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderInvoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id', 'invoice_number', 'provider_invoice_number', 'invoice_date',
        'invoice_due_date', 'total_amount', 'invoice_status', 'response_by',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'provider_id');
    }
}

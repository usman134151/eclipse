<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralSetting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider_referrer_amount', 'provider_referee_amount', 'added_by', 'provider_discount_type', 'customer_referrer_amount', 'customer_referee_amount', 'customer_discount_type'
    ];
}

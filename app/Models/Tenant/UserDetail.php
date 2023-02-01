<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'stripe_customer_id', 'title', 'supervisor', 'industry', 'profile_pic', 'permission', 'gender_id', 'education', 'certification', 'address_line_one', 'address_line1', 'address_line2', 'address_line3', 'is_g_address', 'phone', 'city', 'state', 'country', 'zip', 'referral_code', 'latitude', 'longitude', 'physical_address_line_one', 'physical_address_line1', 'physical_address_line2', 'physical_phone', 'physical_city', 'physical_state', 'physical_country', 'physical_zip', 'note', 'referral_by'
    ];
}

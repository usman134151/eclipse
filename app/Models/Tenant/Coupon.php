<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'coupon_name', 'coupon_code' , 'coupon_description' , 'discount' , 'discount_type' , 'type' , 'status' , 'added_by' , 
    ];
}

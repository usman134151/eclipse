<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOtpVerification extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id' , 'type' , 'otp' , 'otp_status' , 'otp_created' , 'otp_valid_upto' ,
    ];
}

<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSetup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id' , 'business_start_time' , 'business_end_time' , 'after_start_time' , 'after_end_time' ,
        'default_colour','foreground_color','portal_url','company_logo','login_screen','welcome_text','notification_email','response_email'
    ];
}

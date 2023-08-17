<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLoginAddress extends Model
{
    use HasFactory;
    protected $table = 'user_login_address';

    protected $fillable = [
        'user_id', 'ip_address', 'browser'
    ];
}

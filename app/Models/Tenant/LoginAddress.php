<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginAddress extends Model
{
    use HasFactory;
    protected $table = 'user_login_address';
}

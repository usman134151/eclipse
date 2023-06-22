<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUserDetail extends Model
{
    use HasFactory;
    protected $table = 'role_user_details';
    protected $fillable = [
        'role_id', 'user_id', 'associated_user','is_default','permission_type',
    ];
}

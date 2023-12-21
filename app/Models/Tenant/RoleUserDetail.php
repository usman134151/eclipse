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
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function associatedUser()
    {
        return $this->hasOne(User::class, 'id', 'associated_user');
    }
}

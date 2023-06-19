<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemRoleUser extends Model
{
    use HasFactory;
    protected $table = 'system_role_user';

    protected $fillable = [
        'system_role_id',
        'user_id',
        'system_user_type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function systemRole()
    {
        return $this->belongsTo(SystemRole::class);
    }
}

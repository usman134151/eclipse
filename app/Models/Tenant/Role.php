<?php

namespace App\Models\Tenant;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }
    public function getAdminId()
    {
        $role_id = Role::where('name', 'admin')->pluck('id')->first();
        return $role_id;
    }
    public function getProviderId()
    {
        $role_id = Role::where('name', 'provider')->pluck('id')->first();
        return $role_id;
    }
    public function getSupervisorId()
    {
        $role_id = Role::where('name', 'supervisor')->pluck('id')->first();
        return $role_id;
    }
    public function getStaffId()
    {
        $role_id = Role::where('name', 'staff')->pluck('id')->first();
        return $role_id;
    }
    public function getConsumerId()
    {
        $role_id = Role::where('name', 'consumer')->pluck('id')->first();
        return $role_id;
    }
}

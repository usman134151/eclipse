<?php

namespace App\Models\Tenant;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;
    protected $table = 'role_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'role_id' , 'user_id' ,
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}

<?php

namespace App\Models\Tenant;

use App\Models\Tenant;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
### Api Related Changes (Sakhawat Kamran) #######
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    use HasApiTokens; ### Api Related Changes (Sakhawat Kamran) #######
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function booted()
    {
        static::updating(function (self $user) {
            if ($user->isOwner()) {
                // We update the tenant's email when the admin user's email is updated
                // so that the tenant can find his account even after email change.
                Tenant::where('email', $user->getOriginal('email'))
                ->update($user->only(['email']));
            }
        });
    }

    /**
     * Is this user the "organization" owner.
     *
     * @return bool
     */
    public function isOwner()
    {
        // We assume the superadmin is the first user in the DB.
        // Feel free to change this logic.
        return $this->getKey() === 1;
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getGravatarUrlAttribute()
    {
        return "https://www.gravatar.com/avatar/" . md5(strtolower(trim($this->email)));
    }
   
    public function role()

    {
        return $this->hasOne(RoleUser::class);
    }
}


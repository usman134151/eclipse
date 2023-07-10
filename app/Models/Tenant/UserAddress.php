<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'address_name', 'address_type', 'address_line_one', 'address_line1', 'address_line2', 'phone', 'city', 'state', 'country', 'zip', 'notes', 'latitude', 'longitude', 'default',
        'user_address_type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function addresses()
    {
        return $this->morphTo();
    }
}

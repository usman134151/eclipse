<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamProviders extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id', 'provider_id', 'status'
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function team()
    // {
    //     return $this->belongsTo(Team::class);
    // }
}

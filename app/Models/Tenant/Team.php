<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'status', 'provider_count',
    ];

    public function providers() :BelongsToMany
    {
        return $this->belongsToMany(User::class, 'team_providers','team_id','provider_id')->withTimestamps();
    }

    public function accommodations(): BelongsToMany
    {
        return $this->belongsToMany(Accommodation::class, 'team_accommodations')->withTimestamps();
    }
    public function specializations(): BelongsToMany
    {
        return $this->belongsToMany(Specialization::class, 'team_specializations')->withTimestamps();
    }
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(ServiceCategory::class, 'team_services', 'team_id', 'service_id')->withTimestamps();
    }
}

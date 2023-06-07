<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Specialization extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' , 'description' , 'image' , 'status' , 'added_by', 'updated_by'
    ];

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'team_specializations')->withTimestamps();
    }
}

<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' , 'price', 'description', 'category' , 'image' , 'other' , 'added_by' ,
    ];

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'team_services')->withTimestamps();
    }

    public function associateServices()
    {
        return $this->hasMany(AssociateService::class);
    }
}

<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Accommodation extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name', 'image' , 'status' , 'added_by' , 'description' ,
    ];

    public function services(){
        return $this->hasMany(ServiceCategory::class,'accommodations_id');
    }

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'team_accomodations', 'accommodation_id')->withTimestamps();
    }
    public function serviceCategories(){
        return $this->hasMany(ServiceCategory::class, 'accommodations_id');
    }
}

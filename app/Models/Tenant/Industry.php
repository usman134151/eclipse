<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Industry extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'status' , 'added_by' , 'updated_by' , 'deleted_by'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_industries');
    }
}

<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $grauded = [
       
    ];

    public function specializations()
    {
        return $this->belongsToMany(Specialization::class, 'service_specializations', 'service_id', 'specialization_id');
    }
}

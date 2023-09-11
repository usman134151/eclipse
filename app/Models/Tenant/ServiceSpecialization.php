<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSpecialization extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'service_id', 'specialization_id', 'specialization_price', 'specialization_price_v','specialization_price_t','specialization_price_p', 'added_by'
    ];
    public function specialization()
    {
        return $this->belongsTo(Specialization::class, 'specialization_id');
    }
}

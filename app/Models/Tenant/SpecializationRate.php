<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecializationRate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_id', 'accommodation_id', 'accommodation_service_id', 'required_specialization', 'specialization', 'specialization_other', 'specialization_rate', 'specialization_rate_v', 'specialization_rate_t','specialization_rate_p'.'model_type','added_by', 'updated_by', 'deleted_by'
    ];
}

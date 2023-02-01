<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandardRate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'accommodation_id', 'accommodation_service_id', 'hours_price', 'hours_price_v', 'after_hours_price', 'after_hours_price_v', 'day_rate_price', 'day_rate_price_v', 'fixed_rate', 'fixed_rate_v', 'expedited_hour', 'expedited_hour_v', 'emergency_price', 'virtual_phone', 'added_by', 'updated_by', 'deleted_by'
    ];
}

<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderSpecificSchedule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'provider_specific_schedules';
    protected $fillable = [
        'user_id' , 'scheduled_date' ,'from_time','to_time','notes'
    ];
}

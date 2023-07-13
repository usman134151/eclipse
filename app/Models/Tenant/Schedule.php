<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Schedule extends Model
{
    use HasFactory;

  

    protected $fillable = [
        'model_id', 
        'model_type', //company =>2 , provider =>3 , department => 4
        'timezone_id',
        'time_format',
        'working_days'

    ];
    // Define the relation with ScheduleTimeslot model
    public function timeslots()
    {
        return $this->hasMany(ScheduleTimeslot::class);
    }

    // Define the relation with ScheduleHoliday model
    public function holidays()
    {
        return $this->hasMany(ScheduleHoliday::class);
    }

    public function setWorkingDays($value)
    {
        $this->attributes['working_days'] = $value;
    }



}

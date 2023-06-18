<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ScheduleTimeslot extends Model
{
    use HasFactory;
    protected $fillable = ['schedule_id','timeslot_day','timeslot_type','timeslot_start_time','timeslot_end_time'];
    // Define the relationship with Schedule
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

}

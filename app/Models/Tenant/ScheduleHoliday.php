<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ScheduleHoliday extends Model
{
    use HasFactory;

    protected $fillable = ['schedule_id','holiday_date','holiday_day' ];
    // Define the relationship with Schedule
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

}

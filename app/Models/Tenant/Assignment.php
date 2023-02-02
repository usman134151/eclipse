<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_id', 'service_id', 'assignment_start_date' , 'assignment_end_date' , 'assignment_start_time' , 'assignment_end_time' , 'name' , 'status' , 'cancel_reason' , 'cancelled_by' ,  'updated_by' , 'added_by' ,
    ];
}

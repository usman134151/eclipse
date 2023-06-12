<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTeamStaff extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_team_id', 'admin_staff_id'
    ];
}

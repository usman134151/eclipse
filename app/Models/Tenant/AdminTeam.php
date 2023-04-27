<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTeam extends Model
{
    use HasFactory;

    protected $table = 'admin_teams';

    protected $fillable = [
        'team_name',
        'admin_id',
        'team_phone',
        'team_email',
        'team_description',
        'team_notes'
    ];


}

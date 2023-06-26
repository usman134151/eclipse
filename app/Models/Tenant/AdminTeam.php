<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        'team_notes','team_image'
    ];
    public function staff(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'admin_team_staff', 'admin_team_id', 'admin_staff_id')->withTimestamps();
    }


}

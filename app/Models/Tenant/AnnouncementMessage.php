<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncementMessage extends Model
{
    use HasFactory;
    protected $fillable = [
        'message', 'on_log_in_screen', 'on_dashboard', 'display_to_providers', 'display_to_customers',
        'display_to_admin', 'days'
    ];
}

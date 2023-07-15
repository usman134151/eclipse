<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationTemplates extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'trigger', 'role_id', 'name', 'slug', 'redirect_to', 'body', 'status', 'notification_type'
    ];
    public function notificationTemplateRoles()
    {
        return $this->hasMany(NotificationTemplateRoles::class, 'notification_id');
    }
}

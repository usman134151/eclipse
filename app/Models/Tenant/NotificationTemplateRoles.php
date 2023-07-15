<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationTemplateRoles extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notification_id', 'role_id', 'notification_subject', 'notification_text', 'admin_roles', 'customer_roles', 'notification_email', 'notification_reply_to'
    ];
    
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function notification()
    {
        return $this->belongsTo(NotificationTemplates::class,'notification_id');
    }
    public function notificationTemplateRoleFrequencies()
    {
        return $this->hasMany(NotificationTemplateRoleFrequencies::class, 'notification_template_role_id');
    }
    public static function createOrUpdate(array $data)
    {
        if (array_key_exists('id', $data)) {
            $record = static::where('id','=',$data['id'])->first();
            if ($record) {
                unset($data['id']);
                $record->update($data);
            }else{
                unset($data['id']);
                $record = static::create($data);
            }
        } else {
            $record = static::create($data);
        }
        return $record;
    }
}

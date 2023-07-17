<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationTemplateRoleFrequencies extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="notification_role_frequency";
    protected $fillable = [
        'notification_template_role_id', 'frequency_days', 'frequency_hour', 'frequency_min', 'frequency_type'
    ];
    
    public function notificationRole()
    {
        return $this->belongsTo(NotificationTemplateRoles::class,'notification_template_role_id');
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

<?php

namespace App\Imports;

use App\Models\Tenant\NotificationTemplateRoles;
use App\Models\Tenant\NotificationTemplates;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;

class EmailNotificationsImport implements ToModel
{
    public function model(array $row)
    {
        if($row[0] && $row[0]!="Notification"){
            $notification = new NotificationTemplates([
                'trigger_type_id'  => $row[11],
                'trigger'  => $row[0],
                'name' => $row[0],
                'slug' => Str::slug($row[0], '_'),
                'notification_type' => 1
            ]);
            $notification->save();
            if($row[1] && $row[2] && $row[1]!="--" && $row[2]!="--"){
                $roleAdmin=new NotificationTemplateRoles([
                    'notification_id'  => $notification->id,
                    'role_id' => 1, //admin
                    'notification_subject' => Str::limit($row[2], 250),
                    'notification_text'   => $row[1],
                ]);
                $roleAdmin->save();
            }
            if($row[3] && $row[4] && $row[3]!="--" && $row[4]!="--"){
                $roleProvider=new NotificationTemplateRoles([
                    'notification_id'  => $notification->id,
                    'role_id' => 2, //admin
                    'notification_subject' => Str::limit($row[4], 250),
                    'notification_text'   => $row[3],
                ]);
                $roleProvider->save();
            }
            if($row[5] && $row[6] && $row[5]!="--" && $row[6]!="--"){
                $roleConsumer=new NotificationTemplateRoles([
                    'notification_id'  => $notification->id,
                    'role_id' => 7, //admin
                    'notification_subject' => Str::limit($row[6], 250),
                    'notification_text'   => $row[5],
                ]);
                $roleConsumer->save();
            }
            if($row[7] && $row[8] && $row[7]!="--" && $row[8]!="--"){
                $roleSuper=new NotificationTemplateRoles([
                    'notification_id'  => $notification->id,
                    'role_id' => 5, //admin
                    'notification_subject' => Str::limit($row[8], 250),
                    'notification_text'   => $row[7],
                ]);
                $roleSuper->save();
            }
            if($row[9] && $row[10] && $row[9]!="--" && $row[10]!="--"){
                $roleStaf=new NotificationTemplateRoles([
                    'notification_id'  => $notification->id,
                    'role_id' => 3, //admin
                    'notification_subject' => Str::limit($row[10], 250),
                    'notification_text'   => $row[9],
                ]);
                $roleStaf->save();
            }
            // return $notification;
        }
        // Log::info($row);
    }
}

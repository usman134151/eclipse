<?php
namespace app\Services\App;

use App\Models\NotificationTemplates;

class NotificationService{

    public function createNotification($notification){
        $notification->save();
        return $notification;
    }
}
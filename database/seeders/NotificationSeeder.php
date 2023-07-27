<?php

namespace Database\Seeders;

use App\Imports\EmailNotificationsImport;
use App\Imports\SMSNotificationsImport;
use App\Imports\SystemNotificationsImport;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('notification_role_frequency')->delete();
        DB::table('notification_template_roles')->delete();
        DB::table('notification_templates')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $email_notification = storage_path('app\email_notifications.xlsx'); // Path to your Excel sms_notification
        Excel::import(new EmailNotificationsImport, $email_notification);

        $sms_notification = storage_path('app\sms_notifications.xlsx'); // Path to your Excel sms_notification
        Excel::import(new SMSNotificationsImport, $sms_notification);

        $system_notification = storage_path('app\system_notifications.xlsx'); // Path to your Excel sms_notification
        Excel::import(new SystemNotificationsImport, $system_notification);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $notification_tags = array(
			["name"=>"@admin_company"],
			["name"=>"@booking_start_at"],
			["name"=>"@consumer"],
			["name"=>"@booking_end_at"],
			["name"=>"@booking_duration"],
			["name"=>"@booking_location"],
			["name"=>"@services"],
			["name"=>"@service_type"],
			["name"=>"@dashboard"],
			["name"=>"@reports"],
            ["name"=>"@Quote_Number"],
            ["name"=>"@Accommodation"],
            ["name"=>"@Specialization(s)"],
            ["name"=>"@Start_Date"],
            ["name"=>"@State_Time"],
            ["name"=>"@End_Date"],
            ["name"=>"@End_Time "],
            ["name"=>"@Company"],
            ["name"=>"@Reimbursement_Name"],
            ["name"=>"@Reimbursement_Amount"],
            ["name"=>"@Assigned_Providers"],
            ["name"=>"@Provider_Payment"],
            ["name"=>"@Billing_Total"],
            ["name"=>"@Requester"],
            ["name"=>"@Booking_Number"],
        );
        foreach ($notification_tags as $tag) {
            $existingTag = DB::table('notification_tags')->where('name', $tag['name'])->first();
            if (!$existingTag) {
                DB::table('notification_tags')->insert($tag);
            }
        }
    }
}

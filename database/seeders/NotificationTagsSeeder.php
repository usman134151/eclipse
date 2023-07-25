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
            ["name"=>"@Booking_Number"],
            ["name"=>"@Requester"], 
            ["name"=>"@Admin"],       
            ["name"=>"@password_reset_link"],
            ["name"=>"@Reset_password"],
            ["name"=>"@alert_admin"],
            ["name"=>"@Provider_Response"],
            ["name"=>"@Approve_Request"],
            ["name"=>"@Deny_Request"],
            ["name"=>"@Customer"],
            ["name"=>"@document_title"],
            ["name"=>"@document_name"],
            ["name"=>"@OTP"],
            ["name"=>"@reason_for_decline"],
            ["name"=>"@message_preview"],
            ["name"=>"@assignment_details"],
            ["name"=>"@feedback_prompt"],
            ["name"=>"@customers_comments"],
            ["name"=>"@Supervisor"],
            ["name"=>"@Assignment_preview"],
            ["name"=>"@Applicant_name"],
            ["name"=>"@user_name"],
            
        );
        foreach ($notification_tags as $tag) {
            $existingTag = DB::table('notification_tags')->where('name', $tag['name'])->first();
            if (!$existingTag) {
                DB::table('notification_tags')->insert($tag);
            }
        }
    }
}

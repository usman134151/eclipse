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
        DB::table('notification_tags')->truncate();
        //
        $notification_tags = array(
			["name"=>"@admin_company"],
			// ["name"=>"@booking_start_at"],
			["name"=>"@consumer"],
			// ["name"=>"@booking_end_at"],
			["name"=>"@booking_duration"],
			["name"=>"@booking_location"],
			// ["name"=>"@services"],
			["name"=> "@booking_service_type"],
			["name"=>"@dashboard"],
			["name"=>"@reports"], 
            ["name"=>"@billing_total"],
            ["name"=>"@booking_number"],
            ["name"=>"@customer"],
            ["name"=>"@document_title"],
            ["name"=>"@document_name"],
            ["name"=>"@otp"],
            ["name"=>"@company"],
            ["name"=>"@reimbursement_Name"],
            ["name"=>"@reimbursement_Amount"],
            ["name"=>"@assigned_Providers"],
            ["name"=>"@reason_for_decline"],
            ["name"=>"@message_preview"],
            ["name"=>"@assignment_details"],
            ["name"=>"@requester"], 
            ["name"=>"@admin"], 
            ["name"=>"@feedback_prompt"],
            ["name"=>"@customers_comments"],
            ["name"=>"@supervisor"],
            ["name"=>"@assignment_preview"],
            ["name"=>"@applicant_name"],
            ["name"=>"@user_name"],    
            ["name"=>"@provider_payment"],
            ["name"=>"@password_reset_link"],
            ["name"=>"@reset_password"],
            ["name"=>"@alert_admin"],
            ["name"=>"@provider_response"],
            ["name"=>"@approve_request"],
            ["name"=>"@deny_request"],
            ["name"=>"@quote_Number"],
            ["name"=>"@accommodation"],
            ["name"=>"@specialization(s)"],
            ["name"=> "@booking_start_date"],
            ["name"=> "@booking_start_time"],
            ["name"=> "@booking_end_date"],
            ["name"=> "@booking_end_time"],
            ["name" => "@recipient"],
            ["name" => "@booking_company"],
            ["name" => "@booking_accommodation"],
            ["name" => "@booking_service"],
            ["name" => "@booking_specializations"],
            ["name" => "@booking_provider_count"],
            ["name" => "@button_login_page"],
            ["name" => "@button_password_setup"],
            ["name" => "@admin_email"],
            ["name" => "@credential_title"],
            ["name" => "@credential_expiration"],
            ["name" => "@provider_applicant_name"],
            ["name" => "@button_launch_screening"],
            ["name" => "@upcoming_bookings_week"],
            ["name" => "@upcoming_bookings_24"],
            ["name" => "@booking_assigned_providers"],
            ["name" => "@booking_provider_introduction"],
            ["name" => "@booking_requester"],
            ["name" => "@booking_information_requester"],
            ["name" => "@booking_information_request"],
            ["name" => "@booking_infromation_request_message"],
            ["name" => "@booking_service_consumers"],
            ["name" => "@feedback_received_provider"],
            ["name" => "@feedback_customer_comment"],
            ["name" => "@booking_provider_check"],
            ["name" => "@reimbursement_number"],
            ["name" => "@reimbursement_title"],
            ["name" => "@reimbursement_amount"],
            ["name" => "@invoice_number"],
            ["name" => "@invoice_refund_amount"],



           
            
        );
        foreach ($notification_tags as $tag) {

            $existingTag = DB::table('notification_tags')->where('name', $tag['name'])->first();

            if (!$existingTag) {
                $tag['name'] = strtolower($tag['name']);
                DB::table('notification_tags')->insert($tag);
            }
        }
    }
}

<?php
namespace app\Services\App;

use App\Models\NotificationTemplates;
use App\Models\NotificationTag;
use App\Models\Tenant\NotificationTemplateRoleFrequencies;
use App\Models\Tenant\NotificationTemplateRoles;
use App\Models\Tenant\Role;
use App\Models\Tenant\SystemRole;

class NotificationService{

    public function createNotification($notification){
        $notification->save();
        return $notification;
    }

    public static function sendNotification($triggerName,$data){
        //get notification trigger 
        
        //get list of users to send notification to
        //loop to send
        //replace data in loop
        //send notification

    }

    public static function replaceData($triggerType,$data){
        if ($triggerType == 5) {
                $replacements[] = array(
                    "@dashboard_url" =>  $dashboard_url,

                    '@dashboard'    => '<h3 class="mb-3 mt-0"><a href="' . $dashboard_url . '" class="btn btn-primary text-center">Go to Dashboard</a></h3><br> <span style="line-height: 4px;">Or copy and paste the URL into your browser:</span><br><span style="line-height: 16px;font-size: 14px;">' . URL::to($userData->roles()->first()->name . '/dashboard') . '</span> ',
                    "@username" => $userData->name ?? '',
                    "@document_name" => $document_name ?? '',
                    "@document_category" => $document_category ?? '',
                    "@provider" => $providerName ?? '',
                    "@admin_company" => tenant()->company,
                    "@admin" => $admin->name,
                    "@email_provider" => $userData->email ?? '',
                    "@view_booking" =>  str_replace('https://', '', URL::to($userData->roles()->first()->name . '/bookings/' . encrypt($data['booking_id']))) ?? '',
                    //	"@view_booking" =>  '<h3 class="mb-3 mt-0"><a href="'.$view_booking.'" class="btn btn-primary text-center">View Assignment</a></h3>',

                    "@recipient" => $userData->name ?? '',
                    "@email" => $userData->email ?? '',
                    "@button_login_page" => $login_button ?? '',
                    "@button_password_setup" => $reset_password ?? '',

                );
        }
        elseif($triggerType==6){
            $admin=$data['admin'];
            $bookingData=$data['bookingData'];
            $userData=$data['userData'];
            $replacements[] = array(
            "@username" => $username ?? '',
            "@document_name" => $document_name ?? '',
            "@document_category" => $document_category ?? '',
            "@provider" => $providerName ?? '',
            "@admin_company" => tenant()->company,
            "@admin" => $admin->name,
            "@customer" => $customer ?? '',
            "@consumer" => $customer ?? '',
            "@requester" => $customer ?? '',
            "@booking_start_date" => $bookingData->booking_start_at ?  date_format(date_create($bookingData->booking_start_at), "d/m/Y") : '',
            "@booking_start_time" => $bookingData->booking_start_at ?  date_format(date_create($bookingData->booking_start_at), "h:i A") : '',
            "@booking_end_time" => $bookingData->booking_end_at ?  date_format(date_create($bookingData->booking_end_at), "h:i A") : '' ,
            "@booking_end_date" =>   $bookingData->booking_end_at ?  date_format(date_create($bookingData->booking_end_at), "d/m/Y") : '' ,
            "@booking_date" =>  formatDate($bookingData->booking_start_at) ?? '',
            "@booking_company" => $bookingData->company ? $bookingData->company->name : "",
            "@booking_location" =>  $location ?? '',
            "@booking_number" =>  $bookingData->booking_number ?? '',
            "@booking_provider_count" =>  $bookingData->provider_count ?? '',
            "@booking_duration" =>  Carbon::parse($bookingData->booking_end_at)->diffAsCarbonInterval(Carbon::parse($bookingData->booking_start_at))->forHumans() ?? '',
            "@payment_for_provider" => formatPayment($payment_for_provider) ?? '',
            "@email_provider" => $userData->email ?? '',
            "@email_consumer" => $bookingData->customer->email ?? '',
            "@assigned_providers" => $assignedproviders ?? '',
            "@view_booking" =>  str_replace('https://', '', URL::to($userData->roles()->first()->name . '/bookings/' . encrypt($data['booking_id']))) ?? '',

            "@booking_rescheduled_from" => $bookingData->rescheduled_from ?? '',
            "@frequency" => $frequency[$bookingData->frequency_id] ?? '',
            "@booking_requester_company" => $bookingData->customer->company_data->name ?? '',
            "@booking_requester_phone" => $bookingData->poc_phone ?? '',
            "@booking_requester_poc" => $bookingData->contact_point ?? '',
            "@billing_manager" => $bookingData->billing_manager ? $bookingData->billing_manager->name : '',
            "@industry" => "",
            //  $bookingData->customer ? ($bookingData->customer->users_detail->industries ? $bookingData->customer->users_detail->industries->name : '') : '',
            "@booking_accommodation" => isset($accommodationArray) ? implode(',', $accommodationArray) : '',
            "@booking_service_type" => isset($serviceTypes) ? implode(',', $serviceTypes) : '',
            "@booking_specializations" => isset($serviceSpecialization) ? implode(',', $serviceSpecialization) : '',
            "@consumers" => isset($serviceConsumer) ? implode(',', $serviceConsumer) : '',
            "@participant" => isset($serviceParticipant) ? implode(',', $serviceParticipant) : '',
            "@city" => $bookingData->physicalAddress ? $bookingData->physicalAddress->city : '',
            "@state" => $bookingData->physicalAddress ? $bookingData->physicalAddress->state : '',
            "@zip_code" => $bookingData->physicalAddress ? $bookingData->physicalAddress->zip : '',
            "@status" => $frequency[$bookingData->frequency_id] ?? '',
            "@arrival_notes" => $bookingData->physicalAddress ? $bookingData->physicalAddress->notes : '',
            "@created_at" => formatDateTime($bookingData->created_at) ?? '',

            "@booking_service_total" => $bookingData->payment ? formatPayment($bookingData->payment->sub_total) : '',
            "@booking_discount" => $bookingData->payment ? formatPayment($bookingData->payment->coupon_discount_amount) : '',
            "@booking_sub_total" => $bookingData->payment ? formatPayment($bookingData->payment->total_amount) : '',
            "@booking_override_amount" => $bookingData->payment ? formatPayment($bookingData->payment->override_amount) : '$0.00',
            "@payment_detail_provider_rate_sum" => $bookingData->payment ? formatPayment($total) : '',
            "@booking_additional_provider_payment" => $bookingData->payment ? formatPayment($additional) : '',
            "@booking_total_provider_payment" => $bookingData->payment ? formatPayment($total + $additional) : '',
            "@booking_modification_fee" => $bookingData->payment ? formatPayment($bookingData->payment->modification_fee) : '$0.00',
            // "@booking_net_total" => formatPayment($netTotal) ?? '',

            "@private_notes" => $bookingData->private_notes ?? '',
            "@booking_customer_notes" => $bookingData->customer_notes ?? '',
            "@provider_notes" => $bookingData->provider_notes ?? '',

            "@button_login_page" => $login_button ?? '',



            "@booking_service" => isset($serviceArray) ? implode(',', $serviceArray) : '',
            );
        }

       

            
    }

}
<?php

use App\Models\Tenant\Booking;
use App\Models\Tenant\Logs;
use App\Models\Tenant\NotificationTemplates;
use App\Models\Tenant\NotificationTemplateRoles;

use App\Models\Tenant\SmsTemplate;
use App\Models\Tenant\SystemRoleUser;
use App\Models\Tenant\BookingServices;
use App\Http\Controllers\Tenant\Mails\createEmail;

use App\Models\Tenant\User;
use App\PloiManager;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

if (!function_exists('ploi')) {
    function ploi(): PloiManager
    {
        return app(PloiManager::class);
    }
}
if (!function_exists('userPermissions')) {
    function userPermissions()
    {
        $system_role_users = SystemRoleUser::where('user_id', auth()->user()->id)->get();
        $combinedSectionRights = collect();
        foreach ($system_role_users as $system_role_user) {
            $sectionRights = $system_role_user->systemRole->sectionRights()->get([
                'system_role_id',
                'section_id',
                'right_id'
            ]);
            $combinedSectionRights = $combinedSectionRights->merge($sectionRights);
        }
        return $combinedSectionRights;
    }
}

if (!function_exists('userHasPermission')) {
    function userHasPermission($section_id, $right_id)
    {
        $isSuperAdmin = Session::get('isSuperAdmin');
        if ($isSuperAdmin) {
            return true;
        }
        $userPermissions = Session::get('userPermissions');
        if ($userPermissions) {
            foreach ($userPermissions as $item) {
                if (($item['section_id'] === $section_id && $item['right_id'] === $right_id) || ($item['section_id'] === $section_id && $item['right_id'] == 5)) {
                    if (($item['section_id'] === $section_id && $item['right_id'] === $right_id) || ($item['section_id'] === $section_id && $item['right_id'] == 5)) {
                        return true; // Found a matching record, return true
                    }
                }
            }
            return false; // No matching record found, return false
        }
    }


    if (!function_exists('addLogs')) {
        function addLogs($data)
        {
            // try {
            Logs::create([
                'action_by'     => $data['action_by'],
                'action_to'     => $data['action_to'],
                'item_type'     => $data['item_type'],
                'type'                 => isset($data['type']) ? $data['type'] : '',
                'message'         => $data['message'],
                'ip_address'     => \request()->ip(),
                'request_from' => isset($data['request_from']) ? $data['request_from'] : '',
                'request_to'    => isset($data['request_to']) ? $data['request_to'] : ''
            ]);
            return true;
            // } catch (\Exception $e) {
            //     return;
            //  Redirect::back()->send()->with(['error_message' => 'There is something wrong.Please try again later.']);
            // }
        }
    }
            // hammad 16-10-23
    if (!function_exists('callLogs')) {
        function callLogs($action_to, $item_type, $type,$customMessage=false)
        {
            $messageItemType = ucwords(str_replace('_', '-', $item_type)) . ' ';
            if(!$customMessage){
                $message=$messageItemType . $type .'d by ' .\Auth::user()->name;
            }
            else
               $message=$customMessage;
            addLogs([
                'action_by' => \Auth::id(),
                'action_to' => $action_to,
                'item_type' => $item_type,
                'type' => $type,
                'message' => $message,
                'ip_address' => \request()->ip(), 
            ]);
        }
    }
}
if (!function_exists('getTemplate')) {

    function getTemplate($trigger, $type)
    {
        // $notif_type = 1;
        if ($type == "email_template")
            $notif_type = 1;

        if ($type == "sms_template")
            $notif_type = 2;

        if ($type == "notification_template")
            $notif_type = 3;


        $notification_templateId = NotificationTemplates::where('trigger', 'like', '%' . $trigger . '%')
            ->where(['notification_type' => $notif_type])
            ->pluck('id')->first();
        return $notification_templateId;
    }
}
if (!function_exists('sendTemplatemail')) {

    function sendTemplatemail($data, $otherParams = null)
    {
        try {


            // return false;
            if ((!isset($data['booking_id']) || empty($data['booking_id'])) && $data['mail_type'] == 'booking') {
                return false;
            }
            if (!isset($data['booking_id']))
                $data['booking_id'] = 0;

            $sendEmail        = false;
            $sendSMS        = false;
            if (isset($data['email']) && !empty($data['email'])) {
                $sendEmail        = true;
            }
            // if (isset($data['phone']) && !empty($data['phone'])) {
            //     $sendSMS        = true;
            // }

            $userData        = User::find($data['user_id']);

            // if (!isset($userData->users_setting)) return false;
            // if ($userData->users_setting->email_enabled == 0 || $userData->users_setting->email_enabled == null) {
            //     $sendEmail        = false;
            // }

            // if ($userData->users_setting->sms_enabled == 0 || $userData->users_setting->sms_enabled ==  null) {
            //     $sendSMS        = false;
            // }



            // if (!$sendEmail && !$sendSMS) {
            //     return false;
            // }

            $admin            = User::find(1);
            $location        = "-";
            $payment_for_provider     = 0;
            $assignedproviders    = "";

            $dashboard_url    = url($userData->roles()->first()->name . '/dashboard');
            $dashboard_url    =  str_replace('https://', '', URL::to($userData->roles()->first()->name . '/dashboard'));
            $view_booking    =   str_replace('https://', '', URL::to($userData->roles()->first()->name . '/bookings/' . encrypt($data['booking_id'])));
            $login_button = '<div style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:4px;margin:0;padding:15px 15px 15px 15px;color:#000000;"><a style="font-family:\'-apple-system\', BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\';color:#fff;text-decoration:none;background-color:#0a1e46;border-bottom:8px solid #0a1e46;border-left:18px solid #0a1e46;border-right:18px solid #0a1e46;border-top:8px solid #0a1e46;" href="' . $dashboard_url . '">Log in</a></div>';

            if ($data['mail_type'] == 'account') {
                $reset_password = '<div style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:4px;margin:0;padding:0 30px 25px 25px;color:#000000;"><a style="font-family:\'-apple-system\', BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\';color:#fff;text-decoration:none;background-color:#0a1e46;border-bottom:8px solid #0a1e46;border-left:18px solid #0a1e46;border-right:18px solid #0a1e46;border-top:8px solid #0a1e46;" href="' . str_replace('https://', '', URL::to('/forgot-password/')) . '">Reset Password</a></div>';
            }
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


            // if (!empty($data['mail_type']) && $data['mail_type'] == 'drive') {

            //     $document    = Document::find($data['booking_id']);
            //     $document_name    = $document->document_name;
            //     $document_category    = $document->document_title;
            //     $username    = $document->user->name;

            //     $replacements[] = array(

            //         "@username" => $username,
            //         "@document_name" => $document_name,
            //         "@document_category" => $document_category,

            //     );
            // }





            if (!empty($data['mail_type']) && $data['mail_type'] == 'booking') {
                if (!empty($otherParams)) {
                    $invoiceNumber = $otherParams['invoice_number'];
                    $supervisor = isset($otherParams['supervisor']) ? $otherParams['supervisor'] : '';
                    $invoiceDate = $otherParams['invoice_issue_date'];
                    $invoiceDueDate = $otherParams['invoice_due_date'];
                    $invoiceTotal = $otherParams['invoice_total'];
                    $invoicePdf = isset($otherParams['invoice_pdf']) ? $otherParams['invoice_pdf'] : '';
                }
                $bookingData    = Booking::find($data['booking_id']);
                $customer        =  $bookingData->customer ? $bookingData->customer->name : '';

                if ($bookingData->physicalAddress && $bookingData->service_type == 1) {
                    $location    = getCombineLocation($bookingData->physical_address_id);
                }
                if ($bookingData->booking_provider) {
                    $ids    = array_column($bookingData->booking_provider->toArray(), 'provider_id');
                    $assignedproviders    = getUsersName($ids);
                }

                // payment
                // if ($data['templateId'] == 37) {
                //     $bookingProvider = BookingProvider::where(['booking_id' => $data['booking_id'], 'provider_id' => $data['user_id']])->first();
                //     $payment_for_provider  = Helper::get_provider_booking_service_price_total($data['booking_id'], $data['user_id']);
                //     $payment_for_provider += ($bookingData->payment->additional_charge_provider + $bookingProvider->additional_charge_provider);
                // }
                $providerName    = $userData->name;

                if (isset($data['provider_id']) || !empty($data['provider_id'])) {
                    $provider    = User::find($data['provider_id']);
                    $providerName    = $provider->name;
                }

                $total              = 0;
                $additional        = 0;
                // if ($bookingData->payment->additional_charge_provider) {
                //     $additional = $bookingData->payment->additional_charge_provider * count($bookingData->booking_provider);
                // }

                // if (count($bookingData->booking_provider)) {
                //     foreach ($bookingData->booking_provider as $bProvider) {
                //         $total += Helper::get_provider_booking_service_price_total($bookingData->id, $bProvider->provider_id);
                //         $additional += $bProvider->additional_charge_provider;
                //     }
                // }

                // $customerCharge = ($bookingData->payment->override_amount) ?? $bookingData->payment->total_amount;
                // $netTotal = $customerCharge -  ($total + $additional);
                // $netTotal = $netTotal + $bookingData->payment->modification_fee;

                $frequency        = array(1 => 'One Time', 2 => 'Daily', 3 => 'Weekly', 4 => 'Monthly', 5 => 'Week Daily');
                $serviceType = [1 => 'In Person', 2 => 'Virtual', 4 => 'Phone', 5 => 'Tele-Conference'];
                if (isset($data['booking_service_id'])) {
                    //for a specific service
                    $booking_service = $bookingData->booking_services_layout->where('id', $data['booking_service_id'])->first();
                    // dd( $serviceType[$booking_service->service_types]);
                    $accommodationArray[] = $booking_service->service->accommodation ? $booking_service->service->accommodation->name : '';
                    $serviceArray[] = $booking_service->service ? $booking_service->service->name : '';
                    $serviceTypes[] = $serviceType[$booking_service->service_types];
                    $serviceSpecialization[] = '';
                    $serviceConsumer[] = $booking_service->service_consumer;
                    $serviceParticipant[] = $booking_service->attendees;
                    $bookingData->booking_start_at = $booking_service->start_time;
                    $bookingData->booking_end_at = $booking_service->end_time;

                    

                    // dd($bookingData->booking_services_layout);
                } else {
                    foreach ($bookingData->booking_services_layout as $service) {
                        $accommodationArray[] = $service->accommodation ? $service->accommodation->name : '';
                        $serviceArray[] = $service->ServiceCategory ? $service->ServiceCategory->name : '';
                        $serviceTypes[] = $serviceType[$service->service_types];
                        $serviceSpecialization[] = '';
                        // getSpecializationsNameNew($service->specialization);
                        $serviceConsumer[] = $service->service_consumer;
                        $serviceParticipant[] = $service->attendees;
                    }
                }

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
                    "@booking_start_date" => $bookingData->booking_start_at ?  date_format(date_create($bookingData->booking_start_at), "m/d/Y") : '',
                    "@booking_start_time" => $bookingData->booking_start_at ?  date_format(date_create($bookingData->booking_start_at), "h:i A") : '',
                    "@booking_end_time" => $bookingData->booking_end_at ?  date_format(date_create($bookingData->booking_end_at), "h:i A") : '' ,
                    "@booking_end_date" =>   $bookingData->booking_end_at ?  date_format(date_create($bookingData->booking_end_at), "m/d/Y") : '' ,
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

            // if (!empty($data['mail_type']) && $data['mail_type'] == 'reimbursement') {

            //     $reimbursement    = BookingReimbursement::find($data['booking_id']);
            //     $reimbursement_amount     = formatPayment($reimbursement->amount);
            //     $reimbursement_reason      = $reimbursement->reason;
            //     if ($reimbursement->booking->physicalAddress && $reimbursement->booking->service_type == 1) {
            //         $location    = getCombineLocation($reimbursement->booking->physical_address_id);
            //     }
            //     $replacements[] = array(

            //         "@reimbursement_amount" => $reimbursement_amount,
            //         "@reimbursement_reason" => $reimbursement_reason,
            //         "@booking_start_at" =>  formatDateTime($reimbursement->booking->booking_start_at) ?? '',
            //         "@booking_end_at" =>  formatDateTime($reimbursement->booking->booking_end_at) ?? '',
            //         "@booking_date" =>  formatDate($reimbursement->booking->booking_start_at) ?? '',
            //         "@booking_location" =>  $location ?? '',
            //         "@booking_number" =>  $reimbursement->booking->booking_number ?? '',
            //         "@booking_duration" =>  Carbon::parse($reimbursement->booking->booking_end_at)->diffAsCarbonInterval(Carbon::parse($reimbursement->booking->booking_start_at))->forHumans() ?? '',
            //         "@provider" => $reimbursement->provider->name,


            //     );
            // }

            // if (!empty($data['mail_type']) && $data['mail_type'] == 'remittance') {
            //     $remittnace    = Remittance::find($data['booking_id']);
            //     $replacements[] = array(
            //         '@remittance_issued_date'  => $data['remittance_issued_date'] ?? '',
            //         '@remittance_payment_date' => $data['remittance_payment_date'] ?? '',
            //         '@remittance_paid_table'  => $data['remittance_paid_table'] ?? '',
            //         '@remittance_issue_table' => $data['remittance_issue_table'] ?? '',
            //         '@remittance_total_amount' => $data['remittance_total_amount'] ?? '',
            //         '@payment_scheduled_date' => $data['payment_scheduled_date'] ?? '',
            //         "@provider" => $userData->name ?? '',
            //         '@remittance_number' => $data['remittance_number'] ?? '',
            //         '@remittance_payment_method' => $data['remittance_payment_method'] ?? ''

            //     );
            // }
            // if (!empty($data['mail_type']) && $data['mail_type'] == 'payment-preference') {
            //     $replacements[] = array(
            //         '@provider'  => $data['provider'] ?? '',

            //     );
            // }




            $replacements = call_user_func_array('array_merge', $replacements);
            if ($sendEmail && isset($data['templateId']) && !empty($data['templateId'])) {
                $user_role_id =  $userData->roles->first()->id; //fetch what ever is the first assigned role
                $template = NotificationTemplateRoles::where(['notification_id' => $data['templateId'], 'role_id' => $user_role_id])->first();
                if (is_null($template))
                    return;
                $dom = new DOMDocument();
                $dom->loadHTML($template->notification_text);
                $xpath = new DOMXPath($dom);
                $nodes = $xpath->query('//@*');
                foreach ($nodes as $node) {
                    if ($node->nodeName == "data-mention") {
                        $node->parentNode->removeAttribute($node->nodeName);
                    }
                }

                $templateString    = $dom->saveHTML();
                $data['replacements'] = $replacements;
                if (isset($invoicePdf))
                    $data['invoice_pdf'] = $invoicePdf ?? false;
                $data['templateSubject'] = str_ireplace(array_keys($replacements), array_values($replacements), $template->notification_subject ?? '');
                $data['templateBody'] = nl2br(str_ireplace(array_keys($replacements), array_values($replacements), $templateString));

                $data['admin'] = $admin;
                if (session()->has('company_logo') && session()->get('company_logo') != null)
                    $data['company_logo'] = url(session()->get('company_logo'));
                else
                    $data['company_logo'] = null;

                   sendMail($data['email'], $data['templateSubject'],  $data, 'emails.templates', [], 'dispatch');
                // Mail::to($data['email'])->send(new createEmail($data['templateSubject'], $data, 'emails.templates', []));
            }

            // SEND SMS
            // if (isset($data['sms_template']) && !empty($data['sms_template']) && $sendSMS) {
            //     $template = SmsTemplate::where('id', $data['sms_template'])->first();
            //     if (!empty($template) && !empty($data['phone'])) {

            //         $data['replacements'] = $replacements;
            //         $data['templateName'] = $template->name ?? '';
            //         $templateBody = str_replace(array_keys($replacements), array_values($replacements), $template->body);
            //         Log::info(array('smstemplate' => 'smstemplate smstemplate'));
            //         self::sendSMS(env('COUNTRY_CODE') . $data['phone'], $templateBody);
            //     }
            // }
        } catch (\Exception $e) {
            // Log::info(array('sendtemplateemail' => $e->getMessage() . $e->getFile() . $e->getLine()));

            //  Log::info($e->getMessage().$e->getFile().$e->getLine());
            dd($e->getMessage() . $e->getFile() . $e->getLine());
        }
    }
}
if (!function_exists('numberFormat')) {

    function numberFormat($foo)
    {
        return '$ ' . number_format((float)$foo, 2, '.', ',');
    }
}





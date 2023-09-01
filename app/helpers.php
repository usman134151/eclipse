<?php

use App\Models\Tenant\Booking;
use App\Models\Tenant\Logs;
use App\Mail\sendEmailNotification;
use App\Models\Tenant\NotificationTemplates;
use App\Models\Tenant\SmsTemplate;
use App\Models\Tenant\SystemRoleUser;
use App\Models\Tenant\Template;
use App\Models\Tenant\User;
use App\PloiManager;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
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
}
if (!function_exists('getTemplate')) {

    function getTemplate($trigger, $roleId, $type)
    {
        if ($type == "email_template") {
            $templateId = Template::where('trigger', 'like', '%' . $trigger . '%')->where('role_id', $roleId)->pluck('id')->first();
            return $templateId;
        }
        if ($type == "sms_template") {
            $sms_templateId = SmsTemplate::where('trigger', 'like', '%' . $trigger . '%')->where('role_id', $roleId)->pluck('id')->first();
            return $sms_templateId;
        }
        if ($type == "notification_template") {
            $notification_templateId = NotificationTemplates::where('trigger', 'like', '%' . $trigger . '%')->where('role_id', $roleId)->pluck('id')->first();
            return $notification_templateId;
        }
    }
}
// if (!function_exists('save_notification')) {

//     function save_notification($data)
//     {
//         try {

//             if (!isset($data['item_id']) || empty($data['item_id'])) {
//                 return false;
//             }
//             if (!isset($data['templateId']) || empty($data['templateId'])) {
//                 return false;
//             }

//             $userData        = User::withTrashed()->find($data['user_id']);
//             $admin            = User::find(1);
//             $userRole        = $userData->roles()->first()->name;


//             $replacements[] = array(

//                 "@username" => $userData->name ?? '',
//                 "@admin_company" => $admin->users_business->company_name,
//                 "@booking_customer_company" => $admin->users_business->company_name,
//                 "@admin" => $admin->name,
//             );

//             if (!empty($data['item_type']) && $data['item_type'] == 'drive') {

//                 $document    = Document::find($data['item_id']);
//                 $document_name    = $document->document_name;
//                 $document_category    = $document->document_title;
//                 $username    = $document->user->name;
//                 // $provider_drive	= str_replace('https://' , '' , URL::to($userRole.'/provider/my-drive/'.Crypt::encrypt($document->user->id)));
//                 $provider_drive    = url($userRole . '/provider/my-drive/' . Crypt::encrypt($document->user->id));

//                 $replacements[] = array(

//                     "@username" => $username,
//                     "@provider" => $username,
//                     "@document_name" => $document_category,
//                     "@document_category" => $document_category,
//                     '@provider_drive' => $provider_drive,

//                 );
//             }

//             if (!empty($data['item_type']) && $data['item_type'] == 'booking') {

//                 $bookingData    = Booking::find($data['item_id']);
//                 $customer        = $bookingData->customer->name;
//                 $payment_for_provider    = 0;
//                 if ($bookingData->physicalAddress && $bookingData->service_type == 1) {
//                     $location    = getCombineLocation($bookingData->physical_address_id);
//                 }
//                 if ($bookingData->booking_provider) {
//                     $ids    = array_column($bookingData->booking_provider->toArray(), 'provider_id');
//                     $assignedproviders    = getUsersName($ids);
//                 }
//                 if ($data['templateId'] == 37) {
//                     $bookingProvider = BookingProvider::where(['booking_id' => $data['item_id'], 'provider_id' => $data['user_id']])->first();
//                     $payment_for_provider  = Helper::get_provider_booking_service_price_total($data['item_id'], $data['user_id']);
//                     $payment_for_provider += ($bookingData->payment->additional_charge_provider + $bookingProvider->additional_charge_provider);
//                 }
//                 $providerName    = $userData->name;

//                 if (isset($data['provider_id']) || !empty($data['provider_id'])) {
//                     $provider    = User::find($data['provider_id']);
//                     $providerName    = $provider->name;
//                 }

//                 if (isset($bookingData->customer->users_detail) && $bookingData->customer->users_detail->supervisor) {
//                     $supervisorD = User::find($bookingData->customer->users_detail->supervisor);
//                     $supervisor = $supervisorD->name;
//                 }

//                 $total              = 0;
//                 $additional        = 0;
//                 if ($bookingData->payment->additional_charge_provider) {
//                     $additional = $bookingData->payment->additional_charge_provider * count($bookingData->booking_provider);
//                 }

//                 if (count($bookingData->booking_provider)) {
//                     foreach ($bookingData->booking_provider as $bProvider) {
//                         $total += Helper::get_provider_booking_service_price_total($bookingData->id, $bProvider->provider_id);
//                         $additional += $bProvider->additional_charge_provider;
//                     }
//                 }

//                 $customerCharge = ($bookingData->payment->override_amount) ?? $bookingData->payment->total_amount;
//                 $netTotal = $customerCharge -  ($total + $additional);
//                 $netTotal = $netTotal + $bookingData->payment->modification_fee;

//                 $frequency        = array(1 => 'One Time', 2 => 'Daily', 3 => 'Weekly', 4 => 'Monthly', 5 => 'Week Daily');

//                 foreach ($bookingData->booking_services_layout as $service) {
//                     $accommodationArray[] = $service->accommodation->name;
//                     $serviceArray[] = $service->ServiceCategory->name;
//                     $serviceTypes[] = $service->service_types == 1 ? "In Person" : "Virtual";
//                     $serviceSpecialization[] = getSpecializationsNameNew($service->specialization);
//                     $serviceConsumer[] = $service->service_consumer;
//                     $serviceParticipant[] = $service->attendees;
//                 }

//                 $replacements[] = array(

//                     "@username" => $username ?? '',
//                     "@provider" => $providerName ?? '',
//                     "@customer" => $customer ?? '',
//                     "@consumer" => $customer ?? '',
//                     "@requester" => $customer ?? '',
//                     "@booking_start_at" =>  formatTime($bookingData->booking_start_at) ?? '',
//                     "@booking_date" =>  formatDate($bookingData->booking_start_at) ?? '',
//                     "@booking_location" =>  $location ?? '',
//                     "@booking_number" =>  $bookingData->booking_number ?? '',
//                     "@payment_for_provider" => formatPayment($payment_for_provider) ?? '',
//                     "@invoice_total" => $data['invoice_total'] ?? '',
//                     "@invoice_due_date" => $data['invoice_due_date'] ?? '',
//                     "@invoice_name" => $data['invoice_number'] ?? '',
//                     "@assigned_providers" => $assignedproviders ?? '',

//                     // "@booking_detail" =>   str_replace('https://' , '' , URL::to($userRole.'/bookings/'.Crypt::encrypt($data['item_id']))) ?? '',
//                     "@booking_detail" =>  url($userRole . '/bookings/' . Crypt::encrypt($data['item_id'])) ?? '',
//                     "@supervisor" => $supervisor ?? '',
//                     // "@available_bookings" => str_replace('https://' , '' , URL::to($userRole.'/bookings/unassigned')) ?? '',
//                     "@available_bookings" => url($userRole . '/bookings/unassigned') ?? '',
//                     // "@pending_review" =>  str_replace('https://' , '' , URL::to($userRole.'/bookings/pending-approval')) ?? '',
//                     "@pending_review" => url($userRole . '/bookings/pending-approval') ?? '',
//                     "@invoices" => str_replace('https://', '', URL::to($userRole . '/invoices')) ?? '',
//                     // "@invoices" => url($userRole.'/invoices') ?? '',
//                     // "@reciept_details" => str_replace('https://' , '' , URL::to($userRole.'/invoices')) ?? '',
//                     "@reciept_details" => url($userRole . '/invoices') ?? '',

//                     "@booking_rescheduled_from" => $bookingData->rescheduled_from ?? '',
//                     "@frequency" => $frequency[$bookingData->frequency_id] ?? "",
//                     "@booking_requester_company" => $bookingData->customer->company_data->name ?? "",
//                     "@booking_requester_phone" => $bookingData->poc_phone ?? "",
//                     "@booking_requester_poc" => $bookingData->contact_point ?? "",
//                     "@billing_manager" => $bookingData->bm->name ?? '',
//                     "@industry" => $bookingData->customer->users_detail->industries->name ?? '',
//                     "@accommodation" => isset($accommodationArray) ? implode(',', $accommodationArray) : '',
//                     "@services" => isset($serviceArray) ? implode(',', $serviceArray) : '',
//                     "@service_type" => isset($serviceTypes) ? implode(',', $serviceTypes) : '',
//                     "@specialization" => isset($serviceSpecialization) ? implode(',', $serviceSpecialization) : '',
//                     "@consumers" => isset($serviceConsumer) ? implode(',', $serviceConsumer) : '',
//                     "@participant" => isset($serviceParticipant) ? implode(',', $serviceParticipant) : '',
//                     "@city" => $bookingData->customer->users_detail->city ?? '',
//                     "@state" => $bookingData->customer->users_detail->state ?? '',
//                     "@zip_code" => $bookingData->customer->users_detail->zip ?? '',
//                     "@status" => $frequency[$bookingData->frequency_id] ?? '',
//                     "@arrival_notes" =>   $bookingData->physicalAddress->notes ?? '',
//                     "@created_at" => formatDateTime($bookingData->created_at) ?? '',

//                     "@booking_service_total" => formatPayment($bookingData->payment->sub_total) ?? '',
//                     "@booking_discount" => formatPayment($bookingData->payment->coupon_discount_amount) ?? '',
//                     "@booking_sub_total" => formatPayment($bookingData->payment->total_amount) ?? '',
//                     "@booking_override_amount" => formatPayment($bookingData->payment->override_amount) ?? '$0.00',
//                     "@booking_provider_rate_sum" => formatPayment($total) ?? '',
//                     "@booking_additional_provider_payment" => formatPayment($additional) ?? '',
//                     "@booking_total_provider_payment" => formatPayment($total + $additional) ?? '',
//                     "@booking_modification_fee" => formatPayment($bookingData->payment->modification_fee) ?? '$0.00',
//                     "@booking_net_total" => formatPayment($netTotal) ?? '',

//                     "@private_notes" => $bookingData->private_notes ?? '',
//                     "@booking_customer_notes" => $bookingData->customer_notes ?? '',
//                     "@provider_notes" => $bookingData->provider_notes ?? '',
//                 );
//             }
//             // params
//             if (!empty($data['item_type']) && $data['item_type'] == 'quote') {
//                 $bookingData    = QuoteLead::find($data['item_id']);
//                 $customer        = $bookingData->consumer;
//                 $replacements[] = array(
//                     "@admin_company" => isset($admin->users_business) ? $admin->users_business->company_name : '',
//                     "@admin" => $admin->name,
//                     "@consumer" => $customer ?? '',
//                     "@requester" => $customer ?? '',
//                     "@customer" => $customer ?? '',
//                     "@booking_added_by" => $customer ?? '',
//                     // "@dashboard_url" =>  str_replace('https://' , '' , URL::to($userData->roles()->first()->name.'/dashboard')),
//                     // "@quote_details" =>  str_replace('https://' , '' , URL::to($userData->roles()->first()->name.'/quotes')),
//                     "@dashboard_url" =>  url($userData->roles()->first()->name . '/dashboard'),
//                     "@quote_details" =>  url($userData->roles()->first()->name . '/quotes'),
//                     "@booking_start_at" =>  formatDateTime($bookingData->booking_start_at) ?? '',
//                     "@booking_end_at" =>  formatDateTime($bookingData->booking_end_at) ?? '',
//                     "@booking_date" =>  formatDate($bookingData->booking_start_at) ?? '',
//                     "@booking_duration" =>  Carbon::parse($bookingData->booking_end_at)->diffAsCarbonInterval(Carbon::parse($bookingData->booking_start_at))->forHumans() ?? '',
//                 );
//             }


//             if (!empty($data['item_type']) && $data['item_type'] == 'provider-app') {
//                 $proApp    = ProviderApplication::find($data['item_id']);
//                 $provider        = $proApp->user->name;
//                 $replacements[] = array(
//                     "@admin_company" => isset($admin->users_business) ? $admin->users_business->company_name : '',
//                     "@admin" => $admin->name,
//                     "@provider" => $provider ?? '',
//                     "@application_name" => $provider ?? '',
//                     "@booking_added_by" => $customer ?? '',

//                     // "@dashboard_url" =>   str_replace('https://' , '' , URL::to($userData->roles()->first()->name.'/dashboard')),
//                     // "@applications" =>    str_replace('https://' , '' , URL::to($userData->roles()->first()->name.'/provider-applications')),
//                     "@dashboard_url" =>  url($userData->roles()->first()->name . '/dashboard'),
//                     "@applications" =>  url($userData->roles()->first()->name . '/provider-applications'),
//                 );
//             }

//             if (!empty($data['item_type']) && $data['item_type'] == 'reimbursement') {

//                 $reimbursement            = BookingReimbursement::find($data['item_id']);
//                 $reimbursement_amount     = formatPayment($reimbursement->amount);
//                 $reimbursement_reason      = $reimbursement->reason;
//                 $replacements[] = array(

//                     "@reimbursement_amount" => $reimbursement_amount,
//                     "@reimbursement_reason" => $reimbursement_reason,
//                     "@booking_number" =>  $reimbursement->booking->booking_number ?? '',
//                     "@provider" => $reimbursement->provider->name,
//                     "@reimbursements" =>  url($userRole . '/reimbursement') ?? '',
//                     //    "@reimbursements" =>  str_replace('https://' , '' , URL::to($userRole.'/reimbursement')) ?? '',



//                 );
//             }

//             if (!empty($data['item_type']) && $data['item_type'] == 'remittance') {
//                 $remittnace    = Remittance::find($data['item_id']);
//                 // $remittnace_url = str_replace('https://' , '' , URL::to($userRole.'/remittances')) ;
//                 $remittnace_url = url($userRole . '/remittances');

//                 $replacements[] = array(
//                     '@remittance_issued_date'  => $data['remittance_issued_date'] ?? '',
//                     '@remittance_payment_date' => $data['remittance_payment_date'] ?? '',
//                     '@remittance_total_amount' => $data['remittance_total_amount'] ?? '',
//                     '@payment_scheduled_date' => $data['payment_scheduled_date'] ?? '',
//                     "@provider" => $remittnace->provider->name ?? '',
//                     '@remittance_number' => $remittnace->number ?? '',
//                     '@remittance_payment_method' => $data['remittance_payment_method'] ?? '',
//                     "@remittances" =>  $remittnace_url ?? '',


//                 );
//             }

//             if (!empty($data['item_type']) && $data['item_type'] == 'payment-preference') {

//                 // $provider_payment_preference_url	=  str_replace('https://' , '' , URL::to($userRole.'/preferences')) ;
//                 $provider_payment_preference_url    = url($userRole . '/preferences');
//                 if ($userRole == 'admin') {
//                     // $provider_payment_preference_url	=  str_replace('https://' , '' , URL::to($userRole.'/provider/payment-preferences/'.Crypt::encrypt($data['provider_id']))) ;
//                     $provider_payment_preference_url    = url($userRole . '/provider/payment-preferences/' . Crypt::encrypt($data['provider_id']));
//                 }
//                 $replacements[] = array(
//                     "@provider_payment_preference_url" =>  $provider_payment_preference_url ?? '',
//                     '@provider'  => $data['provider'] ?? '',
//                 );
//             }

//             $replacements = call_user_func_array('array_merge', $replacements);


//             $template = AppNotificationTemplates::where('id', $data['templateId'])->first();

//             $data['slug']        = str_replace(array_keys($replacements), array_values($replacements), $template->redirect_to ?? '');

//             $data['message']    = str_replace(array_keys($replacements), array_values($replacements), $template->body);

//             Notification::create([
//                 'user_id'             => $data['user_id'],
//                 'item_id'             => $data['item_id'],
//                 'item'                => $data['item_type'],
//                 'slug'                => isset($data['slug']) ? $data['slug'] : '',
//                 'message'            => isset($data['message']) ? $data['message'] : '',
//                 'action_by'         => auth()->user() ? auth()->user()->id : '1',

//             ]);
//             return true;
//         } catch (\Exception $e) {
//             // return Redirect::back()->send()->with(['error_message' => 'There is something wrong.Please try again later.']);
//             // Log::info(array('save_notification' => $e->getMessage().$e->getFile().$e->getLine()));

//         }
//     }
// }
if (!function_exists('sendTemplatemail')) {

    function sendTemplatemail($data, $otherParams = null)
    {
        try {

            // return false;
            if (!isset($data['item_id']) || empty($data['item_id'])) {
                return false;
            }

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
            // dd($sendEmail, $sendSMS);

            $admin            = User::find(1);
            $location        = "-";
            $payment_for_provider     = 0;
            $assignedproviders    = "";

            // $dashboard_url	= url($userData->roles()->first()->name.'/dashboard');
            $dashboard_url    =  str_replace('https://', '', URL::to($userData->roles()->first()->name . '/dashboard'));
            // $view_booking	= url($userData->roles()->first()->name.'/bookings/'.Crypt::encrypt($data['item_id']));
            $view_booking    =   str_replace('https://', '', URL::to($userData->roles()->first()->name . '/bookings/' . encrypt($data['item_id'])));

            $replacements[] = array(
                "@dashboard_url" =>  $dashboard_url,

                // '@dashboard'	=> '<h3 class="mb-3 mt-0"><a href="'.$dashboard_url.'" class="btn btn-primary text-center">Go to Dashboard</a></h3>',
                '@dashboard'    => '<h3 class="mb-3 mt-0"><a href="' . $dashboard_url . '" class="btn btn-primary text-center">Go to Dashboard</a></h3><br> <span style="line-height: 4px;">Or copy and paste the URL into your browser:</span><br><span style="line-height: 16px;font-size: 14px;">' . URL::to($userData->roles()->first()->name . '/dashboard') . '</span> ',
                "@username" => $userData->name ?? '',
                "@document_name" => $document_name ?? '',
                "@document_category" => $document_category ?? '',
                "@provider" => $providerName ?? '',
                "@admin_company" => $admin->company ? $admin->company->company_name : '',
                "@admin" => $admin->name,
                "@email_provider" => $userData->email ?? '',
                "@view_booking" =>  str_replace('https://', '', URL::to($userData->roles()->first()->name . '/bookings/' . encrypt($data['item_id']))) ?? '',
                //	"@view_booking" =>  '<h3 class="mb-3 mt-0"><a href="'.$view_booking.'" class="btn btn-primary text-center">View Assignment</a></h3>',


            );

            // if (!empty($data['mail_type']) && $data['mail_type'] == 'drive') {

            //     $document    = Document::find($data['item_id']);
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
                $bookingData    = Booking::find($data['item_id']);
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
                //     $bookingProvider = BookingProvider::where(['booking_id' => $data['item_id'], 'provider_id' => $data['user_id']])->first();
                //     $payment_for_provider  = Helper::get_provider_booking_service_price_total($data['item_id'], $data['user_id']);
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

                foreach ($bookingData->booking_services_layout as $service) {
                    $accommodationArray[] = $service->accommodation ? $service->accommodation->name : '';
                    $serviceArray[] = $service->ServiceCategory ? $service->ServiceCategory->name : '';
                    $serviceTypes[] = $service->service_types == 1 ? "In Person" : "Virtual";
                    $serviceSpecialization[] = getSpecializationsNameNew($service->specialization);
                    $serviceConsumer[] = $service->service_consumer;
                    $serviceParticipant[] = $service->attendees;
                }

                $replacements[] = array(

                    "@username" => $username ?? '',
                    "@document_name" => $document_name ?? '',
                    "@document_category" => $document_category ?? '',
                    "@provider" => $providerName ?? '',
                    "@admin_company" => $admin->company ? $admin->company->company_name : '',
                    "@admin" => $admin->name,
                    "@customer" => $customer ?? '',
                    "@consumer" => $customer ?? '',
                    "@requester" => $customer ?? '',
                    "@booking_start_at" =>  formatDateTime($bookingData->booking_start_at) ?? '',
                    "@booking_end_at" =>  formatDateTime($bookingData->booking_end_at) ?? '',
                    "@booking_date" =>  formatDate($bookingData->booking_start_at) ?? '',
                    "@booking_location" =>  $location ?? '',
                    "@booking_number" =>  $bookingData->booking_number ?? '',
                    "@booking_duration" =>  Carbon::parse($bookingData->booking_end_at)->diffAsCarbonInterval(Carbon::parse($bookingData->booking_start_at))->forHumans() ?? '',
                    "@payment_for_provider" => formatPayment($payment_for_provider) ?? '',
                    "@email_provider" => $userData->email ?? '',
                    "@email_consumer" => $bookingData->customer->email ?? '',
                    "@assigned_providers" => $assignedproviders ?? '',
                    "@view_booking" =>  str_replace('https://', '', URL::to($userData->roles()->first()->name . '/bookings/' . encrypt($data['item_id']))) ?? '',
                    // "@view_booking" =>  url($userData->roles()->first()->name.'/bookings/'.Crypt::encrypt($data['item_id'])) ?? '',

                    "@booking_rescheduled_from" => $bookingData->rescheduled_from ?? '',
                    "@frequency" => $frequency[$bookingData->frequency_id] ?? '',
                    "@booking_requester_company" => $bookingData->customer->company_data->name ?? '',
                    "@booking_requester_phone" => $bookingData->poc_phone ?? '',
                    "@booking_requester_poc" => $bookingData->contact_point ?? '',
                    "@billing_manager" => $bookingData->billing_manager ? $bookingData->billing_manager->name : '',
                    "@industry" =>"",
                    //  $bookingData->customer ? ($bookingData->customer->users_detail->industries ? $bookingData->customer->users_detail->industries->name : '') : '',
                    "@accommodation" => isset($accommodationArray) ? implode(',', $accommodationArray) : '',
                    "@services" => isset($serviceArray) ? implode(',', $serviceArray) : '',
                    "@service_type" => isset($serviceTypes) ? implode(',', $serviceTypes) : '',
                    "@specialization" => isset($serviceSpecialization) ? implode(',', $serviceSpecialization) : '',
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


                );
            }

            // if (!empty($data['mail_type']) && $data['mail_type'] == 'reimbursement') {

            //     $reimbursement    = BookingReimbursement::find($data['item_id']);
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
            //     $remittnace    = Remittance::find($data['item_id']);
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
            // dd($sendEmail,  isset($data['templateId']) , !empty($data['templateId']), $data['templateId']);
            if ($sendEmail && isset($data['templateId']) && !empty($data['templateId'])) {
                $template = Template::where('id', $data['templateId'])->first();
                $dom = new DOMDocument();
                $dom->loadHTML($template->body);
                $xpath = new DOMXPath($dom);
                $nodes = $xpath->query('//@*');
                foreach ($nodes as $node) {
                    if ($node->nodeName == "data-mention") {
                        $node->parentNode->removeAttribute($node->nodeName);
                    }
                }

                $templateString    = $dom->saveHTML();
                $data['replacements'] = $replacements;
                $data['templateName'] = $template->name ?? '';
                if (isset($invoicePdf))
                    $data['invoice_pdf'] = $invoicePdf ?? false;
                $data['templateSubject'] = str_replace(array_keys($replacements), array_values($replacements), $template->subject ?? '');
                $data['templateBody'] = str_replace(array_keys($replacements), array_values($replacements), $templateString);
                if (isset($data['template'])) {
                    // BulkEmail::dispatch($data)->onConnection('database')->onQueue('default');
                    // $data['templateName'] = $data['templateSubject'];
                    // return $data;
                } else {

                    // BulkEmail::dispatch($data)->onConnection('database')->onQueue('default');
                }
                // dd($data);
                // $from     = env('MAIL_FROM_ADDRESS');
                // $fromName = env('MAIL_FROM_NAME');
                $subject = preg_replace('/\r|\n/', '', $data['templateSubject']) ?? "Inclusive Notification Service";
                // $this->from($from, $fromName)
                //     ->subject($subject)
                //     ->view('emails.templates')->with($this->data);
                $data['admin']=$admin;
                // $email = new sendEmailNotification($subject, $data['templateBody'],);
                Mail::to($data['email'])->send(new sendEmailNotification($data));

                // Mail::send('email.templates', [], function ($message) use ($data) {
                //     $message->to($data['email'], $data['name'])
                //         ->subject($subject);
                // });
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

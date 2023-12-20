<?php
namespace app\Services\App;

use App\Models\Tenant\NotificationTemplates;
use App\Models\Tenant\NotificationTag;
use App\Models\Tenant\NotificationTemplateRoleFrequencies;
use App\Models\Tenant\NotificationTemplateRoles;
use App\Models\Tenant\Role;
use App\Models\Tenant\User;
use App\Models\Tenant\SystemRole;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use DOMDocument;
use DOMXPath;
use Auth;

class NotificationService{

    public function createNotification($notification){
        $notification->save();
        return $notification;
    }

    public static function sendNotification($triggerName,$data,$triggerType=6,$authProvider=false){
        //get notification trigger 
     
        
        $admin            = User::find(1);
        $notificationData=NotificationTemplates::where('trigger',$triggerName)->with('notificationTemplateRoles')->orderBy('notification_type')->get()->toArray();
       
        $parts = explode("(", $triggerName);
        $templateName=trim($parts[0]);
        
        foreach($notificationData as $notification){
            $notification['trigger_type_id']=$triggerType;
            //get list of users to send notification to
            
            $notification['notification_template_roles']=SELF::getUsers($notification['notification_template_roles'],$notification['trigger_type_id'],$data['bookingData'],$admin,$authProvider);
          
            //loop to send
            foreach($notification['notification_template_roles'] as $roleData){
              
             
            //send notification
            if($notification['notification_type']==1){
              
                if(key_exists('user_information',$roleData)){
                    foreach($roleData['user_information'] as $userData){
                        //send email
                                    //replace data in loop
                                  
                    $replacements=SELF::replaceData($notification['trigger_type_id'],$data,$userData,$admin);
              
                        SELF::getEmail($roleData['notification_text'],$roleData['notification_subject'],$replacements,$admin,$userData,$templateName);
                        
                    }
                }

            }
            elseif($notification['notification_type']==2){ //system

            }
            else{ //sms

            }
        }

        }
        

    }

    public static function replaceData($triggerType,$data,$userData,$admin){
        $replacements=[];
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
        elseif($triggerType==6 || $triggerType==7){
          
               
                $bookingData=$data['bookingData'];
               
                $payment_for_provider     = 0;
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
                if ($bookingData->services->first()) {
                    //for a specific service
                    $service = $bookingData->services->first();//$bookingData->booking_services_layout->where('id', $data['booking_service_id'])->first();
                    $booking_service = $bookingData->booking_services->first();
                  
                    $accommodationArray[] = $service->accommodation ? $booking_service->accommodation->name : '';
                    $serviceArray[] = $service->name;
                  
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
               
               // $userData=$data['userData'];
                $replacements[] = array(
                "@recipient" => $userData->name ?? '',
                "@email" => $userData->email ?? '',   
                "@username" => $username ?? '',
                "@booking_provider_return_requester"=>Auth::user()->name,
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
                "@booking_assigned_providers" =>  $bookingData->assigned_providers ?? '',
                "@booking_duration" =>  Carbon::parse($bookingData->booking_end_at)->diffAsCarbonInterval(Carbon::parse($bookingData->booking_start_at))->forHumans() ?? '',
                "@payment_for_provider" => formatPayment($payment_for_provider) ?? '',
                "@email_provider" => $userData->email ?? '',
                "@email_consumer" => $bookingData->customer->email ?? '',
                "@assigned_providers" => $assignedproviders ?? '',
                "@view_booking" =>  str_replace('https://', '', URL::to($userData->roles()->first()->name . '/bookings/' . encrypt($bookingData['id']))) ?? '',
                "@booking_rescheduled_from" => $bookingData->rescheduled_from ?? '',
                "@frequency" => $frequency[$bookingData->frequency_id] ?? '',
                "@booking_requester"=>$bookingData->customer->name,
                "@booking_requester_company" => $bookingData->customer->company_data->name ?? '',
                "@booking_requester_phone" => $bookingData->poc_phone ?? '',
                "@booking_requester_poc" => $bookingData->contact_point ?? '',
                "@billing_manager" => $bookingData->billing_manager ? $bookingData->billing_manager->name : '',
                "@industry" => "",
                //  $bookingData->customer ? ($bookingData->customer->users_detail->industries ? $bookingData->customer->users_detail->industries->name : '') : '',
                "@booking_accommodation" => isset($accommodationArray) ? implode(',', $accommodationArray) : '',
                "@booking_service_type" => $serviceType[$bookingData->booking_services->first()->service_types],
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
                //"@payment_detail_provider_rate_sum" => $bookingData->payment ? formatPayment($total) : '',
              //  "@booking_additional_provider_payment" => $bookingData->payment ? formatPayment($additional) : '',
               // "@booking_total_provider_payment" => $bookingData->payment ? formatPayment($total + $additional) : '',
               // "@booking_modification_fee" => $bookingData->payment ? formatPayment($bookingData->payment->modification_fee) : '$0.00',
                // "@booking_net_total" => formatPayment($netTotal) ?? '',

                "@private_notes" => $bookingData->private_notes ?? '',
                "@booking_customer_notes" => $bookingData->customer_notes ?? '',
                "@provider_notes" => $bookingData->provider_notes ?? '',

                "@button_login_page" => $login_button ?? '',



                "@booking_service" => isset($serviceArray) ? implode(',', $serviceArray) : '',
                );
            
          
        }
        

       return call_user_func_array('array_merge', $replacements);

            
    }

   public static function getEmail($notificationText,$notificationSubject,$replacements,$admin,$userData,$templateName=''){
    
    $dom = new DOMDocument();
                $dom->loadHTML($notificationText);
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
                $data['templateSubject'] = str_ireplace(array_keys($replacements), array_values($replacements), $notificationSubject ?? '');
                $data['templateBody'] = nl2br(str_ireplace(array_keys($replacements), array_values($replacements), $templateString));
                $data['templateName']=$templateName;
           //   dd($data['templateBody']);
                $data['admin'] = $admin;
                if (session()->has('company_logo') && session()->get('company_logo') != null)
                    $data['company_logo'] = url(session()->get('company_logo'));
                else
                    $data['company_logo'] = null;

                   sendMail($userData['email'], $data['templateSubject'],  $data, 'emails.templates', [], 'dispatch');
   }

    public static function getUsers($rolesData,$triggerType,$data,$admin,$authProvider=false){

       
        //booking type
        if($triggerType==6 || $triggerType==7){
           $userMapping=['5'=>$data['supervisor'],'6'=>$data['customer_id'],'9'=>$data['billing_manager_id']];    
           $userIds=[$data['supervisor'],$data['customer_id'],$data['billing_manager_id']];
           $userMapping['8']='';
           $userMapping['7']='';
           foreach($data['booking_services'] as $service){
            if($service['attendees']!='' && $service['is_manual_attendees']==0){
               
                $userIds=array_merge($userIds, explode(",",$service['attendees']));
                $userMapping['8'].=$service['attendees'];
            }
            if($service['service_consumer']!='' && $service['is_manual_consumer']==0){
                $userMapping['7']=$service['service_consumer'];
                $userIds=array_merge($userIds, explode(",",$service['service_consumer']));
               }
           }


         
           $users = User::whereIn('id', $userIds)
           ->where('status', 1) // Add this line for the status condition
           ->with('roles')
           ->get();
    

          foreach($rolesData as &$role){
            if($role['role_id']==1){
                //main admin
                $adminUserIds=User::where('id', '=', function ($subquery) {
                        $subquery->select('user_id')
                            ->from('role_user')
                            ->where('role_id', 1)
                            ->limit(1);
                    })->where('status',1)->with('roles')->get();
                //$role['user_information']=[];
                $role['user_information']=$adminUserIds;
            }
            elseif($role['role_id']==2){
                //provider
                if(!$authProvider){
                    $providerIds = User::whereIn('id', function ($query) use ($data) {
                        $query->select('user_id')
                            ->from('role_user')
                            ->where('role_id', 2);
                            
                    })
                    ->whereIn('id', function ($query) use ($data) {
                        $query->select('provider_id')
                            ->from('booking_providers')
                            ->where('booking_id', $data['id']);
                    })
                    ->where('status', 1)->with('roles')
                    ->get();
                }
                else
                {
                    $providerIds = User::whereIn('id', function ($query) use ($data) {
                        $query->select('user_id')
                            ->from('role_user')
                            ->where('role_id', 2);
                            
                    })
                    ->whereIn('id', function ($query) use ($data) {
                        $query->select('provider_id')
                            ->from('booking_providers')
                            ->where('provider_id', Auth::user()->id);
                    })
                    ->where('status', 1)->with('roles')
                    ->get();
                }

                $role['user_information']=$providerIds;
                
         
            }
            elseif($role['role_id']==10){
                //company admins
                $companyAdmins=User::whereIn('id', function ($query) use ($data) {
                    $query->select('user_id')
                        ->from('role_user')
                        ->where('role_id', 10);
                        
                })->where('company_name',$data['company_id'])
                ->where('status', 1)
                ->select('first_name', 'last_name', 'email', 'id')
                ->get();
                $role['user_information']=$companyAdmins;
              
               
            }
            elseif($role['role_id']!=4 && $role['role_id']!=3){
                    //add logic for supervisor, billing manager, consumers, participants
                   
                    $roleUsersId=$userMapping[$role['role_id']];
                   
                        if($role['role_id']==5 || $role['role_id']==6 || $role['role_id']==9 ){
                            foreach($users as $user){
                                if($user['id']==$roleUsersId){
                                    $role['user_information'][]=$user;
                                
                                }
                            }    

                            

                        }
                        else{
                           
                            if($roleUsersId!=''){
                                $ids=explode(',',$roleUsersId);
                               
                                foreach($ids as $id){
                                    foreach($users as $user){
                                    if($user['id']==$id){
                                      
                                        $role['user_information'][]=$user;
                                    } 
                                  } 
                                 
                                }
                            }
                          
                        }
                    
            }
           

          }
        }
       
        return $rolesData;
    }
}
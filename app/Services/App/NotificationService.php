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


class NotificationService{

    public function createNotification($notification){
        $notification->save();
        return $notification;
    }

    public static function sendNotification($triggerName,$data){
        //get notification trigger 
        
        $admin            = User::find(1);
        $notificationData=NotificationTemplates::where('trigger',$triggerName)->with('notificationTemplateRoles')->orderBy('notification_type')->get()->toArray();
        $notification['trigger_type_id']=6;
        foreach($notificationData as $notification){
            //get list of users to send notification to
            $notification['notification_template_roles']=SELF::getUsers($notification['notification_template_roles'],$notification['trigger_type_id'],$data['bookingData'],$admin);

            //loop to send
            foreach($notification['notification_template_roles'] as $roleData){
              
              
            //send notification
            if($notification['notification_type']==1){
                if(key_exists('user_information',$roleData)){
                    foreach($roleData['user_information'] as $userData){
                        //send email
                                    //replace data in loop
                    $replacements=SELF::replaceData($notification['trigger_type_id'],$data,$userData,$admin);
                    
                        SELF::getEmail($roleData['notification_text'],$roleData['notification_subject'],$replacements,$admin,$userData);
                        
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
        elseif($triggerType==6){
           
               
                $bookingData=$data['bookingData'];
                $payment_for_provider     = 0;
               // $userData=$data['userData'];
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
                "@view_booking" =>  str_replace('https://', '', URL::to($userData->roles()->first()->name . '/bookings/' . encrypt($bookingData['id']))) ?? '',

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

   public static function getEmail($notificationText,$notificationSubject,$replacements,$admin,$userData){
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

                $data['admin'] = $admin;
                if (session()->has('company_logo') && session()->get('company_logo') != null)
                    $data['company_logo'] = url(session()->get('company_logo'));
                else
                    $data['company_logo'] = null;
dd($data);
                   sendMail($userData['email'], $data['templateSubject'],  $data, 'emails.templates', [], 'dispatch');
   }

    public static function getUsers($rolesData,$triggerType,$data){

       
        //booking type
        if($triggerType==6){
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
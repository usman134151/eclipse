<?php

namespace app\Services\App;

use App\Models\Tenant\User;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\BookingIndustry;
use App\Models\Tenant\BookingDepartment;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\UserAddress;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\Company;
use App\Models\Tenant\Payment;
use App\Models\Tenant\BusinessSetup;
use App\Models\Tenant\ServiceSpecialization;
use App\Models\Tenant\BookingCustomizeData;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\SpecializationRate;
use App\Models\Tenant\StandardRate;
use App\Models\Tenant\BookingInvitation;
use App\Models\Tenant\BookingInvitationProvider;
use App\Models\Tenant\Specialization;
use Auth;
use Carbon\Carbon;
use App\Helpers\GlobalFunctions;
use DateTime;
use Log;
use DB;
use Arr;

class BookingAssignmentService
{
    public static function getAvailableProviders($booking,$booking_services,$operation){
        foreach($booking_services as $service)
        {
            $providers=SELF::getProviders($booking->tags,$service['service_id'],$service['accommodation_id'],$service,$booking['id'],$booking,$operation);
        }


        
    }

    public static function getProviders($tags,$service_id,$accommodation,$booking_service,$bookingId,$booking,$operation)
    {
        if ($booking_service && !is_array($booking_service['specialization']))
            $specializations = json_decode($booking_service['specialization'], true);
        elseif(is_array($booking_service['specialization']))
            $specializations = $booking_service['specialization'];
        if($tags){
            $tag_names=json_decode($tags,true);
        }
        $returnCols = [
            'users.id',
            'users.name',
            'user_details.city',
            'user_details.state',
            'user_details.country',
            'users.email',
            'user_details.phone', 'user_details.profile_pic', 'user_details.tags',
            'users.status',

        ];
        $query = User::where('users.status', 1)
            ->whereHas('roles', function ($query) {
                $query->wherein('role_id', [2]);
            })->join('user_details', function ($userdetails) {
                $userdetails->on('user_details.user_id', '=', 'users.id');
            });


        $query->select($returnCols);

        // if (count($tag_names)) {
        //     $query->whereJsonContains('tags', $tag_names);
        // }

        if ($service_id) {
           
            $query->whereHas('services', function ($query) use ($service_id) {
                $query->where('service_categories.id', $service_id);
                $query->where('provider_accommodation_services.status', '=', 1);
            });
        }
        if ($accommodation) {
          
            $query->whereHas('accommodations', function ($query) use ($accommodation) {
                $query->where('accommodations.id', $accommodation);
                $query->where('provider_accommodation_services.status', '=', 1);
            });
        }
        // if (count($service_type_ids)) {
        //     //as ids are different in dropdown and in table need to replace for filter
        //     $replacements = [
        //         28 => 1,
        //         29 => 2,
        //         30 => 4,
        //         31 => 5
        //     ];
        //     $filterArray = array_map(function ($item) use ($replacements) {
        //         return isset($replacements[$item]) ? $replacements[$item] : $item;
        //     }, $service_type_ids);
        //     $query->whereHas('services', function ($query) use ($filterArray) {
        //         $query->where('provider_accommodation_services.status', '=', 1)->where(function ($query) use ($filterArray) {
        //             foreach ($filterArray as $item) {
        //                 $query->where('service_categories.service_type', 'LIKE', "%$item%");
        //             }
        //         });
        //     });
        // }
       
        $providers = $query->get()->toArray();
        $assignedProviders = BookingProvider::where(['booking_id' => $bookingId, 'booking_service_id' => $booking_service['id']])
        ->get()->toArray();
        $serviceData=$booking->services->where('id', $service_id)->first();
        $durationData=SELF::getDurations($service_id,$serviceData,$booking_service,$booking);
       
        
        if($operation=='auto_assign'){
            $aAproviders=[];
            $providers=SELF::getProviderCharges($service_id,$booking_service,$durationData['specializations'],$providers,$assignedProviders,$durationData,$serviceData);
            $assignedProviderIds = collect($assignedProviders)->pluck('provider_id')->toArray();
            foreach($providers as $index=>$provider){
                
                if($index<=$booking_service['provider_count'] && (count($assignedProviders)+count($aAproviders))<$booking_service['provider_count'])
                {
                    if(!in_array($provider['id'],$assignedProviderIds)){
                        $aAproviders[] = [
                            'provider_id' => $provider['id'],
                            'additional_label_provider' => $providers[$index]['payment_details']['additional_payments']['additional_label_provider'],
                            'additional_charge_provider' => $providers[$index]['payment_details']['additional_payments']['additional_charge_provider'],
                            "is_override_price" => 0,
                            "additional_payments" => $providers[$index]['payment_details']['additional_payments'],
                            "service_payment_details" => $providers[$index]['payment_details']['service_payment_details'],
                            "total_amount" => $providers[$index]['total_amount']
                
                        ];

                    }

                }

            }
            
            SELF::assignProviders($booking_service['provider_count'],$assignedProviders,$aAproviders,$bookingId,$booking_service,$booking);
           
        }
        else{
            SELF::inviteProviders($bookingId,$service_id,$booking_service,$providers,$booking);
        }
        
        return $providers;
    }

    public static function getProviderCharges($serviceId,$service,$specializations,$providers,$assignedProviders,$durationData,$serviceData)
    {

        $paymentData=["additional_label_provider" => '', "additional_charge_provider" => 0];
        $serviceTypes = [
            '1' => ['class' => 'inperson-rate', 'postfix' => '', 'title' => 'In-Person'],
            '2' => ['class' => 'virtual-rate', 'postfix' => '_v', 'title' => 'Virtual'],
            '4' => ['class' => 'phone-rate', 'postfix' => '_p', 'title' => 'Phone'],
            '5' => ['class' => 'teleconference-rate', 'postfix' => '_t', 'title' => 'Teleconference'],
        ];
        $postFix=($serviceTypes[$service['service_types']]['postfix']);
        

            $providersPayment = [];

            foreach ($providers as $index => &$provider) {
                //check if provider is assigned provider
                $assigned=false;
                $specializationRate=SpecializationRate::where('user_id',$provider['id'])->where('accommodation_service_id',$serviceId)->get();
              
                foreach ($assignedProviders as &$aProvider) {

                    if ($aProvider['provider_id'] == $provider['id']) {
                        $assigned=true;

                        
                    }
                  
                }
                if(!$assigned){
                //else fetch and set custom rates
                $providersPayment[$index]['additional_payments']=$paymentData;
                $standardRate=StandardRate::where('accommodation_service_id',$serviceId)->where('user_id',$provider['id'])->first();
             //  dd($standardRate);
                $expedited_hours=0;
                if($standardRate){
                  
                    $providersPayment[$index]['service_payment_details']=[
                        'b_hours_duration' => $durationData['b_hours_duration'],
                        'b_hours_rate' =>$standardRate['hours_price'.$postFix] ,
                        'a_hours_duration' => $durationData['a_hours_duration'],
                        'a_hours_rate' => $standardRate['after_hours_price'.$postFix],
                        'total_duration'=>$durationData['durationTotal'],
                        'expedited_duration' => $expedited_hours,
                        'expedited_rate' => 0 , //$standardRate['emergency_hour'.$postFix],
                        'specialization_charges' => $specializations,
                        'day_rate'=>false,
                        'fixed_rate'=>false
                       
                    ];
                    if (isset($booking_service['service_calculations']['day_rate']) && $booking_service['service_calculations']['day_rate']==true) {
                        $rateCol="day_rate_price";
                       
                        $providersPayment[$index]['service_payment_details']['rate']=$standardRate[$rateCol.$postFix];
                        $providersPayment[$index]['service_payment_details']['day_rate']=true;
                           
                    }
                    elseif($serviceData['rate_status']==4){
                       
                        $rateCol="fixed_rate";
                        $providersPayment[$index]['service_payment_details']['rate']=$standardRate[$rateCol.$postFix];
                        $providersPayment[$index]['service_payment_details']['fixed_rate']=true;

                    }


                    foreach($specializations as $skey=>$specialization){
                        foreach($specializationRate as $spRate){
                            if($spRate['specialization']==$specialization['id']){
                                $spCharge=json_decode($spRate['specialization_rate'.$postFix],true);
                             
                                if(!is_null($spCharge) && key_exists('price',$spCharge[0]));
                                $providersPayment[$index]['service_payment_details']['specialization_charges'][$skey]['provider_charges']=(float)$spCharge[0]['price'];
                            }
                        }
                    }
                 //  dd($standardRate['hours_price'.$postFix]);

               
                }
                else{
                    //zero rate assignment
               
                    $providersPayment[$index]['service_payment_details']=[
                        'b_hours_duration' => $durationData['b_hours_duration'],
                        'b_hours_rate' =>0 ,
                        'a_hours_duration' => $durationData['a_hours_duration'],
                        'a_hours_rate' => 0,
                        'total_duration'=>$durationData['durationTotal'],
                        'expedited_duration' =>0,
                        'expedited_rate' => 0,
                        'specialization_charges' => $specializations,
                        'day_rate'=>false,
                        'fixed_rate'=>false
                        
                    ];
                    if (isset($booking_service['service_calculations']['day_rate']) && $booking_service['service_calculations']['day_rate']==true) {
                        $rateCol="day_rate";
                        $providersPayment[$index]['service_payment_details']['rate']=0;
                        $providersPayment[$index]['service_payment_details']['day_rate']=true;
                           
                    }
                    elseif($serviceData['rate_status']==4){
                        $rateCol="fixed_rate_price";
                        $providersPayment[$index]['service_payment_details']['rate']=0;
                        $providersPayment[$index]['service_payment_details']['fixed_rate']=true;

                    }
                }

                $provider['total_amount'] = SELF::updateTotal($index,$providersPayment,$specializations);
                $provider['payment_details']=  $providersPayment[$index];
                }

            

            
         

        }
   
        return $providers;
    }
    public static function updateTotal($index,$providersPayment,$booking_specializations){
        if ($providersPayment[$index]['service_payment_details']['day_rate']==true) {
               
            $subTotal=(float)$providersPayment[$index]['service_payment_details']['rate']*$providersPayment[$index]['service_payment_details']['total_duration'];
         
        }
        elseif ($providersPayment[$index]['service_payment_details']['fixed_rate']==true) {
           
            $subTotal=(float)$providersPayment[$index]['service_payment_details']['rate'];
         
        }
        else{
            $subTotal=($providersPayment[$index]['service_payment_details']['b_hours_rate'] * $providersPayment[$index]['service_payment_details']['b_hours_duration']) + ($providersPayment[$index]['service_payment_details']['a_hours_rate'] * $providersPayment[$index]['service_payment_details']['a_hours_duration']);
        }
   
        $providersPayment[$index]['total_amount'] =  number_format($subTotal+ ($providersPayment[$index]['service_payment_details']['expedited_rate'] * $providersPayment[$index]['service_payment_details']['expedited_duration']), 2, '.', '');


    if (count($providersPayment[$index]['additional_payments']) && key_exists('additional_charge_provider',$providersPayment[$index]['additional_payments'])) {
        //foreach ($providersPayment[$index]['additional_payments'] as $key => $payment) {
            $providersPayment[$index]['total_amount'] = $providersPayment[$index]['total_amount']
                + $providersPayment[$index]['additional_payments']['additional_charge_provider'] ?? 0;
        //}
    }


    if (count($booking_specializations)) {
        if(key_exists('specialization_charges',$providersPayment[$index]['service_payment_details'])){
            foreach ($providersPayment[$index]['service_payment_details']['specialization_charges'] as $key => $specialization) {
                $providersPayment[$index]['total_amount'] = $providersPayment[$index]['total_amount'] + $providersPayment[$index]['service_payment_details']['specialization_charges'][$key]['provider_charges'] ?? 0;
            }
        }

    }
    
    
   





    return $providersPayment[$index]['total_amount'];
    }

    public static function assignProviders($limit,$assignedProviders,$providers,$booking_id,$booking_service,$booking)
    {

       
        if ($limit && count($assignedProviders) <= $limit) {
          


            $data = null;

            foreach ($providers as $provider) {
              
                $user          = User::find($provider['provider_id']);
                $assigned=false;
          

                if (!empty($user) && $assigned==false) {

                    $templateId = getTemplate('Booking: Provider Assigned (manual-assign)', 'email_template');

                  
                        $params = [
                            'email'       =>  $user->email, //
                            'user'        =>  $user->name,
                            'user_id'     =>  $user->id,
                            'templateId'  =>  $templateId,
                            'booking_id'     => $booking_id,
                            'mail_type'   => 'booking',
                            'templateName' => 'New Assignment',
                            'bookingData' => $booking,
                            'booking_service_id' => $booking_service['id'],



                        ];

                        sendTemplatemail($params);
                        callLogs($booking->id,'auto-assign','auto-assigned',"Provider '".$user->name."' auto-assigned to booking");
                    
                }

                $provider['booking_id'] = $booking_id;
                $provider['booking_service_id'] = $booking_service ? $booking_service['id'] : null;

                BookingProvider::updateOrCreate(
                    [
                        'booking_id' => $provider['booking_id'],
                        'provider_id' => $provider['provider_id'],
                        'booking_service_id' => $provider['booking_service_id'],
                    ],
                    $provider
                );
            }
            $status = 1;


            if ($limit == count($assignedProviders))
                $status = 2;
            Booking::where('id', $booking_id)->update(['status' => $status]);

           
        }
    }

    public static function inviteProviders($booking_id,$service_id,$booking_service,$assignedProviders,$booking)
    {
        if (count($assignedProviders) > 0) {
            $showError = false;
            $bookingInv  = BookingInvitation::firstOrCreate(['booking_id' => $booking_id, 'service_id' => $service_id]);
            

            foreach ($assignedProviders as $provider) {
                $invData           = ['booking_id'   => $booking_id, 'deleted_at'   => null];
                $provider_id=$provider['id'];
                $existed  = BookingInvitationProvider::where(['booking_id' => $booking_id, 'provider_id' => $provider_id, 'invitation_id' => $bookingInv->id]);
                if ($existed->count() == 0) {   //invitation doesnt exist 

                    $user= User::find($provider_id);
                  
                    if (!empty($user)) {
                       
                        // $permission = $booking->bookingNotificationCheck("provider");
                        // if (!$permission) {
                        // $user_role_id =  2;
                        $templateId = getTemplate('Booking: Invitation', 'email_template');

                        $params = [
                            'email'       =>  $user->email, //Provider Assignment invite
                            'user'        =>  $user->name,
                            'user_id'     =>  $user->id,
                            'sms_template' =>  isset($sms_templateId) ? $sms_templateId : '',
                            'templateId'  =>  $templateId,
                            'booking_id'     =>  $booking_id,
                            'mail_type'   => 'booking',
                            'provider_id' => $user->id,
                            'phone'       =>  isset($user->users_detail) ? clean($user->users_detail->phone) : "",
                            'booking_service_id' => $booking_service['id'],

                        ];
                        sendTemplatemail($params);

                        $invData['provider_id']     = $provider_id;
                        $invData['invitation_id']   = $bookingInv->id;
                        callLogs($booking->id,'auto-notified','auto-notified',"Provider '".$user->name."' auto-notified");
                        BookingInvitationProvider::updateOrCreate($invData, $invData);
                    }
                }
               
            }
           

        } else
            $showError = true;
    }

    public static function getDurations($service_id,$serviceData,$booking_service,$booking){
        if (!is_null($booking->payment)) {
            $paymentData = ["additional_label_provider" => $booking->payment->additional_label_provider, "additional_charge_provider" => $booking->payment->additional_charge_provider];
            $totalAmount = formatPayment($booking->payment['total_amount']);
        } else {
            $paymentData=["additional_label_provider" => '', "additional_charge_provider" => 0];
            $totalAmount = 'n/a';
        }


            $specializations=[];

            if ($booking_service) {


                if (!is_null($booking_service['service_calculations'])) {
                    $booking_service['service_calculations'] = json_decode($booking_service['service_calculations'], true);
                } else
                    $booking_service['service_calculations'] = [];
                if (isset($booking_service['service_calculations']['expedited_charges']) && count($booking_service['service_calculations']['expedited_charges'])) {
                    if ($booking_service['service_calculations']['expedited_charges']['charges'])
                        $expedited_hours = $booking_service['service_calculations']['expedited_charges']['hour'];
                }
                // dd($booking_service['service_calculations']);
                if (isset($booking_service['service_calculations']['specialization_charges']) && count($booking_service['service_calculations']['specialization_charges'])) {
                    $specializations= $booking_service['specialization'];//$booking_service['service_calculations']['specialization_charges'];
                    if(!is_null($specializations)){
                        $specializationData=Specialization::whereIn('id',$specializations)->get()->toArray();
                     
                        foreach ($specializations as $key => $specialization) {
                            
                            $specializations[] = ["id"=>$specialization, 'provider_charges' => 0, 'label'=>$specializationData[$key]['name']];
                        }
                    }
                   
                      

                }
              
                if (isset($booking_service['service_calculations']['day_rate']) && $booking_service['service_calculations']['day_rate']==true) {
                   // dd($booking_service['service_calculations']['total_duration']);
                    $durationLabel = 'day(s)';
                    $durationTotal = $booking_service['service_calculations']['total_duration']['days']+($booking_service['service_calculations']['total_duration']['hours']/24)+($booking_service['service_calculations']['total_duration']['mins']/24/60);
                    $b_hours_duration=0;
                    $a_hours_duration=0;

                }elseif($serviceData['rate_status']==4){
                    $durationLabel = 'day(s)';
                    $durationTotal = 0;
                    $b_hours_duration=0;
                    $a_hours_duration=0;
                }
                 else {
                    $durationLabel = ' hour(s)';
                    if (key_exists('total_duration', $booking_service['service_calculations'])) {
                        $durationTotal = number_format(($booking_service['service_calculations']['total_duration']['hours']) + ($booking_service['service_calculations']['total_duration']['mins'] / 60 / 24), 2);
                    }
                    if (key_exists('business_hour_duration', $booking_service['service_calculations'])) {
                        $b_hours_duration = round($booking_service['service_calculations']['business_hour_duration'] / 60, 1);
                    }
                    if (key_exists('after_hour_duration', $booking_service['service_calculations']))
                        $a_hours_duration =  round($booking_service['service_calculations']['after_hour_duration'] / 60, 1);
                }
            }
            return ['totalAmount'=>$totalAmount,'durationLabel'=>$durationLabel,'durationTotal'=>$durationTotal,'b_hours_duration'=>$b_hours_duration,'a_hours_duration'=>$a_hours_duration,'specializations'=>$specializations];
       
    }


}
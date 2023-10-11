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
use Auth;
use Carbon\Carbon;
use App\Helpers\GlobalFunctions;
use DateTime;
use Log;
use DB;
use Arr;

class BookingOperationsService{

 

  public static function createBooking($booking, $services, $dates,$selectedIndustries,$selectedDepartments,$isImport=false,$isEdit=false){
    if(!$isImport && !$isEdit)
        $booking->booking_number=self::generateBookingNumber();
    $booking->user_id=Auth::user()->id;
    //data mapping for main booking table
    $booking->accommodation_id=$services[0]['accommodation_id'];
    $booking->service_category=$services[0]['services'];
    $booking->industry_id=$selectedIndustries[0];
    $booking->provider_count=$services[0]['provider_count'];
    $booking->service_type=$services[0]['service_types'];
    
    if(!$isImport && !$isEdit){
    
      $booking->type=2;
      $booking->status=1;
      $booking->booking_status=0;
    }
   
    $booking->booking_start_at =  Carbon::parse($dates[0]['start_date'].' '.$dates[0]['start_hour'].':'.$dates[0]['start_min'].':00')->format('Y-m-d H:i:s');;
    $booking->booking_end_at =  Carbon::parse($dates[0]['end_date'].' '.$dates[0]['end_hour'].':'.$dates[0]['end_min'].':00')->format('Y-m-d H:i:s');;
    $booking->duration_hours = $dates[0]['duration_hour'];
    $booking->duration_minute = $dates[0]['duration_minute'];
    $booking->added_by=Auth::user()->id;
    $booking->provider_response='';
    $booking->admin_response='';

    if(is_null($booking->supervisor) || $booking->supervisor==''){
        $booking->supervisor=0;

    }
  

    $booking->save();
    //end of data mapping for main booking table
    SELF::saveDetails($services,$dates,$selectedIndustries,$booking,$selectedDepartments);
   
    return $booking;
    
  }

 
  public static function saveDetails($services,$dates,$selectedIndustries,$booking,$selectedDepartments)
   {
   // BookingServices::where('booking_id', $booking->id)->delete();
   
    foreach($services as $service){
        $service['booking_id']=$booking->id;
        $service['booking_log_id']=0;
        $service['meetings']= json_encode($service['meetings']);
        $service['specialization'] = json_encode($service['specialization']);
        if(is_array($service['service_consumer']))
        $service['service_consumer']=implode(',',$service['service_consumer']);      
        if(is_array($service['attendees']))
            $service['attendees']=implode(',',$service['attendees']);
        $service['status']='1';
        $service['start_time'] =  Carbon::parse($dates[0]['start_date'].' '.$dates[0]['start_hour'].':'.$dates[0]['start_min'].':00')->format('Y-m-d H:i:s');
        $service['end_time'] =  Carbon::parse($dates[0]['end_date'].' '.$dates[0]['end_hour'].':'.$dates[0]['end_min'].':00')->format('Y-m-d H:i:s');
        $service['time_zone'] =  $dates[0]['time_zone'];
    
       
        BookingServices::updateOrCreate(
          ['booking_id' => $booking->id, 'services' => $service['services']], 
          $service
      );
    }
    //store services
    BookingIndustry::where('booking_id', $booking->id)->delete();
    //saving industries
    foreach($selectedIndustries as $industry){
      BookingIndustry::updateOrInsert( [
        'booking_id' => $booking->id,
        'industry_id' => $industry,
      ], []);
    }


   
    //saving industries
    foreach($selectedDepartments as $department){
      BookingDepartment::updateOrInsert( [
        'booking_id' => $booking->id,
        'department_id' => $department['department_id'],
      ], []);
    }
}

  private static function generateBookingNumber()
  {
      $latestBooking = Booking::orderBy('created_at','DESC')->first();
      if(!empty($latestBooking))
      $bookingNum = $latestBooking->id;
      else
      $bookingNum = 0;
      $bookId = '1'.str_pad($bookingNum + 1, 5, "0", STR_PAD_LEFT);
      return $bookId;
  }

  public static function getBookingCharges($booking,$services,$dates,$schedule){
   
   
    foreach($services as &$service){
        $service=SELF::calculateServiceTotal($service,$schedule,$dates[0]['day_rate']);

    }
   //calculate booking total
    return $services;
  }
  
  public static function calculateServiceTotal($service,$schedule,$dayRate=false){
   
   //step 1 : get business and after business hours
    $service['business_hours']=0;
    $service['after_business_hours']=0;
    $service['business_minutes']=0;
    $service['after_business_minutes']=0;
    $service['day_rate']=$dayRate;
    $service=SELF::getBillableDuration($service,$schedule);
    if(is_null($service['provider_count']) || $service['provider_count']=='')
      $service['provider_count']=1;
    $minDurationHours = (int)(isset($service['service_data']['minimum_assistance_hours'.$service['postFix']]) && !is_null($service['service_data']['minimum_assistance_hours'.$service['postFix']])  && ($service['service_data']['minimum_assistance_hours'.$service['postFix']]!='')) 
    ? $service['service_data']['minimum_assistance_hours'.$service['postFix']] 
    : 0;

$minDurationMin =(int) (isset($service['service_data']['minimum_assistance_min'.$service['postFix']]) && !is_null($service['service_data']['minimum_assistance_min'.$service['postFix']]) && ($service['service_data']['minimum_assistance_min'.$service['postFix']]!=''))
    ? $service['service_data']['minimum_assistance_min'.$service['postFix']] 
    : 0;


    if($service['service_types']==2){
        $multipleProviderCol='standard_rate_virtual_multiply_provider';
    }
    else{
        $multipleProviderCol='standard_in_person_multiply_provider'.$service['postFix'];
    }
   
  
   //step 2 : calculate booking billable duration with billing increments - skipping for now
   
   //apply standard charges to duration
   if($service['service_data']['rate_status']==4){ //for fixed rate
    $service['after_business_hour_charges']=0;
    $service['business_hour_charges']=0;
    if($service['service_data'][$multipleProviderCol]){
        $service['service_charges']=$service['service_data']['fixed_rate'.$service['postFix']]*$service['provider_count'];
    }
    else
      $service['service_charges']=$service['service_data']['fixed_rate'.$service['postFix']];
   }
   elseif($service['service_data']['rate_status']==1){ //for hourly rate - temp fix for day rate
    if(((int)$service['total_duration']['hours']*60+(int)$service['total_duration']['mins'])<($minDurationHours*60+(int)$minDurationMin))
    {
        $bh=(int)$minDurationHours;
        $bm=(int)$minDurationMin;
        $abh=0;
        $abm=0;
        if($service['after_business_hours']>0 || $service['after_business_minutes']>0){  //means min duration will be calculated on both business and after-hour rates
          $bh=(int)$service['business_hours'];
          $bm=(int)$service['business_minutes'];
          $abh=$bh-$service['after_business_hours'];
          $abm=$bm-$service['after_business_minutes'];
        }
    }
    else{
        $bh=$service['business_hours'];
        $bm=$service['business_minutes'];
        $abh=$service['after_business_hours'];
        $abm=$service['after_business_minutes'];

    }

    if($service['service_data'][$multipleProviderCol]){
     
        $service['business_hour_charges']=($service['service_data']['hours_price'.$service['postFix']]*$service['provider_count']*$bh)+(($service['service_data']['hours_price'.$service['postFix']]/60)*$service['provider_count']*$bm);
        $service['after_business_hour_charges']=($service['service_data']['after_hours_price'.$service['postFix']]*$service['provider_count']*$abh)+(($service['service_data']['after_hours_price'.$service['postFix']]/60)*$service['provider_count']*$abm);
       
    }
    else{
        $service['business_hour_charges']=($service['service_data']['hours_price'.$service['postFix']]*$bh)+(($service['service_data']['hours_price'.$service['postFix']]/60)*$service['provider_count']*$bm);
        $service['after_business_hour_charges']=($service['service_data']['after_hours_price'.$service['postFix']]*$abh)+(($service['service_data']['after_hours_price'.$service['postFix']]/60)*$abm);
      
    }
   
    $service['service_charges']=$service['business_hour_charges']+$service['after_business_hour_charges'];
   }
   elseif($service['service_data']['rate_status']==2){
        $dayCharge=$service['service_data']['day_rate_price'.$service['postFix']];
       
        $service["business_hour_charges"] =0;
         $service["after_business_hour_charges"]=0;
        $service['service_charges']=$service['total_duration']['days']*$dayCharge+(($service['total_duration']['hours']/24)*$dayCharge)+(($service['total_duration']['mins']/24/60)*$dayCharge);
   }

  
   $service['additional_payments']=[];
   $service['service_payment_total']=0;
   $service['additional_charges']=[];
   $service['additional_charges_total']=0;
   //step 3: check service charges and add one time payments

   if(!is_null($service['service_data']['service_charge'.$service['postFix']])) {
    $serviceCharges=json_decode($service['service_data']['service_charge'.$service['postFix']],true);

    
    foreach($serviceCharges as $serviceCharge){
     
            $charges=$serviceCharge[0]['price'];
           
            if(array_key_exists('multiply_providers',$serviceCharge[0]) && $serviceCharge[0]['multiply_providers'])
              $charges*=$service['provider_count'];

              if(((int)$service['total_duration']['hours']*60+(int)$service['total_duration']['mins'])<($minDurationHours*60+(int)$minDurationMin))
              $charges*=$minDurationHours+($minDurationMin/60);
            elseif(array_key_exists('multiply_duration',$serviceCharge[0]) && $serviceCharge[0]['multiply_duration'])
              $charges*=$service['total_duration']['hours']+($service['total_duration']['mins']/60);
              
            $service['additional_charges'][]=['label'=>$serviceCharge[0]['label'],'charges'=>$charges];
            $service['additional_charges_total']+=$charges;
       
    }
  }

    if(!is_null($service['service_data']['service_payment'.$service['postFix']])) {
          $servicePayments=json_decode($service['service_data']['service_payment'.$service['postFix']],true);
        // dd($servicePayments);
          foreach($servicePayments as $servicePayment){
          // 
              if(array_key_exists('charge_customer',$servicePayment[0]) && $servicePayment[0]['charge_customer']){
                  $charges=$servicePayment[0]['price'];
                  if(array_key_exists('multiply_providers',$servicePayment[0]) && $servicePayment[0]['multiply_providers'])
                    $charges*=$service['provider_count'];
                  $service['additional_payments'][]=['label'=>$servicePayment[0]['label'],'charges'=>$charges];
                  $service['service_payment_total']+=$charges;
              }
          }
    }
   
    //step 4 : check for specializations 
    $service['specialization']=json_decode($service['specialization'],true);
    $service['specialization_total']=0;
    $service['specialization_charges']=[];
    $spCharges=[];
    if(is_array($service['specialization']) && count($service['specialization'])>0){
      foreach($service['specialization'] as $specialization){
        foreach($service['service_data']['specializations'] as $serviceSpecialization){
          $spCharges=[];
          if($serviceSpecialization['id']==$specialization){
              $spCharges=json_decode($serviceSpecialization['pivot']['specialization_price'.$service['postFix']],true);
              $spCharges=$spCharges[0];
              /*need to clearify     "price_type" => "$"
                "hide_from_customers" => true
                 "hide_from_providers" => true and disable*/
                $charges=0;
                 if(array_key_exists('price_type',$spCharges) && $spCharges['price_type']=="$" && array_key_exists('price',$spCharges)  && $spCharges['price']!=''){
                   $charges=$spCharges['price'];
                  
                 }
                 elseif(array_key_exists('price_type',$spCharges) && $spCharges['price_type']=="%" && array_key_exists('price',$spCharges) && $spCharges['price']!=''){
                
                   $charges= $service['service_charges']*($spCharges['price']/100);
                  
                  
                 }
              
                 if(array_key_exists('multiply_provider',$spCharges) && $spCharges['multiply_provider']){

                  $charges=(int)$charges*(int)$service['provider_count'];
                 }
                 if(((int)$service['total_duration']['hours']*60+(int)$service['total_duration']['mins'])<($minDurationHours*60+(int)$minDurationMin))
                  $charges*=$minDurationHours+($minDurationMin/60);
                 elseif(array_key_exists('multiply_service_duration',$spCharges) &&  $spCharges['multiply_service_duration']){
                  $charges=$charges*($service['total_duration']['hours']+($service['total_duration']['mins']/60));
                 }
                 $service['specialization_charges'][]=['label'=>$serviceSpecialization['name'],'charges'=>$charges];
                 $service['specialization_total']+=$charges;
          }
        }
      }
    }   //end of specialization calculations 
    
    //step 5: check for expedited service charges and add 
 
    $service['expedited_charges']=SELF::getExpeditedCharge($service['start_time'],$service['service_data']['emergency_hour'.$service['postFix']]);
    if($service['expedited_charges']['multiply_duration']){
      if(((int)$service['total_duration']['hours']*60+(int)$service['total_duration']['mins'])<($minDurationHours*60+(int)$minDurationMin))
      $service['expedited_charges']['charges']*=$minDurationHours+($minDurationMin/60);
     elseif(array_key_exists('multiply_service_duration',$spCharges) &&  $spCharges['multiply_service_duration']){
      $service['expedited_charges']['charges']=$service['expedited_charges']['charges']*($service['total_duration']['hours']+($service['total_duration']['mins']/60));
     }
    }
   
    $service['total_charges']=$service['expedited_charges']['charges']+$service['specialization_total']+ $service['service_payment_total']+ $service['additional_charges_total']+$service['service_charges'];
    if(is_null($service['billed_total']) || $service['billed_total']==0){
      $service['billed_total']=$service['total_charges'];
    }
   
   return $service;
    
   
    
    
    
  }

  static function getExpeditedCharge($bookingStartTime, $expeditedDataJson) {
    if(is_null($expeditedDataJson)){
      return ['charges'=>0,'hour'=>'n/a','multiply_duration'=>false];
    }
    // Step 1: Parse JSON data to PHP arrays
    $expeditedData = json_decode($expeditedDataJson, true);
    
    // Step 2: Sort arrays based on the 'hour' parameter
    usort($expeditedData, function($a, $b) {
        return $b[0]['hour'] - $a[0]['hour']; // Sort in descending order to check the larger hours first
    });

    // Step 3: Get the time difference in hours
    $currentDateTime = new DateTime();
    $bookingStartDateTime = new DateTime($bookingStartTime); // Assuming $bookingStartTime is in a format supported by DateTime
   
    $interval = $currentDateTime->diff($bookingStartDateTime);
    $hoursDifference = $interval->h + ($interval->days * 24); // Convert days to hours and add to hour difference

    // Step 4: Check if the hoursDifference matches with any 'hour' value and add respective charges
    foreach ($expeditedData as $expeditedItemArray) {
        foreach ($expeditedItemArray as $expeditedItem) {
        
            if ($hoursDifference <= intval($expeditedItem['hour'])) {
               if(key_exists('multiply_duration',$expeditedItem)){
                $md=$expeditedItem['multiply_duration'];
               }
                return ['charges'=>floatval($expeditedItem['price']),'hour'=>$expeditedItem['hour'],'multiply_duration'=>$md]; // Returning the price to be added as expedited charges
            }
        }
    }

    return ['charges'=>0,'hour'=>'n/a','multiply_duration'=>false]; // No expedited charges applicable
}


  public static function getBillableDuration($service,$schedule){
    //for single date 
   if(is_null($schedule))
      return; 
    $duration=SELF::calculateDuration($service['start_time'],$service['end_time'],$service['day_rate']);
  
    $startDayOfWeek = Carbon::parse($service['start_time'])->format('l');
    $endDayOfWeek = Carbon::parse($service['end_time'])->format('l');
    $startTime = Carbon::parse($service['start_time'])->format('H:i:s');
    $endTime= Carbon::parse($service['end_time'])->format('H:i:s');
    $starttime = Carbon::createFromTimeString($startTime);
    $endtime = Carbon::createFromTimeString($endTime);
    $service['business_hours'] = 0;
    $service['business_minutes'] = 0;

    $service['business_start_time'] = '';
    $service['business_end_time'] = '';

    $service['after_business_hours'] = 0;
    $service['after_business_minutes'] = 0;

    $service['after_business_start_time'] ='';
    $service['after_business_end_time'] = '';
  
    if(!is_null($duration) && ($duration['days']==0 &&  $duration['hours']<24)){
        //single day booking 

        foreach($schedule->timeslots as $timeSlot){

            if($timeSlot->timeslot_day == $startDayOfWeek && $timeSlot->timeslot_type == 1){
            
                // Check if the duration falls between business hours
                $slotStart = Carbon::parse($timeSlot['timeslot_start_time'])->format('H:i:s');
                $slotEnd = Carbon::parse($timeSlot['timeslot_end_time'])->format('H:i:s');
            
                $timeslotStart = Carbon::createFromTimeString($slotStart);
                $timeslotEnd = Carbon::createFromTimeString($slotEnd);
            
                $starttime = Carbon::createFromTimeString($startTime);
                $endtime = Carbon::createFromTimeString($endTime);
                 // Calculate total duration in minutes
                 $totalDurationInMinutes = $endtime->diffInMinutes($starttime);
            
                 // Calculate overlapping duration in minutes
                 $overlapDurationInMinutes = 0;
                           // Find the overlapping period
                           $overlapStart = $timeslotStart->greaterThan($starttime) ? $timeslotStart : $starttime;
                           $overlapEnd = $timeslotEnd->lessThan($endtime) ? $timeslotEnd : $endtime; 

               if($overlapEnd>$overlapStart){

                
                // Calculate the duration of the overlapping period in hours and minutes
                $overlapInterval = $overlapEnd->diff($overlapStart);
                $service['business_hours'] += $overlapInterval->h;
                $service['business_minutes'] += $overlapInterval->i;
            
                $service['business_start_time'] = $overlapStart->format('Y-m-d H:i:s');
                $service['business_end_time'] = $overlapEnd->format('Y-m-d H:i:s');
                             
            
                                // Calculate overlapping duration in minutes
                                $overlapDurationInMinutes = $overlapInterval->h * 60 + $overlapInterval->i;
               }
             
        

            
                if($overlapDurationInMinutes < $totalDurationInMinutes){
                    $afterBusinessDurationInMinutes = $totalDurationInMinutes - $overlapDurationInMinutes;
                    
                    $service['after_business_hours'] += (int)($afterBusinessDurationInMinutes / 60);
                    $service['after_business_minutes'] += $afterBusinessDurationInMinutes % 60;
            
                    $service['after_business_start_time'] = $overlapEnd->format('Y-m-d H:i:s');
                    $service['after_business_end_time'] = $endtime->format('Y-m-d H:i:s');
                }
            
               
            }
            
            
            
            
            
        }
    }
    else{

        $days=SELF::getDaysInBetween($startDayOfWeek,$endDayOfWeek);
        //multiple day booking
        foreach($days as $index=>$day){
          foreach($schedule->timeslots as $timeSlot){

            if($timeSlot->timeslot_day == $day && $timeSlot->timeslot_type == 1){
           
                // Check if the duration falls between business hours
                $slotStart = Carbon::parse($timeSlot['timeslot_start_time'])->format('H:i:s');
                $slotEnd = Carbon::parse($timeSlot['timeslot_end_time'])->format('H:i:s');
            
                $timeslotStart = Carbon::createFromTimeString($slotStart);
                $timeslotEnd = Carbon::createFromTimeString($slotEnd);
                if($index==0)
                  $starttime = Carbon::createFromTimeString($startTime);
                else{
                  $starttime=$timeslotStart;
                
                  $service['after_business_hours'] += $starttime->hour;
                  $service['after_business_minutes'] += 1;
                }
                 

                if($index+1==count($days))
                  $endtime = Carbon::createFromTimeString($endTime); //last day stop at actual end time
                else 
                  $endtime= Carbon::createFromTimeString('23:59:59'); //other day calculate till 12 am
               
                // Calculate total duration in minutes
                $totalDurationInMinutes = $endtime->diffInMinutes($starttime);
            
                // Calculate overlapping duration in minutes
                $overlapDurationInMinutes = 0;
                          // Find the overlapping period
                          $overlapStart = $timeslotStart->greaterThan($starttime) ? $timeslotStart : $starttime;
                          $overlapEnd = $timeslotEnd->lessThan($endtime) ? $timeslotEnd : $endtime; 

              if($overlapEnd>$overlapStart){

                
                // Calculate the duration of the overlapping period in hours and minutes
                $overlapInterval = $overlapEnd->diff($overlapStart);
                $service['business_hours'] += $overlapInterval->h;
                $service['business_minutes'] += $overlapInterval->i;
            
                $service['business_start_time'] = $overlapStart->format('Y-m-d H:i:s');
                $service['business_end_time'] = $overlapEnd->format('Y-m-d H:i:s');
                            
            
                                // Calculate overlapping duration in minutes
                                $overlapDurationInMinutes = $overlapInterval->h * 60 + $overlapInterval->i;
              }
            
        

            
                if($overlapDurationInMinutes < $totalDurationInMinutes){
                    $afterBusinessDurationInMinutes = $totalDurationInMinutes - $overlapDurationInMinutes;
                    
                    $service['after_business_hours'] += (int)($afterBusinessDurationInMinutes / 60);
                    $service['after_business_minutes'] += $afterBusinessDurationInMinutes % 60;
            
                    $service['after_business_start_time'] = $overlapEnd->format('Y-m-d H:i:s');
                    $service['after_business_end_time'] = $endtime->format('Y-m-d H:i:s');
                }
          
              
            }
            
            
            
            
            
        }
        
        }

        
    
        
    }
    if($service['after_business_minutes']>60){
      $service['after_business_hours']+=ceil($service['after_business_minutes']/60);
      $service['after_business_minutes']=$service['after_business_minutes']%60;
    }

    $service['total_duration']=$duration;
  
    return $service;

  }


  public static function getDaysInBetween($startDayOfWeek,$endDayOfWeek){
    $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];



$startIndex = array_search($startDayOfWeek, $daysOfWeek);
$endIndex = array_search($endDayOfWeek, $daysOfWeek);

$daysInBetween = [];

if ($startIndex <= $endIndex) {
    for ($i = $startIndex; $i <= $endIndex; $i++) {
        $daysInBetween[] = $daysOfWeek[$i];
    }
} else {
    for ($i = $startIndex; $i < count($daysOfWeek); $i++) {
        $daysInBetween[] = $daysOfWeek[$i];
    }
    for ($i = 0; $i <= $endIndex; $i++) {
        $daysInBetween[] = $daysOfWeek[$i];
    }
}

 return $daysInBetween;

  }

  public static function getSchedule($company,$customer){
  
    $scheduleChecks=[
        ['model_type'=>3,'model_id'=>$customer],
        ['model_type'=>2,'model_id'=>$company],
        ['model_type'=>1,'model_id'=>1]
    ];
    foreach($scheduleChecks as $scheduleData){
        $schedule = Schedule::where('model_id', $scheduleData['model_id'])->where('model_type', $scheduleData['model_type'])->with('timeslots','holidays')->get()->first();
       
        if(!is_null($schedule) && count($schedule['timeslots'])){
       
            return $schedule;
        }
    }
   


  }

  public static function calculateDuration($startTime,$endTime,$dayRate=false){
    $startDateTime = Carbon::create($startTime);
    $days=0;$hours=0;$minutes=0;$timeError=true;
    $endDateTime =  Carbon::create($endTime);
 
    if ($endDateTime >= $startDateTime) {
        $timeError=false;
        $diff = $endDateTime->diff($startDateTime);
        $days=null;
        if($dayRate){
            $days = $diff->days;
            $hours = $diff->h;
            $minutes = $diff->i;
        }
        else{
         
            $hours =  $endDateTime->diffInHours($startDateTime);
            $minutes = $diff->i; 
        }

      
      
    }
    return ['days'=>$days,'hours'=>$hours,'mins'=>$minutes,'timeError'=>$timeError];
  }
  public static function createRecurring($booking_id)
  {
    try{
      DB::beginTransaction();
    $booking  = Booking::find($booking_id);
    if($booking->frequency_id == 1 || $booking->is_recurring==0){
      return false;
    }
    $booking_start  = Carbon::createFromFormat('Y-m-d H:i:s', $booking->booking_start_at);
    $booking_end    = Carbon::createFromFormat('Y-m-d H:i:s', $booking->booking_end_at);
    $bookingDays    = $booking_end->diffInDays($booking_start);
    $recurring_start= Carbon::parse($booking->booking_start_at)->format('Y-m-d');
    $recurring_end= Carbon::parse($booking->recurring_end_at)->format('Y-m-d');
  
    $i              = 1;
    $newBooking     =  Arr::except($booking->toArray(), [ 'id','created_at','updated_at','referral_code','']);

  //  if($booking->layout == 1)
  //  {
        $specializations  = $booking->booking_services_layout->toArray();
 //   }else{
 //       $specializations= $booking->specialization->toArray();
 //   }
    $newPayment     =  Arr::except($booking->payment->toArray(),['id','created_at','updated_at','coupon_discount_amount','coupon_id','coupon_type','booking_id']);

    $customize_data  = $booking->customize_data->toArray();
    $newBooking['parent_id']  = $booking->id;
//    $newBooking['supervisor']  = $booking->supervisor;
//    dd($recurring_start,$recurring_end);
    Switch($booking->frequency_id){
      case(2):
        for ($jobdate = $recurring_start; $jobdate <= $recurring_end;) {
          $jobdate  = Carbon::parse($jobdate)->addDays($bookingDays+1)->format('Y-m-d');
          if($jobdate > $recurring_end){
            break;
          }
          $jobStartAt    = $jobdate.' '.$booking_start->format('H:i:s');
          $jobEndAt      = Carbon::parse($jobdate)->addDays($bookingDays)->format('Y-m-d').' '.$booking_end->format('H:i:s');
          $newBooking['booking_start_at']  = $jobStartAt;
          $newBooking['booking_end_at']    = $jobEndAt;
          $newBooking['booking_number']    = $booking->booking_number.'-'.$i;

          self::saveRecurringBooking($newBooking,$booking,$specializations,$newPayment,$customize_data);
          $i++;

      }
        break;
        case(4):
        for ($jobdate = $recurring_start; $jobdate <= $recurring_end;) {
          $jobdate  = Carbon::parse($jobdate)->addDays($bookingDays+1)->format('Y-m-d');
          if($jobdate > $recurring_end){
            break;
          }
          $jobStartAt    = $jobdate.' '.$booking_start->format('H:i:s');
          $dayName       = Carbon::parse($jobStartAt)->dayName;
          if($dayName == "Saturday" || $dayName == "Sunday")
          {
              continue;
          }
          $jobEndAt      = Carbon::parse($jobdate)->addDays($bookingDays)->format('Y-m-d').' '.$booking_end->format('H:i:s');
          $newBooking['booking_start_at']  = $jobStartAt;
          $newBooking['booking_end_at']    = $jobEndAt;
          $newBooking['booking_number']    = $booking->booking_number.'-'.$i;

          self::saveRecurringBooking($newBooking,$booking,$specializations,$newPayment,$customize_data);
          $i++;

      }
        // echo "WeekDaily";
      break;
      case(3):
        
         for ($jobdate = $recurring_start; $jobdate <= $recurring_end;) {
        
           if($bookingDays<7)
           {
            $jobdate  = Carbon::parse($jobdate)->addDays(7)->format('Y-m-d');
            
           }else{
             if(ceil($bookingDays/7)==1)
             {
              $count    = 14;
             }else{
              $count    = ceil($bookingDays/7)*7;
             }
            $jobdate  = Carbon::parse($jobdate)->addDays($count)->format('Y-m-d');
           }
           $jobEndDate  = Carbon::parse($jobdate)->addDays($bookingDays)->format('Y-m-d');
          if($jobEndDate > $recurring_end){
           break;
          }
         
          $jobStartAt    = $jobdate.' '.$booking_start->format('H:i:s');
          $jobEndAt      = Carbon::parse($jobdate)->addDays($bookingDays)->format('Y-m-d').' '.$booking_end->format('H:i:s');
          // prt($jobStartAt);
          // prt($jobEndAt);
          $newBooking['booking_start_at']  = $jobStartAt;
          $newBooking['booking_end_at']    = $jobEndAt;
          $newBooking['booking_number']    = $booking->booking_number.'-'.$i;

          self::saveRecurringBooking($newBooking,$booking,$specializations,$newPayment,$customize_data);
          $i++;
         }
      break;
      case(5):
        // echo "monthly";

        $lastDayofMonth   =  Carbon::parse($recurring_start)->lastOfMonth()->format('Y-m-d');
        $diffinMonths     = Carbon::parse($recurring_end)->diffInMonths(Carbon::parse($recurring_start));
        $jobdate          = $recurring_start;

       for ($months = 1; $months <= $diffinMonths; $months++) {
          if($lastDayofMonth==$recurring_start){
            $jobdate    = Carbon::parse($recurring_start)->addMonthsNoOverflow($months)->format('Y-m-d');
            $jobdate    = Carbon::parse($jobdate)->endOfMonth()->format('Y-m-d');
          }else{
            $jobdate    = Carbon::parse($recurring_start)->addMonthsNoOverflow($months)->format('Y-m-d');
          }
          $jobEndDate  = Carbon::parse($jobdate)->addDays($bookingDays)->format('Y-m-d');
          if($jobEndDate > $recurring_end){
            echo "break";
            break;
          }
         $jobStartAt    = $jobdate.' '.$booking_start->format('H:i:s');
         $jobEndAt      = Carbon::parse($jobdate)->addDays($bookingDays)->format('Y-m-d').' '.$booking_end->format('H:i:s');
         // prt($jobStartAt);
         // prt($jobEndAt);

         $newBooking['booking_start_at']  = $jobStartAt;
         $newBooking['booking_end_at']    = $jobEndAt;
         $newBooking['booking_number']    = $booking->booking_number.'-'.$i;

         self::saveRecurringBooking($newBooking,$booking,$specializations,$newPayment,$customize_data);
         $i++;
        }
      break;

    }
    // prt($booking->toArray() );

    DB::commit();

  } catch (\Exception $e) {
   dd($e);
  }
  }

  public static function saveRecurringBooking($newBooking,$booking,$specializations,$newPayment,$customize_data)
  {
    try{
      DB::beginTransaction();
      $insertedBooking = Booking::create($newBooking);
      $newBookingId = $insertedBooking->id;
      $newStart = $insertedBooking->booking_start_at;
      $newEnd = $insertedBooking->booking_end_at;
      //$payment_deduct_hour = $insertedBooking->service_data->payment_deduct_hour;
     // $final_payment_deduct_hour = "";
     // if($payment_deduct_hour)
    //      $final_payment_deduct_hour = Carbon::parse($newBooking['booking_start_at'])->subHours($payment_deduct_hour);
    //  if($newPayment['payment_method_type']=='Stripe')
    //  {
    // /   $arr = [
       //   'booking_id' => $newBookingId,
     //     'payment_deduct_time' => $final_payment_deduct_hour,
      //    'added_by' => $booking->added_by,
     //     'created_at' => now()
     //   ];
     //   BookingPaymentCron::insert($arr); // deduct hour cron
     // }


      // Assume $booking is the existing booking object with services
      $services = $booking->booking_services;

      // Duplicate each service for the new booking
        foreach ($services as $service) {
            $newService = $service->replicate(); // This will clone the model's attributes
            $newService->booking_id = $newBookingId;
            $newService->start_time=$newStart;
            $newService->end_time=$newEnd;

            $newService->save(); // This will save the new service with the new booking_id
      }
      // if(count($specializations))
      // {
      //     if($insertedBooking->layout == 1)
      //     {
      //         $newSpec = collect($specializations)->map(function ($special) use ($newBookingId,$newStart,$newEnd)
      //         {
      //             $special['booking_id']              = $newBookingId;
      //             $special['id']              = "";
      //             $special['start_time']              = $newStart;
      //             $special['end_time']              = $newEnd;
      //             return $special;
      //         });
      //         BookingServices::insert($newSpec->all());
      //     }
      //     else
      //     {
      //         $newSpec = array_map("new_spec", $specializations, array($newBookingId));
      //         BookingSpecialization::insert($newSpec); // specializations
      //     }
      // }
        $book = Booking::find($newBookingId);
        $book->update(['is_closed' => $book->isBookingCompleted()]);

        $newPayment['booking_id'] = $newBookingId;
        Payment::insert($newPayment);

      if(count($customize_data))
      {
      // $customize_data =   self::arrayReplace($customize_data, 'booking_id',$newBookingId);

        $customize_data = array_map("customize_data",$customize_data,array($newBookingId));
        $customize_data =   self::arrayReplace($customize_data, 'booking_id',$newBookingId);
        foreach ($customize_data as $data)
        {
          if(key_exists('customize_data',$data) && !is_null($data['customize_data']) && $data['customize_data']!=''){
            BookingCustomizeData::insert([
              'booking_log_id'=>$data['booking_log_id'],
              'booking_log_bbid'=>$data['booking_log_bbid'],
              'booking_id'=>$data['booking_id'],
              'service_id'=>$data['service_id'],
              'customize_id'=>$data['customize_id'],
              'data_value'=>$data['data_value'],
              'customize_data'=>$data['customize_data'],
              'added_by'=>$data['added_by'],
              'field_title'=>json_encode($data['field_title']),
          ]);
          }

        }
//        BookingCustomizeData::insert($customize_data); // customize data
      }
      //Update Booking Request Info
        $booking_request_information = $booking->booking_request_information;
        if ($booking_request_information)
        {
            foreach ($booking_request_information as $bri) {
                $newCustomize = $bri->replicate();
                $newCustomize->booking_log_id = "";
                $newCustomize->booking_id = $newBookingId;
                $newCustomize->save();
            }
        }

      DB::commit();
    } catch (\Exception $e) {
   dd($e);

    }
  }

  public static function arrayReplace($Array, $Find, $Replace){
    if(is_array($Array)){
      foreach($Array as $Key=>$Val) {
        if(is_array($Array[$Key])){
          $Array[$Key] = self::arrayReplace($Array[$Key], $Find, $Replace);
        }else{
          if($Key === $Find) {
             $Array[$Key] = $Replace;
          }
        }
      }
    }
    return $Array;
  }

  public static function getBookingDetails($bookingId,$serviceTypes,$parameter,$dataColumn){
    $booking = Booking::where('id', $bookingId)->with('payment','booking_services','services','customer')->first();
    $totalCharges=0;
    foreach($booking['booking_services'] as $index=>$bookingService){
      
      $postFix=$serviceTypes[$bookingService['service_types']]['postfix'];
      $serviceCharge=0;
      if(!is_null($booking['services'][$index][$dataColumn.$postFix])){
        $cancellationCharges=json_decode($booking['services'][$index][$dataColumn.$postFix],true);
        $charges=SELF::getCharges($cancellationCharges,$bookingService['start_time'],$parameter);
        $serviceCharge=$charges['charges'];
        if($charges['multiply_duration']){
          $bookingServiceData=(json_decode($bookingService['service_calculations'],true)); 
          $serviceCharge=$serviceCharge*(($bookingServiceData['total_duration']['days']*24)+$bookingServiceData['total_duration']['hours']+($bookingServiceData['total_duration']['mins']/60));
        
        }
        if($charges['multiply_providers']){
          $serviceCharge=$serviceCharge*$bookingService['provider_count'];
        }  
        $totalCharges+=$serviceCharge;

      }
    }
    $booking->status=4; //default cancel billable
    $booking->payment->cancellation_charges=$totalCharges;
   
    return $booking;
  }

  public static function reinstateBooking($bookingId){
    $booking = Booking::where('id', $bookingId)->with('payment','booking_services')->first();
    $booking->cancelled_by=0;
    $booking->booking_cancelled_at=null;
    $status=2;
    //determine status
    foreach($booking->booking_services as $service){
      $providerCount = (int)$service->provider_count;
      
      $assignedProvidersCount = BookingProvider::where('booking_service_id',$service->id)->count();
   
      if ($providerCount !== $assignedProvidersCount) {
         $status=1;
      }
    }
 
    $booking->status=$status;
    $booking->cancellation_notes='';
    $booking->cancel_provider_payment=0;
    $booking->save();
    
    $booking->payment->cancellation_charges=0;
    $booking->payment->save();

  }

  public static function cancelBooking($booking){
     
     $booking->cancelled_by=Auth::user()->id;
     $booking->booking_cancelled_at=now();
     $booking->save();
    
     $booking->payment->save();


  }

  public static function getCharges($cancellationData,$bookingStartTime,$parameter){

    // Step 2: Sort arrays based on the 'hour' parameter
    usort($cancellationData, function($a, $b) {
        return $b[0]['hour'] - $a[0]['hour']; // Sort in descending order to check the larger hours first
    });

    // Step 3: Get the time difference in hours
    $currentDateTime = new DateTime();
    $bookingStartDateTime = new DateTime($bookingStartTime); // Assuming $bookingStartTime is in a format supported by DateTime
   
    $interval = $currentDateTime->diff($bookingStartDateTime);
    $hoursDifference = $interval->h + ($interval->days * 24); // Convert days to hours and add to hour difference

    // Step 4: Check if the hoursDifference matches with any 'hour' value and add respective charges
    foreach ($cancellationData as $cancelItemArray) {
        foreach ($cancelItemArray as $cancelItem) {
        
            if (key_exists($parameter,$cancelItem) && $cancelItem[$parameter]==true &&  $hoursDifference <= intval($cancelItem['hour'])) {
               if(key_exists('multiply_duration',$cancelItem)){
                $md=$cancelItem['multiply_duration'];
               }
               if(key_exists('multiply_providers',$cancelItem)){
                $mp=$cancelItem['multiply_providers'];
               }
                return ['charges'=>floatval($cancelItem['price']),'hour'=>$cancelItem['hour'],'multiply_duration'=>$md,'multiply_providers'=>$mp]; // Returning the price to be added as expedited charges
            }
        }
    }

    return ['charges'=>0,'hour'=>'n/a','multiply_duration'=>false,'multiply_providers'=>false]; // No charges applicable
  }

 
  public static function updateServiceCalculations($service,$bookingId){
    $serviceCalculations=[
      "business_hour_charges" => $service["business_hour_charges"],
      "after_business_hour_charges" =>  $service["after_business_hour_charges"],
      "service_charges" => $service["service_charges"],
      "additional_payments" => $service["additional_payments"],
      "service_payment_total"=> $service["service_payment_total"],
      "additional_charges" =>  $service["additional_charges"],
      "additional_charges_total" => $service["additional_charges_total"],
      "specialization_total" => $service["specialization_total"],
      "specialization_charges" => $service["specialization_charges"],
      "expedited_charges" => $service["expedited_charges"],
      "duration_hour"=>$service['business_hours']+$service['after_business_hours'],
      "duration_minute"=>$service['business_minutes']+$service['after_business_minutes'],
      "total_duration"=>$service['total_duration'],
      'day_rate'=>$service['day_rate'],
      'business_hour_duration'=>($service['business_hours']*60)+($service['business_minutes']),
      'after_hour_duration'=>($service['after_business_hours']*60)+($service['after_business_minutes']),

     ];
     $serviceCalculations=json_encode($serviceCalculations);
   
      
      BookingServices::where('id', $service['id'])->where('booking_id', $bookingId)->update(['billed_total' => $service['billed_total'],'service_total'=>$service['total_charges'],'service_calculations'=>$serviceCalculations]);
      return $service;
  }

}
<?php
namespace app\Services\App;
use App\Models\Tenant\User;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\BookingIndustry;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\UserAddress;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\Company;
use App\Models\Tenant\BusinessSetup;
use App\Models\Tenant\ServiceSpecialization;
use Auth;
use Carbon\Carbon;
use App\Helpers\GlobalFunctions;
use DateTime;
use Log;

class BookingOperationsService{

 

  public static function createBooking($booking, $services, $dates,$selectedIndustries){
    $booking->booking_number=self::generateBookingNumber();
    $booking->user_id=Auth::user()->id;
    //data mapping for main booking table
    $booking->accommodation_id=$services[0]['accommodation_id'];
    $booking->service_category=$services[0]['services'];
    $booking->industry_id=$selectedIndustries[0];
    $booking->provider_count=$services[0]['provider_count'];
    $booking->service_type=$services[0]['service_types'];
    $booking->booking_status=0;
    $booking->type=2;
    $booking->status=1;
    $booking->booking_start_at =  Carbon::parse($dates[0]['start_date'].' '.$dates[0]['start_hour'].':'.$dates[0]['start_min'].':00')->format('Y-m-d H:i:s');;
    $booking->booking_end_at =  Carbon::parse($dates[0]['start_date'].' '.$dates[0]['start_hour'].':'.$dates[0]['start_min'].':00')->format('Y-m-d H:i:s');;
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
    SELF::saveDetails($services,$dates,$selectedIndustries,$booking);

    return $booking;
    
  }

  public static function saveDetails($services,$dates,$selectedIndustries,$booking)
   {
    BookingServices::where('booking_id', $booking->id)->delete();
   // dd($services);
    foreach($services as $service){
        $service['booking_id']=$booking->id;
        $service['booking_log_id']=0;
        $service['meetings']= json_encode($service['meetings']);
        $service['specialization'] = json_encode([$service['specialization']]);
       // dd($service['specialization']);
        if(is_array($service['attendees']))
            $service['attendees']=implode(',',$service['attendees']);
        $service['status']='1';
        $service['start_time'] =  Carbon::parse($dates[0]['start_date'].' '.$dates[0]['start_hour'].':'.$dates[0]['start_min'].':00')->format('Y-m-d H:i:s');
        $service['end_time'] =  Carbon::parse($dates[0]['end_date'].' '.$dates[0]['end_hour'].':'.$dates[0]['end_min'].':00')->format('Y-m-d H:i:s');
        $service['time_zone'] =  $dates[0]['time_zone'];
    
       
        BookingServices::create($service);
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

  public static function getBookingCharges($booking,$services,$dates){
    $schedule=SELF::getSchedule($booking->company_id,$booking->customer_id);
   
    foreach($services as &$service){
        $service=SELF::calculateServiceTotal($service,$schedule);

    }
   //calculate booking total
    return $services;
  }
  
  public static function calculateServiceTotal($service,$schedule){
   //step 1 : get business and after business hours
    $service=SELF::getBillableDuration($service,$schedule);
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
   elseif($service['service_data']['rate_status']==1){ //for hourly rate
    if($service['service_data'][$multipleProviderCol]){
        $service['business_hour_charges']=($service['service_data']['hours_price'.$service['postFix']]*$service['provider_count']*$service['business_hours'])+(($service['service_data']['hours_price'.$service['postFix']]/60)*$service['provider_count']*$service['business_minutes']);
        $service['after_business_hour_charges']=($service['service_data']['after_hours_price'.$service['postFix']]*$service['provider_count']*$service['after_business_hours'])+(($service['service_data']['after_hours_price'.$service['postFix']]/60)*$service['provider_count']*$service['after_business_minutes']);
       
    }
    else{
        $service['business_hour_charges']=($service['service_data']['hours_price'.$service['postFix']]*$service['business_hours'])+(($service['service_data']['hours_price'.$service['postFix']]/60)*$service['provider_count']*$service['business_minutes']);
        $service['after_business_hour_charges']=($service['service_data']['after_hours_price'.$service['postFix']]*$service['after_business_hours'])+(($service['service_data']['after_hours_price'.$service['postFix']]/60)*$service['after_business_minutes']);
        
    }
   
    $service['service_charges']=$service['business_hour_charges']+$service['after_business_hour_charges'];
   }
   elseif($service['service_data']['rate_status']==2){

   }

  
   $service['additional_payments']=[];
   $service['service_payment_total']=0;
   $service['service_charges']=[];
   $service['service_charge_total']=0;
   //step 3: check service charges and add one time payments

   if(!is_null($service['service_data']['service_charge'.$service['postFix']])) {
    $serviceCharges=json_decode($service['service_data']['service_charge'.$service['postFix']],true);
    foreach($serviceCharges as $serviceCharge){
     
            $charges=$serviceCharge[0]['price'];
            if($serviceCharge[0]['multiply_providers'])
              $charges*=$service['provider_count'];
            if($serviceCharge[0]['multiply_duration'])
              $charges*=$service['total_duration']['hours']+($service['total_duration']['mins']/60);
              
            $service['additional_charges'][]=['label'=>$serviceCharge[0]['label'],'charges'=>$charges];
            $service['service_charge_total']+=$charges;
       
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
  
   //step 5: check for expedited service charges and add 
   
   return $service;
    
   
    
    
    
  }

  public static function getBillableDuration($service,$schedule){
    //for single date 
    $duration=SELF::calculateDuration($service['start_time'],$service['end_time'],$dayRate=false);
    $startDayOfWeek = Carbon::parse($service['start_time'])->format('l');
    $endDayOfWeek = Carbon::parse($service['end_time'])->format('l');
    $startTime = Carbon::parse($service['start_time'])->format('H:i:s');
    $endTime= Carbon::parse($service['end_time'])->format('H:i:s');
    $starttime = Carbon::createFromTimeString($startTime);
    $endtime = Carbon::createFromTimeString($endTime);
    if($duration['days']==null || $duration['days']==0){
        //single day booking 
      
        foreach($schedule->timeslots as $timeSlot){
            $service['business_hours'] = 0;
            $service['business_minutes'] = 0;
        
            $service['business_start_time'] = '';
            $service['business_end_time'] = '';

            $service['after_business_hours'] = 0;
            $service['after_business_minutes'] = 0;
    
            $service['after_business_start_time'] ='';
            $service['after_business_end_time'] = '';
            if($timeSlot->timeslot_day == $startDayOfWeek && $timeSlot->timeslot_type == 1){
                // Check if the duration falls between business hours
                $slotStart = Carbon::parse($timeSlot['timeslot_start_time'])->format('H:i:s');
                $slotEnd = Carbon::parse($timeSlot['timeslot_end_time'])->format('H:i:s');
            
                $timeslotStart = Carbon::createFromTimeString($slotStart);
                $timeslotEnd = Carbon::createFromTimeString($slotEnd);
            
                $starttime = Carbon::createFromTimeString($startTime);
                $endtime = Carbon::createFromTimeString($endTime);
            
                // Find the overlapping period
                $overlapStart = $timeslotStart->greaterThan($starttime) ? $timeslotStart : $starttime;
                $overlapEnd = $timeslotEnd->lessThan($endtime) ? $timeslotEnd : $endtime;
            
                // Calculate the duration of the overlapping period in hours and minutes
                $overlapInterval = $overlapEnd->diff($overlapStart);
                
                $service['business_hours'] = $overlapInterval->h;
                $service['business_minutes'] = $overlapInterval->i;
            
                $service['business_start_time'] = $overlapStart->format('Y-m-d H:i:s');
                $service['business_end_time'] = $overlapEnd->format('Y-m-d H:i:s');
            
                // Calculate total duration in minutes
                $totalDurationInMinutes = $endtime->diffInMinutes($starttime);
            
                // Calculate overlapping duration in minutes
                $overlapDurationInMinutes = $overlapInterval->h * 60 + $overlapInterval->i;
            
                if($overlapDurationInMinutes < $totalDurationInMinutes){
                    $afterBusinessDurationInMinutes = $totalDurationInMinutes - $overlapDurationInMinutes;
                    
                    $service['after_business_hours'] = (int)($afterBusinessDurationInMinutes / 60);
                    $service['after_business_minutes'] = $afterBusinessDurationInMinutes % 60;
            
                    $service['after_business_start_time'] = $overlapEnd->format('Y-m-d H:i:s');
                    $service['after_business_end_time'] = $endtime->format('Y-m-d H:i:s');
                }
            
               
            }
            
            
            
            
            
        }
    }
    else{
        //multiple day booking
    }
    $service['total_duration']=$duration;
    return $service;

  }

  public static function getSchedule($company,$customer){
  
    $scheduleChecks=[
        ['model_type'=>3,'model_id'=>$customer],
        ['model_type'=>2,'model_id'=>$company],
        ['model_type'=>1,'model_id'=>1]
    ];
    foreach($scheduleChecks as $scheduleData){
        $schedule = Schedule::where('model_id', $scheduleData['model_id'])->where('model_type', $scheduleData['model_type'])->with('timeslots','holidays')->get()->first();
        if(!is_null($schedule)){
            return $schedule;
        }
    }
   


  }

  public static function calculateDuration($startTime,$endTime,$dayRate=false){
    $startDateTime = Carbon::create($startTime);
    
    $endDateTime =  Carbon::create($endTime);
 
    if ($endDateTime >= $startDateTime) {
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

      
        return ['days'=>$days,'hours'=>$hours,'mins'=>$minutes];
    }
  }

}
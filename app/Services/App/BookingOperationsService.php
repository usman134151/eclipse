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
    foreach($services as &$service){
        $service['service_total']=SELF::calculateServiceTotal($service);
    }
   //calculate booking total

  }
  
  public static function calculateServiceTotal($service){
   //step 1 : get business schedule
   //step 2 : calculate booking billable duration with billing increments
   //step 3 : check if any time is falling in after business hours

   
   //step 4 : check for specializations 
   //step 5: add additional service charges and payments (if charged from customers)
   //step 6: check for expedited service charges and add 
  // dd($service);
   return [];
    
   
    
    
    
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
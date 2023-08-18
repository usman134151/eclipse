<?php
namespace app\Services\App;
use App\Models\Tenant\User;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\UserAddress;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\Company;
use Auth;
use Carbon\Carbon;

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

    $booking->save();
    //end of data mapping for main booking table
    foreach($services as $service){
        $service['booking_id']=$booking->id;
        $service['booking_log_id']=0;
        $service['meetings']= json_encode($service['meetings']);
        $service['specialization']=json_encode($service['specialization']);
        $service['attendees']=implode(',',$service['attendees']);
        $service['status']='1';
        $service['start_time'] =  Carbon::parse($dates[0]['start_date'].' '.$dates[0]['start_hour'].':'.$dates[0]['start_min'].':00')->format('Y-m-d H:i:s');;
        $service['end_time'] =  Carbon::parse($dates[0]['start_date'].' '.$dates[0]['start_hour'].':'.$dates[0]['start_min'].':00')->format('Y-m-d H:i:s');;
    
       // dd($service);
        BookingServices::create($service);
    }
    //store services


    
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
}

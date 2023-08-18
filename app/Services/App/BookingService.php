<?php
namespace app\Services\App;
use App\Models\Tenant\User;
use App\Models\Tenant\Booking;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\UserAddress;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\Company;
use Auth;


class BookingService{

  public static function createBooking($booking, $services, $dates,$selectedIndustries){
    $booking->booking_number=self::generateBookingNumber();
    $booking->user_id=Auth::user()->id;
    //data mapping for main booking table
    $booking->accommodation_id=$services[0]['accommodation_id'];
    $booking->industry_id=$selectedIndustries[0]['id'];
    $booking->provider_count=$services[0]['provider_count'];
    $booking->service_type=$services[0]['service_types'];


    //end of data mapping for main booking table

    //store services


    $booking->save();
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

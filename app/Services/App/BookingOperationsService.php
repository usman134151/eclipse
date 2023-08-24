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

    $booking->save();
    //end of data mapping for main booking table
    foreach($services as $service){
        $service['booking_id']=$booking->id;
        $service['booking_log_id']=0;
        $service['meetings']= json_encode($service['meetings']);
        $service['specialization']=json_encode($service['specialization']);
        $service['attendees']=implode(',',$service['attendees']);
        $service['status']='1';
        $service['start_time'] =  Carbon::parse($dates[0]['start_date'].' '.$dates[0]['start_hour'].':'.$dates[0]['start_min'].':00')->format('Y-m-d H:i:s');
        $service['end_time'] =  Carbon::parse($dates[0]['end_date'].' '.$dates[0]['end_hour'].':'.$dates[0]['end_min'].':00')->format('Y-m-d H:i:s');
        $service['time_zone'] =  $dates[0]['time_zone'];
    
       // dd($service);
        BookingServices::create($service);
    }
    //store services

    //saving industries
    foreach($selectedIndustries as $industry){
      BookingIndustry::updateOrInsert( [
        'booking_id' => $booking->id,
        'industry_id' => $industry,
      ], []);
    }

    return $booking;
    
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


  public static function bookingCalculationwithService($bookingDetail, $newservices=null)
    {
        try {
            $result = [];
            $service_additional_charges = 0;
            $specialization_total_charge = 0;
            $business_hour_duration = 0;
            $final_time_duration = '';
            $after_business_start_dtime = '';
            $business_final_duration = '';
            $after_final_duration = '';
            $emergency_duration = 0;
            $sesArray = [];
            $during_business_hours_duration = 0;
            $after_hours_duration = 0;
            if ($bookingDetail) {
               
                $service = $newservices->services_data;
                if ($service) {
                  
                    $business_setup = BusinessSetup::first();
                    if ($business_setup) {
                        $booking_start_at = Carbon::parse($newservices->start_time); // booking start date/time In Carbon
                        $booking_start_f = Carbon::parse($newservices->start_time); // booking start date/time In Carbon
                        $booking_end_at = Carbon::parse($newservices->end_time);
                        $earlier = new DateTime($booking_start_at->format('Y-m-d'));  // formated booking start date/time
                        $later = new DateTime($booking_end_at->format('Y-m-d'));

                        $excludedWeekendsHours = self::excludeWeekends($booking_start_at,$booking_end_at);  //final hours if exclude weekends for emergency duration
                        $booking_duration = $booking_end_at->diffInMinutes($booking_start_at);  // calculate booking duration start
                        $hourly_duration = $booking_end_at->diffInHours($booking_start_at);  // calculate booking duration in hours
                        if($hourly_duration < 24) $hourly_duration = 24;
                        list($whole, $decimal) = explode('.', number_format($hourly_duration/24 , 2));
                        $hours_to_days_duration = $whole + ((float)$decimal ? 1 : 0);

                        $booking_hours = floor($booking_duration / 60);    // booking in hours and mints
                        $booking_minutes = ($booking_duration % 60);
                        $bookingDays = $later->diff($earlier)->format("%a");    // booking in days
                        $bookingDays = (int)$bookingDays + 1;
                        $booking_final_duration = $booking_hours . ':' . $booking_minutes;

                        $serviceCharges = 0;
                        $hourPricedb = 0;
                        $fterhourspricedb = 0;
                        $oneTimeCharges = 0;
                        $emergencyHours = 0;
                        $minimum_assistance_time = '';
                        $serviceHours = 0;
                        $bookingTotalProviders = $newservices->provider_count;

                        $booking_type = '';
                        $booking_nature = '';

                        if ($newservices->service_types == "1") $booking_type = "inP";
                        elseif ($newservices->service_types == "2") $booking_type = "inV";
                        switch ($service->rate_status)
                        {
                            case '1':
                                $booking_nature = 'hourly';
                                break;
                            case '2': // day
                                $booking_nature = 'daily';
                                break;
                            case '3': // both day and hour
                                if($newservices->day_rate != 1) $booking_nature = 'hourly';
                                else $booking_nature = 'daily';
                                break;
                            case '4':  // fixed
                                $booking_nature = 'fixed';
                                break;
                        }
                       
                        //for in person
                        if ($booking_type == "inP")
                        {
                            $serviceCharges = $service->service_charge; // object
                            $oneTimeCharges = $service->one_time_payment; // object
                            $emergencyHours = $service->emergency_hour; // object
                            $minimum_assistance_time = $service->minimum_assistance_hours . ':' . $service->minimum_assistance_min;
                            $serviceHours = $service->minimum_assistance_hours + $service->minimum_assistance_min/60;
                            $hourPricedb = $service->hour_price;
                            $fterhourspricedb = $service->after_hours_price;
                        }
                        //for Virtual
                        elseif ($booking_type == "inV")
                        {
                            $serviceCharges = $service->service_charge_v;   // object
                            $oneTimeCharges = $service->one_time_payment_v; // object
                            $emergencyHours = $service->emergency_hour_v; // object
                            $minimum_assistance_time = $service->minimum_assistance_hours_v . ':' . $service->minimum_assistance_min_v;
                            $serviceHours = $service->minimum_assistance_hours_v + $service->minimum_assistance_min_v/60;
                            $hourPricedb = $service->hour_price_v;
                            $fterhourspricedb = $service->after_hours_price_v;
                        }
                      
                        $finalDiffCharges = SELF::getFinalDifferentialsCharges($serviceCharges , $oneTimeCharges , $bookingTotalProviders);
                      
                        $final_serviceCharges = $finalDiffCharges['serviceCharges'];
                        $final_oneTimeCharges = $finalDiffCharges['oneTimeCharges'];

                        $minimum_assistance_sttime = strtotime($minimum_assistance_time);
                        $booking_duration_sttime = date("H:i:s", strtotime("$booking_final_duration"));
                        $booking_duration_sttime = strtotime($booking_duration_sttime);
                        if ($booking_final_duration > $minimum_assistance_time) {
                            $final_duration = $booking_final_duration;

                        } else {

                            if ($booking_duration_sttime < $minimum_assistance_sttime) {
                                $final_duration = $minimum_assistance_time;
                                $booking_end_at = $booking_start_f->addHour($serviceHours);

                            } else {
                                $final_duration = $booking_final_duration;
                            }
                        }
                       
                        $sesArray['service_rate'] = $final_serviceCharges+$final_oneTimeCharges;
                        $sesArray['business_hour_rate'] = $hourPricedb;
                        $sesArray['after_hour_rate'] = $fterhourspricedb;
                        $sesArray['emergency_hour_rate'] = $service->emergency_price;
                        $sesArray['virtual_rate'] = 0.00;

                        $isBookingPast = $bookingDetail->past ? $bookingDetail->past : 0;
                        $emergencyPricesAndHours = SELF::getEmergencyHours($newservices->start_time , $emergencyHours , $isBookingPast);
                        
                        $emergency_hour = $emergencyPricesAndHours['emergency_hours'];
                        $isEmergencyExcludeWeekend = $emergencyPricesAndHours['isEmergencyExcludeWeekend'];
                        $selectedIndex = $emergencyPricesAndHours['selectedIndex'];
                      //  $emergencyHours=json_decode($emergencyHours);
                       if(!is_null($emergencyHours))
                            $firstEmergencyPram = $emergencyHours[0][0]->price;
                        


                        if ($newservices->service_types == "1" || $newservices->service_types == "2") {
                            // calculate booking duration end
                            // calculate hour price start
                            // compare current time with booking start time + emergency hour
                            // if current time are within emergency hour then applied emergency price and if outside then applied business hours price
//                            $duration_array = array();
//                            $business_total = 0;
//                            for ($i = (int)$selectedIndex; $i >= 0; $i--) {
                               if($selectedIndex == 0) {
                                   if ($bookingDays > 1) {
                                       $durations = SELF::calServiceDurationForMultiDays($business_setup, $booking_start_at, $booking_end_at, $bookingDays, $emergency_hour,$isBookingPast);
                                   } else {
                                       $durations = SELF::calServiceDurationForSingleDay($business_setup, $booking_start_at, $booking_end_at, $bookingDays, $emergency_hour,$isBookingPast);
                                   }
                                   $during_business_hours_duration = $durations['during_business_hour_duration'];
                                   $after_hours_duration = $durations['after_hours_duration'];
                                   $emergency_duration = $durations['emergency_duration'];
                               }else {
                                   $during_business_hours_duration = 0;
                                   $after_hours_duration = 0;
                                   $emergency_duration = $booking_end_at->diffInMinutes($booking_start_at);
                               }
//                                $duration_array[$i]['va'] = $emergencyHours[$i][0]->hour ;
//                                $duration_array[$i]['emergency'] = $durations['emergency_duration'];
//                                $duration_array[$i]['during_business_hour_duration'] = $durations['during_business_hour_duration'];
//                                $duration_array[$i]['after_hours_duration'] = $durations['after_hours_duration'];
//
//                                $business_total = $during_business_hours_duration + $after_hours_duration;
//                                if($business_total > 0.00)
//                                    break;

                            }
//                        }

                        $serviceRates = SELF::getServicePrices($service , $newservices);
                        $hours_price = $serviceRates['hourRate'];
                        $after_hours_price =$serviceRates['afterHourRate'];
                        $dayRate = $serviceRates['dayRate'];
                        $fixRate = $serviceRates['fixRate'];
                        $rateProviders = $serviceRates['providers'];

                        
                        $serviceRateForEmergency = 0;
                        if($during_business_hours_duration)  $serviceRateForEmergency += $hours_price;
                        if($after_hours_duration)  $serviceRateForEmergency += $after_hours_price;
                        if($emergency_duration && (int)$during_business_hours_duration < 1 && (int)$after_hours_duration < 1)
                            $serviceRateForEmergency += $hours_price;
                          
                        $serviceRateForEmergency = $serviceRateForEmergency + $dayRate + $fixRate;
                        if(!is_null($emergencyHours))
                            $emergency_total_prices =  SELF::getEmergencyPrice($emergencyHours , $selectedIndex , $serviceRateForEmergency, $bookingTotalProviders);
                        else
                            $emergency_total_prices=['withRate' => 0 , 'withoutRate' => 0];
                        $emergency_price_without_rate = $emergency_total_prices['withoutRate'];
                        $emergency_price_with_rate = $emergency_total_prices['withRate'];

                        if($booking_nature == 'hourly'){
                            $emergency_price = $emergency_price_with_rate;
                        }else{
                            $emergency_price = $emergency_price_without_rate;
                        }
                        
                        // $savebookingCharges = BookingServiceCharges::where('booking_id',$bookingDetail->id)->first();

                        // calcculate final emergency duration price
                        $emrg_hours_total_charge = 0;
                      
                        if ($emergency_duration) {
                            $final_emerg_hours = floor($emergency_duration / 60);
                            $final_emerg_minutes = ($emergency_duration % 60);
                           // $final_emerg_days = ($final_emerg_hours/24) + (($final_emerg_minutes / 60)/24);
                           if ($final_emerg_hours || $final_emerg_minutes){
                            // $emergency_price = $emergency_price * $bookingTotalProviders;
                            switch ($booking_nature)
                            {
                                case 'fixed':  // fixed
                                    $emrg_hours_total_charge = $emergency_price;
                                    break;
                                case 'daily': // day
                                    $emrg_hours_total_charge = $emergency_price;
                                    if ($emergencyHours[$selectedIndex][0]->multiply_duration  ?? true)
                                    $emrg_hours_total_charge = $hours_to_days_duration * $emergency_price;
                                    elseif ($emergencyHours[$selectedIndex][0]->price_type == "%") 
                                    $emrg_hours_total_charge = $hours_to_days_duration * $emergency_price;
                                    break;
                                default: // hourly
                                $emrg_hours_total_charge = $emergency_price;
                                if ($emergencyHours[$selectedIndex][0]->multiply_duration  ?? true)
                                     $emrg_hours_total_charge = $final_emerg_hours * $emergency_price + $final_emerg_minutes / 60 * $emergency_price;
                                elseif ($emergencyHours[$selectedIndex][0]->price_type == "%")    
                                     $emrg_hours_total_charge = $final_emerg_hours * $emergency_price + $final_emerg_minutes / 60 * $emergency_price;
                                else  
                                    $emrg_hours_total_charge = $emergency_price_without_rate + ($final_emerg_hours * $serviceRateForEmergency + $final_emerg_minutes / 60 * $serviceRateForEmergency);
                            }
                        }
                            $sesArray['booking_service_id'] = $newservices->id;
                            $sesArray['emergency_hour_duration'] = $emergency_duration;
                            $sesArray['emergency_hour_price'] = $emrg_hours_total_charge;
                        }
                      
                        // If standard rate provider checked then * by providers
//                        $emrg_hours_total_charge = $emrg_hours_total_charge * $rateProviders;

                        // calculate final business duration price
                        $business_hours_total_charge = 0;
                        if ($during_business_hours_duration) {
                            $final_business_hours = floor($during_business_hours_duration / 60);
                            $final_business_minutes = ($during_business_hours_duration % 60);
                            if ($final_business_hours || $final_business_minutes)
                                $business_hours_total_charge = $final_business_hours * $hours_price + $final_business_minutes / 60 * $hours_price;
                            $sesArray['booking_service_id'] = $newservices->id;
                            $sesArray['business_hour_duration'] = $during_business_hours_duration;
                            $sesArray['business_hour_price'] = $business_hours_total_charge;
                        }

                        // calcculate final afterhour duration price
                        $after_hours_total_charge = 0;
                       
                        if ($after_hours_duration) {
                            $final_after_hours = floor($after_hours_duration / 60);
                            $final_after_minutes = ($after_hours_duration % 60);

                            if ($final_after_hours || $final_after_minutes)
                                $after_hours_total_charge = $final_after_hours * $after_hours_price + $final_after_minutes / 60 * $after_hours_price;
                            $sesArray['booking_service_id'] = $newservices->id;
                            $sesArray['after_hour_duration'] = $after_hours_duration;
                            $sesArray['after_hour_price'] = $after_hours_total_charge;

                        }
                        $service_total_rate = 0.00;
                        
                        switch ($booking_nature)
                        {
                            case 'hourly':
                                $service_total_rate = $business_hours_total_charge + $after_hours_total_charge;
                                if($service_total_rate == 0.00) {
                                    $service_total_rate = $emrg_hours_total_charge;
                                    $emrg_hours_total_charge = 0;
                                }
                                break;
                            case 'daily': // day
                                $service_total_rate = $dayRate;
                                if($service_total_rate == 0.00) {
                                    $service_total_rate = $emrg_hours_total_charge;
                                    $emrg_hours_total_charge = 0;
                                }else
                                $service_total_rate  = $service_total_rate  * $hours_to_days_duration;
                                break;
                            case 'fixed':  // fixed
                                $service_total_rate = $fixRate;
                                break;
                        }
                      
                        Log::info('$during_business_hours_duration Charges' . $business_hours_total_charge);
                        Log::info('$after_hours_duration Charges' . $after_hours_total_charge);

                        // calculate specialization price
                        $specialization_total_charge  = SELF::calSpecialization($newservices , $service_total_rate , $final_duration , $hours_to_days_duration , $booking_nature);
                      
                        // overall total service rates + diffrentials
                        $total_price = $service_total_rate + $emrg_hours_total_charge + $final_serviceCharges + $specialization_total_charge + $final_oneTimeCharges;
//                        $total_price = $total_price * $Providers;

                        Log::info('$service_total_charge' . $total_price);
                        Log::info('$specialization_total_charge' . $specialization_total_charge);
                        $total_price = number_format((float)$total_price, 2, '.', '');
                       
                        $service_total_rate = number_format((float)$service_total_rate, 2, '.', '');
                     
                        return [
                            'specialization_total' => $specialization_total_charge,
                            'expedited' => $emrg_hours_total_charge,
                            'FinalDuration' => $final_duration,
                            'StandardRate' => $service_total_rate,
                            'total' => $total_price,
                            'ServiceCharge' => $sesArray,
                        ];
                    }
                }
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
            die;
        }
    }

    public static function getBookingInfoNewLayout($bookingDetail)
{
   
    try {
            $result = [];
            $isPast = false;
            $bookingTotalPrice = 0;
            $final_payment_deduct_hour = '';
            $payment_deduct_hour = '';
            $pay_on_current_time = false;
           
             
            $current_time = Carbon::now();
            if ($bookingDetail)
            {
                $allservices = BookingServices::with('services_data')->where('booking_id',$bookingDetail->id)->get();
              
//                    if($bookingDetail->frequency_id != '1')
//                    {
//                        $uniqueservice = $bookingDetail->booking_services_new_layout;
//                        $allservices = collect( $uniqueservice )->unique('services');
//                    }
                if($allservices)
                {
                    $result['total_price'] = 0;
                    $customerCharges = 0;
                    $providerCharges = 0;
                    $servicesDateTimes = '';
                    $specializationCharges = '';
                    $total_billable_time = null;
                    $ServiceChargenew = 0;
                    $allServiceRates = 0;
                    $allDifferentials = 0;
                    $allServiceCharges = 0;
                    $allTimes = array();
                    $freq = null;
                    $result['html_rec'] = '';
                    $sessionServices = array();
                    $result['byReq'] = array();
                    switch ($bookingDetail->frequency_id)
                    {
                        case "1":
                            $freq = 'One-Time Request';
                            break;
                        case "2":
                            $freq = 'Daily';
                            break;
                        case "3":
                            $freq = 'Weekly';
                            break;
                        case "4":
                            $freq = 'Monthly';
                            break;
                        default:
                            $freq = 'WeekDaily(Business Days)';
                    }

                    $result['html_heading1'] = '<tr><td class="heading">Scheduling Details</td></tr>';

                    $result['html_freq'] = '<tr><td class="lable">Frequency<em>:</em></td><td>'.$freq.'</td></tr>';
                    if($bookingDetail->frequency_id != 1) $result['html_rec'] = '<tr><td class="lable">Frequency End Date<em>:</em></td><td>'.Carbon::parse($bookingDetail->recurring_end_at)->format('m/d/Y').'</td></tr>';
                    $result['html_service'] = '';
                    $allDateTimes = array();
                    foreach($allservices as $service)
                    {
                    
                        $billStatus = $service->services_data->bill_status;
                        $result['byReq'][] =($billStatus == '1') ? true : false ;
                        $result['html_heading2_content'] = '';
                        $result['html_heading3_content'] = '';
                        $booking_start_at = $service->start_time;
                        $booking_end_at = $service->end_time;
                        if(!in_array($service->start_time.'-'.$service->end_time,$allDateTimes))
                        {
                            $allDateTimes[] = $service->start_time.'-'.$service->end_time;
                            $servicesDateTimes .= '<span>(' . Carbon::parse($booking_start_at)->format('m/d/Y H:i') . ' - ' . Carbon::parse($booking_end_at)->format('m/d/Y H:i') . ')<br></span>';

                        }
                        $payment_deduct_hour = $service->services_data->payment_deduct_hour;
                        if ($payment_deduct_hour)
                            $final_payment_deduct_hour = Carbon::parse($booking_start_at)->subHours($payment_deduct_hour);

                        // check current time is under deduct payment hour
                        if ($final_payment_deduct_hour && $current_time->gt($final_payment_deduct_hour)) {
                            $pay_on_current_time = true;
                        }
                        // check Start date is less than current date
                        if ($current_time->gt($booking_start_at)) {
                            $isPast = true;
                        }

                        $result['booking_id'] = $bookingDetail->id;
                        $result['industry_id'] = 0; //$bookingDetail->customer->users_detail->industry;
                        $result['layout'] = $bookingDetail->layout;
                        $allcharges = 0;
                        $oneTimeCharge = 0;
                        if ($isPast) {
                            $result['isPast'] = "1";
                        }
                        // date
                        $specializationCharges = 0;
                        if ($service->service_types == '1') {
                            $allcharges = $service->services_data->service_charge;
                            $oneTimeCharge = $service->services_data->one_time_payment;
                            $service_type = 'In person';

                        } else {
                            $allcharges = $service->services_data->service_charge_v;
                            $oneTimeCharge = $service->services_data->one_time_payment_v;
                            $service_type = 'Virtual';
                        }
                        
                        $servicePaymentsHtml = '';
                        $serviceOneTimeCharge = 0;
                        $customerCharges = 0;
                      
                        if ($oneTimeCharge) {
                            $oneTimeCharge=json_decode($oneTimeCharge);
                            if(!is_null($oneTimeCharge)){
                                foreach ($oneTimeCharge as $onetime) {
                                    if($onetime[0]->price>0){
                                    if(!isset($onetime[0]->label)){
                                        $onetime[0]->label='One-time';
                                    }
                                     if ($onetime[0]->charge_customer == "true") {
                                         $customerCharges += $onetime[0]->price * $service->provider_count;
                                         $serviceOneTimeCharge += $onetime[0]->price * $service->provider_count;
                                         $servicePaymentsHtml .= '<tr><td class="sub-lable3">' . $onetime[0]->label. '<em>:</em></td><td>' . formatPayment($onetime[0]->price * $service->provider_count) . '<span class="hint" title="charge to the customer">CTC</span></td></tr>';
                                     } else {
                                         $providerCharges += $onetime[0]->price;
                                         $serviceOneTimeCharge += $onetime[0]->price;
                                         $servicePaymentsHtml .= '<tr><td class="sub-lable3">' . $onetime[0]->label. '<em>:</em></td><td>' .formatPayment($onetime[0]->price) . '</td></tr>';
                                     }
                                    }
     
                                 }
                            }

                        }
                      
//                            dd($customerCharges,$providerCharges ,  $servicePaymentsHtml);
                        $serviceChargesHtml = '';
                        $ServiceChargenew = 0;
                        $allcharges=json_decode($allcharges);
                        if(!is_null($allcharges)){
                            foreach ($allcharges as $k => $subArray) {
                                if ($subArray[0]->multiply_providers == "true") {
                                    $ServiceChargenew += $subArray[0]->price * $service->provider_count;
                                    $serviceChargesHtml .= '<tr><td class="sub-lable3">' . $subArray[0]->label. '<em>:</em></td><td>' . formatPayment($subArray[0]->price * $service->provider_count) . '</td></tr>';
                                } else {
                                    $ServiceChargenew += $subArray[0]->price;
                                    $serviceChargesHtml .= '<tr><td class="sub-lable3">' . $subArray[0]->label. '<em>:</em></td><td>' . formatPayment($subArray[0]->price) . '</td></tr>';
                                }
                            }
                        }
                        
                       
                        $bookingTotal = SELF::bookingCalculationwithService($bookingDetail, $service);
                       // dd($bookingTotal);
                        // calculate booking duration start
                        $booking_start_at = Carbon::parse($booking_start_at);
                        $booking_end_at = Carbon::parse($booking_end_at);
                        $earlier = new DateTime($booking_start_at->format('Y-m-d'));
                        $later = new DateTime($booking_end_at->format('Y-m-d'));
                        //$booking_duration = $booking_end_at->diffInMinutes($booking_start_at);
                        $duration_explode = explode(':',$bookingTotal['FinalDuration']);
                        // calculating days latest
                        $hourly_duration = $booking_end_at->diffInHours($booking_start_at);  // calculate booking duration in hours
                        if($hourly_duration < 24) $hourly_duration = 24;
                        list($whole, $decimal) = explode('.', number_format($hourly_duration/24 , 2));
                        $bookingDays = $whole + ((float)$decimal ? 1 : 0);
                        // $bookingDays = $later->diff($earlier)->format("%a") + 1;   //old
                        $booking_hours = $duration_explode[0];
                        $booking_minutes = $duration_explode[1];
                        $rate_status = null;
                        if ($service->services_data->rate_status == '2' || $service->day_rate == '1' && $service->services_data->rate_status == '3') {
                            $total_billable_time = $bookingDays . ' Day(s)';
                        } else
                            $total_billable_time = $booking_hours .' '. 'hour(s) ' . $booking_minutes .' '. ' minute(s)';
                        $bookingTotalPrice = $bookingTotal['total'];
                        $result['allServices'][] = array([
                            "time" => Carbon::parse($booking_start_at)->format('m/d/Y H:i') . ' - ' . Carbon::parse($booking_end_at)->format('m/d/Y H:i'),
                            "services" => $service->services_data->name,
                            "service_type" => $service_type,
                            "service_charges" => $ServiceChargenew,
                            "specializations" => getSpecializationsNameNew($service->specialization),
                            "accommodation" => $service->accommodation->name,
                            "providers" => $service->provider_count,
                            "daye_rate" => $service->services_data->rate_status,
                            "rate_status" => $rate_status,
                            "additionalCustomerCharges" => $customerCharges,
                            "total_billable_time" => $total_billable_time,
                            "total" => $bookingTotalPrice,
                        ]);
                      
                        $bookingTotalExpedited = $bookingTotal['expedited'];
                        $bookingTotalModification = isset($bookingDetail->payment) ? $bookingDetail->payment->modification_fee : 0;
                        $bookingTotalReschedule = isset($bookingDetail->payment) ? $bookingDetail->payment->reschedule_booking_charges : 0;
                        $bookingTotalCancellation = 0;
                        $bookingTotalSpec =  $bookingTotal['specialization_total'];
                        $bookingTotalStandardRate =  $bookingTotal['StandardRate'];
                        $result['html_heading2_content'] = '<tr><td colspan="2" class="topHeading">Service Request (' . Carbon::parse($booking_start_at)->format('m/d/Y H:i') . ' - ' . Carbon::parse($booking_end_at)->format('m/d/Y H:i') . ')</td></tr>';
                        $result['html_heading2_content'] .= '<tr><td class="lable">Accomodation<em>:</em></td><td>' . $service->accommodation->name . '</td></tr>';
                        $result['html_heading2_content'] .= '<tr><td class="lable">Service<em>:</em></td><td>' . $service->services_data->name . '</td></tr>';
                        if($bookingTotalSpec != 0.00)$result['html_heading2_content'] .= '<tr><td class="lable">Specialization<em>:</em></td><td>' . getSpecializationsNameNew($service->specialization) . '</td></tr>';
                        $result['html_heading2_content'] .= '<tr><td class="lable">Service Type<em>:</em></td><td>' . $service_type . '</td></tr>';
                        $result['html_heading2_content'] .= '<tr><td class="lable">Number of Providers<em>:</em></td><td>' . $service->provider_count . '</td></tr>';
                        $user=USER::with('roles')->where('id',Auth::user()->id)->first();
                     
                        if($user->roles()->first()->name == 'admin' || $user->roles()->first()->name == 'supervisor')
                        {
                            $result['html_heading2_content'] .= '<tr><td class="lable">Total Billable Time<em>:</em></td><td>' . $total_billable_time . '</td></tr>';
                        }
                        $result['html_heading3_content'] = '<tr><td colspan="2" class="heading">Service Billing</td></tr>';
                        $result['html_heading3_content'] .= '<tr><td class="lable">Total Service Rate<em>:</em></td><td>' . formatPayment($bookingTotalStandardRate) . '</td></tr>';

                        $diff =  $bookingTotalExpedited + $bookingTotalModification + $bookingTotalReschedule + $bookingTotalCancellation + $bookingTotalSpec;

                        if ($diff) {
                        $result['html_heading3_content'] .= '<tr><td class="lable">Differentials<em>:</em></td><td>' . formatPayment($diff). '</td></tr>';
                        if($bookingTotalSpec != 0.00)$result['html_heading3_content'] .= '<tr><td class="sub-lable">Specializations<em>:</em></td><td>' . formatPayment($bookingTotalSpec) . '</td></tr>';
                        if($bookingTotalExpedited != 0.00)$result['html_heading3_content'] .= '<tr><td class="sub-lable">Expedited Services<em>:</em></td><td>'. formatPayment($bookingTotalExpedited).'</td></tr>';
                        if($bookingTotalModification != 0.00)$result['html_heading3_content'] .= '<tr><td class="sub-lable">Modification Fee<em>:</em></td><td>'. formatPayment($bookingTotalModification).'</td></tr>';
                        if($bookingTotalReschedule != 0.00)$result['html_heading3_content'] .= '<tr><td class="sub-lable">Reschedule Fee<em>:</em></td><td>'.  formatPayment($bookingTotalReschedule) .'</td></tr>';
                        if($bookingTotalCancellation != 0.00)$result['html_heading3_content'] .= '<tr><td class="sub-lable">Cancellation Fee<em>:</em></td><td>'. formatPayment($bookingTotalCancellation).'</td></tr>';
                        }
                        if (($ServiceChargenew + $customerCharges) != 0.00) {
                            $result['html_heading3_content'] .= '<tr><td class="lable">Total Service Charges<em>:</em></td><td>' . formatPayment($ServiceChargenew + $serviceOneTimeCharge) . '</td></tr>';
                           if ($ServiceChargenew){
                            $result['html_heading3_content'] .= '<tr><td class="sub-lable">Total Service Charges<em>:</em></td><td>' . formatPayment($ServiceChargenew) . '</td></tr>';
                            $result['html_heading3_content'] .= $serviceChargesHtml;
                           }
                           if ($customerCharges ){
                            $result['html_heading3_content'] .= '<tr><td class="sub-lable">Total Service Payments<em>:</em></td><td>' . formatPayment($customerCharges) . '</td></tr>';
                            $result['html_heading3_content'] .= $servicePaymentsHtml;
                           }
                        }

                        $result['html_heading3_content'] .= '<tr><td class="lable bold">Service Total<em>:</em></td><td>' . formatPayment($bookingTotalPrice) . '</td></tr>';

                        $result['html_service'] .= $result['html_heading2_content'];
                        if($user->roles()->first()->name == 'admin' || $user->roles()->first()->name == 'supervisor')
                        {
                            $result['html_service'] .= $result['html_heading3_content'];
                        }

                        $result['total_price'] += $bookingTotalPrice;
                        $result['providerCharges'] = $providerCharges;
                        $result['customerCharges'] = $customerCharges;
                        $allServiceRates += $bookingTotal['StandardRate'];
                        $allDifferentials += $diff;
                        $allServiceCharges += $ServiceChargenew + $serviceOneTimeCharge;

                        $result['EncryptedID'] = encrypt($bookingDetail->id);

                    }

                    $result['html_datetime'] = '<tr><td class="lable">Date & Time<em>:</em></td><td>'.$servicesDateTimes.'</td></tr>';
                    $result['html_gross_total']= '<tr class="total_summary_new"><td>Gross Total<em>:</em></td><td class="gross_total" data-total="'.$result['total_price'].'">'.formatPayment($result['total_price']).'</td></tr>';
                    $result['html_discount']= '<tr class="total_summary_new"><td>Discount<em>:</em></td><td class="coupon_amount">$0.00</td></tr>';
                    $result['html_net_total']= '<tr class="total_summary_new"><td>Net Total<em>:</em></td><td class="total_price_cls_new">'.formatPayment($result['total_price']).'</td></tr>';
                    $result['html_booking_total']= '<tr><td colspan="2" class="topHeading">Booking Total</td></tr>';
                    $result['html_total_service_rates'] = '<tr><td  class="lable">Total Service Rates<em>:</em></td><td>'.formatPayment($allServiceRates).'</td></tr>';
                    $result['html_total_differentials'] = '<tr><td class="lable">Total Differentials<em>:</em></td><td>'.formatPayment($allDifferentials).'</td></tr>';
                    $result['html_total_service_charges'] = '<tr><td  class="lable">Total Service Charges<em>:</em></td><td>'.formatPayment($allServiceCharges).'</td></tr>';
                    $result['html_total_acc'] = '<tr><td  class="lable">Additional Customer Charges<em>:</em></td><td class="summary_acc">'.formatPayment(0).'</td></tr>';

                    $result['html'] = $result['html_heading1'];
                    $result['html'] .= $result['html_datetime'];
                    $result['html'] .= $result['html_freq'];
                    $result['html'] .= $result['html_rec'];
                    $result['html'] .= $result['html_service'];

                    if($user->roles()->first()->name == 'admin' || $user->roles()->first()->name == 'supervisor')$result['html'] .= $result['html_booking_total'];
                    if($user->roles()->first()->name == 'admin' || $user->roles()->first()->name == 'supervisor')$result['html'] .= $result['html_total_service_rates'];
                    if($user->roles()->first()->name == 'admin' || $user->roles()->first()->name == 'supervisor')$result['html'] .= $result['html_total_differentials'];
                    if($user->roles()->first()->name == 'admin' || $user->roles()->first()->name == 'supervisor')$result['html'] .= $result['html_total_service_charges'];
                    if($user->roles()->first()->name == 'admin' || $user->roles()->first()->name == 'supervisor')$result['html'] .= $result['html_total_acc'];
                    if($user->roles()->first()->name == 'admin' || $user->roles()->first()->name == 'supervisor')$result['html'] .= $result['html_gross_total'];
                    if($user->roles()->first()->name == 'admin' || $user->roles()->first()->name == 'supervisor')$result['html'] .= $result['html_discount'];
                    if($user->roles()->first()->name == 'admin' || $user->roles()->first()->name == 'supervisor')$result['html'] .= $result['html_net_total'];

                    $result['layout'] = '1';
                    $result['role'] = $user->roles()->first()->name;
                    return $result;
                }
            }
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
}

public static function excludeWeekends($datetime1,$datetime2)
    {
//        $datetime1 = "2022-05-13 00:00:00";
//        $datetime2 = "2022-05-17 23:00:00";
        $timestamp1 = strtotime($datetime1);
        $timestamp2 = strtotime($datetime2);

        $weekend = array(0, 6);

        if(in_array(date("w", $timestamp1), $weekend) || in_array(date("w", $timestamp2), $weekend))
        {
            //one of the dates is weekend, return 0?
            return 0;
        }

        $diff = $timestamp2 - $timestamp1;
        $one_day = 60 * 60 * 24; //number of seconds in the day

        if($diff < $one_day)
        {
            return floor($diff / 3600);
        }

        $days_between = floor($diff / $one_day);
        $remove_days  = 0;

        for($i = 1; $i <= $days_between; $i++)
        {
            $next_day = $timestamp1 + ($i * $one_day);
            if(in_array(date("w", $next_day), $weekend))
            {
                $remove_days++;
            }
        }

        return floor(($diff - ($remove_days * $one_day)) / 3600);
    }
    public static function getFinalDifferentialsCharges($serviceCharges , $oneTimeCharges , $bookingTotalProviders) : array {
        $final_serviceCharges = 0;
        $final_oneTimeCharges = 0;
        if($serviceCharges)
        {
            $serviceCharges=json_decode($serviceCharges);
            if(!is_null($serviceCharges )){
                foreach ($serviceCharges as $charges)
                {
                    if($charges[0]->multiply_providers == "true")
                    {
                        $final_serviceCharges += $charges[0]->price * $bookingTotalProviders;
                    }
                    else
                        $final_serviceCharges += $charges[0]->price;
                }
            }

        }

        /*Add OneTime Charges to booking*/
        if($oneTimeCharges)
        {
            $oneTimeCharges=json_decode($oneTimeCharges);
            if(!is_null($oneTimeCharges)){
                foreach ($oneTimeCharges as $onetime)
                {
    
                    if($onetime[0]->charge_customer == "true")
                    {
                        $final_oneTimeCharges += $onetime[0]->price * $bookingTotalProviders;
                    }
                    else
                        $final_oneTimeCharges += 0;
                }
            }

        }
        return [
            'serviceCharges' => $final_serviceCharges,
            'oneTimeCharges' => $final_oneTimeCharges,
        ];
    }
    public static function getEmergencyHours($booking_start_at , $emergencyHours , $isBookingPast) : array{
        $booking_ememrgency_array = [];
        $current_time = Carbon::now();
        $emergencyIndex=0;
        $isExclude = false;
        
        try{

            if($emergencyHours && !$isBookingPast)
            {
                $emergencyHours=json_decode($emergencyHours);
               if(!is_null($emergencyHours)){
                foreach ($emergencyHours as $key=>$emergency)
                {
                    $booking_ememrgency_array[$key] = Carbon::parse($booking_start_at)->subHours($emergency[0]->hour);
                }
               }

            }
        
            if(count($booking_ememrgency_array) && $current_time->gt($booking_ememrgency_array[0]))
            {
               
                foreach ($booking_ememrgency_array as $k=>$emergencyhour)
                {
    
                    if(isset($booking_ememrgency_array[$k+1]))
                    {
                        if ($current_time->gte($booking_ememrgency_array[$k]) && $current_time->lt($booking_ememrgency_array[$k+1]))
                        {
                            $emergencyIndex = $k;
                        }
                    }
    
                }
                if(is_null($emergencyIndex))    // for single record & for the last record
                {
                    $emergencyIndex = array_key_last($booking_ememrgency_array);
                }
            }
           
            if(is_null($emergencyIndex) || is_null($emergencyHours))
            {
                $emergency_hour = 0;
            
            }
            else
            {
               
                if(is_null($emergencyHours[$emergencyIndex][0]->hour) && is_null($emergencyHours[$emergencyIndex][0]->price)){
                    if(isset($emergencyHours[$emergencyIndex-1][0]->hour) &&  isset($emergencyHours[$emergencyIndex-1][0]->price)){
                        $emergencyIndex = $emergencyIndex-1;
                    }
                }
                // not null
                // if null the check previous exist  select previous value
                
                $emergency_hour = $emergencyHours[$emergencyIndex][0]->hour ;//$service->emergency_hour[$emergencyIndex][0]->hour;
              
                if($emergencyHours[$emergencyIndex][0]->exclude_holidays == "true")
                {
                    $booking_start_with_emrgency_time = Carbon::parse($booking_start_at)->subHours($emergency_hour);
                    $fromDate = $booking_start_with_emrgency_time;
                    $toDate = $current_time;
    
                    $day_of_week = date("N", strtotime($fromDate));
                    $days = $day_of_week + (strtotime($toDate) - strtotime($fromDate)) / (60*60*24);
                    if($days >= 6){
                        $emergency_hour+= 48;
                        $isExclude = true;
                    }
                }
    
            }
           
            return [
                'selectedIndex' => $emergencyIndex,
                'emergency_hours' => $emergency_hour,
                'isEmergencyExcludeWeekend' => $isExclude,
            ];
        }catch (\Exception $e) {
            echo $e->getMessage();
            die;
        }
       
    }
    public static function calServiceDurationForMultiDays($business_setup , $booking_start_at , $booking_end_at , $bookingDays , $emergency_hour,$isBookingPast) : array
    {
        $emergency_duration = 0;
        $during_business_hours_duration = 0;
        $after_hours_duration = 0;
        $booking_start_with_emrgency_time = Carbon::parse($booking_start_at)->subHours($emergency_hour);
        if ($isBookingPast) $current_time = $booking_start_with_emrgency_time;
        else $current_time = Carbon::now();
        for ($i = 0; $i < $bookingDays; $i++) {

            $business_start_time = Carbon::parse($booking_start_at)->addDays($i)->toDateString() . ' ' . $business_setup->business_start_time;
            $business_end_time = Carbon::parse($booking_start_at)->addDays($i)->toDateString() . ' ' . $business_setup->business_end_time;
            $after_business_start_time = Carbon::parse($booking_start_at)->addDays($i - 1)->toDateString() . ' ' . $business_setup->after_start_time;
            $after_business_end_time = Carbon::parse($booking_start_at)->addDays($i)->toDateString() . ' ' . $business_setup->after_end_time;
            $after_business_start_dtime = Carbon::parse($booking_start_at)->addDays($i)->toDateString() . ' 00:00';

            Log::info('$i '. $i);
            Log::info('$business_start_time '. $business_start_time);
            Log::info('$business_end_time '. $business_end_time);
            Log::info('$after_business_start_time '. $after_business_start_time);
            Log::info('$after_business_end_time '. $after_business_end_time);
            Log::info('$after_business_start_dtime '. $after_business_start_dtime);
            $booking_date_end_time = Carbon::parse($booking_start_at)->addDays($i)->toDateString();
            if ($current_time->gt($booking_start_with_emrgency_time)) {
                // if current time are within emergency hour then applied emergency price
                // $service_additional_charges = $service->emergency_price;
                if ($i == 0) {
                    // calculate emergency hours
                    $addEmergencyInCurrentTime = Carbon::parse($current_time)->addHours($emergency_hour);
                    $emergency_duration = $addEmergencyInCurrentTime->diffInMinutes($booking_start_at);
                    // dd($emergency_duration,$current_time,$emergency_hour,'a');
                }
                // get business/after hour
                // if booking time in between business hours then applied business hours price
                if (Carbon::parse($addEmergencyInCurrentTime)->between($business_start_time, $business_end_time)) {
                    if ($i == 0) {
                        // calculate time difference  12:00-5:00PM - Business Rate
                        $during_business_hours_duration = $addEmergencyInCurrentTime->diffInMinutes($business_end_time);
                        // calculate time difference  5:01PM-12:00AM - After-hours Rate
                        $after_hours_duration = Carbon::parse($business_end_time)->diffInMinutes($booking_date_end_time . ' 23:59:59') + 1;
                        // dd($after_hours_duration,$business_end_time,$during_business_hours_duration);
                    }
                } else {

                    $b_end_date = Carbon::parse($booking_end_at)->format('Y-m-d');
                    $b_start_date = Carbon::parse($business_start_time)->format('Y-m-d');
                    if ($i == 0) {
                        // calculate time difference  5:01PM-8:00AM -1st After-hours Rate
                        if (Carbon::parse($addEmergencyInCurrentTime)->between($after_business_start_time, $after_business_end_time)) {
                            // calculate time difference  5:01PM-12:00AM - After-hours Rate
                            $after_hours_duration += Carbon::parse($addEmergencyInCurrentTime)->diffInMinutes($after_business_end_time);

                            $during_business_hours_duration += Carbon::parse($business_end_time)->diffInMinutes($business_start_time);
                            // calculate time difference  5:01PM-12:00AM - After-hours Rate
                            $after_hours_duration += Carbon::parse($business_end_time)->diffInMinutes($booking_date_end_time . ' 23:59:59') + 1;
                        }

                        // calculate time difference  5:01PM-12:00AM - After-hours Rate
                        if (Carbon::parse($addEmergencyInCurrentTime)->between($business_end_time, $booking_date_end_time . ' 23:59:59')) {
                            $after_hours_duration += Carbon::parse($addEmergencyInCurrentTime)->diffInMinutes($booking_date_end_time . ' 23:59:59') + 1;
                        }

                    } else if ($b_end_date == $b_start_date) {
                        //for last date calculate
                        // calculate time difference  12:00-9:00AM - 1st After hour Rate
                        if (Carbon::parse($booking_end_at)->between($after_business_start_time, $after_business_end_time)) {
                            $after_hours_duration += Carbon::parse($booking_date_end_time)->diffInMinutes($booking_end_at);
                        }

                        // calculate time difference  9:00-5:00PM - Business Rate
                        if (Carbon::parse($booking_end_at)->between($business_start_time, $business_end_time)) {
                            // calculate time difference  12:00-9:00PM - After hour Rate
                            $after_hours_duration += Carbon::parse($booking_date_end_time)->diffInMinutes($business_start_time);
                            // calculate time difference  9:00-5:00PM - Business Rate
                            $during_business_hours_duration += Carbon::parse($after_business_end_time)->diffInMinutes($booking_end_at);
                        }

                        // calculate time difference  5:01PM-12:00AM - 2 After-hours Rate
                        if (Carbon::parse($booking_end_at)->between($business_end_time, $booking_date_end_time . ' 23:59:59')) {
                            // calculate time difference  12:00-9:00PM - 1 After hour Rate
                            $after_hours_duration += Carbon::parse($booking_date_end_time)->diffInMinutes($business_start_time);
                            // calculate time difference  9:00-5:00PM - Business Rate
                            $during_business_hours_duration += Carbon::parse($business_end_time)->diffInMinutes($business_start_time);
                            // calculate time difference  5:01PM-12:00AM - 2 After-hours Rate
                            $after_hours_duration += Carbon::parse($booking_end_at)->diffInMinutes($business_end_time);
                        }
                    } else {
                        //for full days
                        // calculate time difference  9:00-17:00PM - Business Rate
                        $during_business_hours_durations = Carbon::parse($business_end_time)->diffInMinutes($business_start_time);
                        $during_business_hours_duration += Carbon::parse($business_end_time)->diffInMinutes($business_start_time);
                        $totalDayMinute = "1440";
                        // Log::info($i.' multi days bus '. $during_business_hours_durations);
                        $after_hours_duration += $totalDayMinute - "$during_business_hours_durations";
                    }
                }
                // After-hours should encompass 24-hours of Saturday and Sunday.
                // $bookingDay = Carbon::parse($booking_start_at)->format('l');
                // if($bookingDay == 'Sunday' || $bookingDay == 'Saturday')
                // {
                //   $service_additional_charges = $service->after_hours_price;
                // }

            } else {
                $b_end_date = Carbon::parse($booking_end_at)->format('Y-m-d');
                $b_start_date = Carbon::parse($business_start_time)->format('Y-m-d');
                if ($i == 0) {
                    // if booking start time is before business start time
                    if (Carbon::parse($booking_start_at)->lt($business_start_time)) {
                        // calculate time difference  12:00-9:00PM - 1 After hour Rate
                        if (Carbon::parse($booking_start_at)->between($after_business_start_time, $after_business_end_time)) {
                            $after_hours_duration = Carbon::parse($after_business_end_time)->diffInMinutes($booking_start_at);
                            // dd($booking_start_at,$after_business_start_time,$after_business_end_time,'po',$after_hours_duration);
                        }
                        // calculate time difference  9:00-5:00PM - Business Rate
                        $during_business_hours_duration = Carbon::parse($business_end_time)->diffInMinutes($business_start_time);

                        // calculate time difference  5:01PM-12:00AM - 2 After-hours Rate
                        $after_hours_duration += Carbon::parse($booking_date_end_time . ' 23:59:59')->diffInMinutes($business_end_time) + 1;
                    }

                    // calculate time difference  5:00-7:00PM - Business Rate
                    if (Carbon::parse($booking_start_at)->between($business_start_time, $business_end_time)) {
                        $during_business_hours_duration += Carbon::parse($business_end_time)->diffInMinutes($booking_start_at);
                        // calculate time difference  5:01PM-12:00AM - 2 After-hours Rate
                        $after_hours_duration += Carbon::parse($business_end_time)->diffInMinutes($booking_date_end_time . ' 23:59:59') + 1;
                    }

                    // calculate time difference  5:01PM-12:00AM - 2 After-hours Rate
                    if (Carbon::parse($booking_start_at)->between($business_end_time, $booking_date_end_time . ' 23:59:59')) {
                        $after_hours_duration += Carbon::parse($booking_start_at)->diffInMinutes($booking_date_end_time . ' 23:59:59');
                    }

                } else if ($b_end_date == $b_start_date) {
                    //for last date calculate
                    // calculate time difference  12:00-9:00PM - After hour Rate
                    if (Carbon::parse($booking_end_at)->between($after_business_start_time, $after_business_end_time)) {
                        $after_hours_duration += Carbon::parse($booking_date_end_time)->diffInMinutes($booking_end_at);
                    }

                    // calculate time difference  9:00-5:00PM - Business Rate
                    if (Carbon::parse($booking_end_at)->between($business_start_time, $business_end_time)) {
                        // calculate time difference  12:00-9:00PM - After hour Rate
                        $after_hours_duration += Carbon::parse($booking_date_end_time)->diffInMinutes($business_start_time);
                        // calculate time difference  9:00-5:00PM - Business Rate
                        $during_business_hours_duration += Carbon::parse($after_business_end_time)->diffInMinutes($booking_end_at);
                    }

                    // calculate time difference  5:01PM-12:00AM - After-hours Rate
                    if (Carbon::parse($booking_end_at)->between($business_end_time, $booking_date_end_time . ' 23:59:59')) {
                        // calculate time difference  12:00-9:00AM - 1 After hour Rate
                        $after_hours_duration += Carbon::parse($booking_date_end_time)->diffInMinutes($business_start_time);
                        // calculate time difference  9:00-5:00PM - Business Rate
                        $during_business_hours_duration += Carbon::parse($business_end_time)->diffInMinutes($business_start_time);
                        // calculate time difference  5:01PM-12:00AM - 2 After-hours Rate
                        $after_hours_duration += Carbon::parse($booking_end_at)->diffInMinutes($business_end_time);
                    }
                } else {
                    //for full days
                    // calculate time difference  9:00-17:00PM - Business Rate
                    $during_business_hours_durations = Carbon::parse($business_end_time)->diffInMinutes($business_start_time);
                    $during_business_hours_duration += Carbon::parse($business_end_time)->diffInMinutes($business_start_time);
                    $totalDayMinute = "1440";
                    // calculate time difference  17:00-9:00AM - after hour Rate
                    $after_hours_duration += $totalDayMinute - "$during_business_hours_durations";
                }
            }
        }
        return [
            'during_business_hour_duration' => $during_business_hours_duration,
            'after_hours_duration' => $after_hours_duration,
            'emergency_duration' => $emergency_duration,
        ];
    }

    public static function calServiceDurationForSingleDay($business_setup , $booking_start_at , $booking_end_at , $bookingDays , $emergency_hour,$isBookingPast) : array
    {
        $emergency_duration = 0;
        $during_business_hours_duration = 0;
        $after_hours_duration = 0;
        $booking_duration = $booking_end_at->diffInMinutes($booking_start_at);
        $booking_start_with_emrgency_time = Carbon::parse($booking_start_at)->subHours($emergency_hour);
        if ($isBookingPast) $current_time = $booking_start_with_emrgency_time;
        else $current_time = Carbon::now();
        // for 1 day in emergency
        $business_start_time = Carbon::parse($booking_start_at)->toDateString() . ' ' . $business_setup->business_start_time;
        $business_end_time = Carbon::parse($booking_start_at)->toDateString() . ' ' . $business_setup->business_end_time;
        $after_business_start_time = Carbon::parse($booking_end_at)->toDateString() . ' ' . $business_setup->after_start_time;

        $next_day_start_dtime = Carbon::parse($booking_end_at)->toDateString() . ' 00:00';
        $first_after_business_start_time = Carbon::parse($booking_start_at)->toDateString();
        $after_business_end_time = Carbon::parse($booking_end_at)->toDateString() . ' ' . $business_setup->after_end_time;
        $booking_date_end_time = Carbon::parse($booking_start_at)->toDateString();

        if ($current_time->gt($booking_start_with_emrgency_time)) {
            // if current time are within emergency hour then applied emergency price
            // calculate emergency hours
            $addEmergencyInCurrentTime = Carbon::parse($current_time)->addHours($emergency_hour);
            // if end time also in emergency then applied alll time as emergency
            if (Carbon::parse($addEmergencyInCurrentTime)->gt($booking_end_at)) {
                $emergency_duration = $booking_duration;
            }
            else {
                $b_date = Carbon::parse($booking_start_at)->format('Y-m-d');
                // get emergency hour
                $emergency_duration = $addEmergencyInCurrentTime->diffInMinutes($booking_start_at);
                // if end time is 1st after hour
                if (Carbon::parse($booking_end_at)->between($b_date, $after_business_end_time)) {
                    $after_hours_duration = Carbon::parse($addEmergencyInCurrentTime)->diffInMinutes($booking_end_at);
                }

                //  if emergency in 1st after Rate and end time in business hour
                if (Carbon::parse($addEmergencyInCurrentTime)->between($b_date, $after_business_end_time) && Carbon::parse($booking_end_at)->between($business_start_time, $business_end_time)) {
                    // calculate 1st after
                    $after_hours_duration = Carbon::parse($addEmergencyInCurrentTime)->diffInMinutes($after_business_end_time);
                    // calculate time difference  9:00-5:00PM - Business Rate
                    $during_business_hours_duration = Carbon::parse($business_start_time)->diffInMinutes($booking_end_at);
                }

                //  if emergency in 1st after Rate and end time in 2nd after hour
                if (Carbon::parse($addEmergencyInCurrentTime)->between($b_date, $after_business_end_time) && Carbon::parse($booking_end_at)->between($business_end_time, $b_date . ' 23:59:59')) {
                    // calculate 1st after
                    $after_hours_duration = Carbon::parse($addEmergencyInCurrentTime)->diffInMinutes($after_business_end_time);
                    // calculate time difference  9:00-5:00PM - Business Rate
                    $during_business_hours_duration = Carbon::parse($business_start_time)->diffInMinutes($business_end_time);
                    // calculate time difference  5:01PM-12:00AM - 2 After-hours Rate
                    $after_hours_duration += Carbon::parse($booking_end_at)->diffInMinutes($business_end_time);
                }

                //  if emergency in Business Rate and end time in business hour
                if (Carbon::parse($addEmergencyInCurrentTime)->between($business_start_time, $business_end_time) && Carbon::parse($booking_end_at)->between($business_start_time, $business_end_time)) {
                    // calculate time difference  9:00-5:00PM - Business Rate
                    $during_business_hours_duration = Carbon::parse($addEmergencyInCurrentTime)->diffInMinutes($booking_end_at);
                }

                //  if emergency in Business Rate and end time in 2nd after hour
                if (Carbon::parse($addEmergencyInCurrentTime)->between($business_start_time, $business_end_time) && Carbon::parse($booking_end_at)->between($business_end_time, $b_date . ' 23:59:59')) {
                    // calculate time difference  9:00-5:00PM - Business Rate
                    $during_business_hours_duration = Carbon::parse($addEmergencyInCurrentTime)->diffInMinutes($business_end_time);
                    // calculate time difference  5:01PM-12:00AM - 2 After-hours Rate
                    $after_hours_duration = Carbon::parse($booking_end_at)->diffInMinutes($business_end_time);
                }

                // if emergency within 2nd after hour duration
                if (Carbon::parse($addEmergencyInCurrentTime)->between($business_end_time, $b_date . ' 23:59:59') && Carbon::parse($booking_end_at)->between($business_end_time, $b_date . ' 23:59:59')) {
                    // calculate time difference  5:01PM-12:00AM - 2 After-hours Rate
                    $after_hours_duration = Carbon::parse($booking_end_at)->diffInMinutes($business_end_time);
                }
            }
        }
        else {
            // check if in 1st After hour Rate (both start end time)
            if (Carbon::parse($booking_start_at)->between($first_after_business_start_time, $business_start_time) && Carbon::parse($booking_end_at)->between($first_after_business_start_time, $business_start_time)) {
                $after_hours_duration = $booking_duration;
            }

            // check if in start time in after and end time in bussiness hour)
            if (Carbon::parse($booking_start_at)->between($first_after_business_start_time, $business_start_time) && Carbon::parse($booking_end_at)->between($business_start_time, $business_end_time)) {
                $after_hours_duration = Carbon::parse($business_start_time)->diffInMinutes($booking_start_at);
                $during_business_hours_duration = Carbon::parse($booking_end_at)->diffInMinutes($business_start_time);
            }

            // check if in start time in after and end time in 2nd after hour)
            if (Carbon::parse($booking_start_at)->between($first_after_business_start_time, $business_start_time) && Carbon::parse($booking_end_at)->between($business_end_time, $first_after_business_start_time . ' 23:59:59')) {
                $after_hours_duration = Carbon::parse($business_start_time)->diffInMinutes($booking_start_at);
                $during_business_hours_duration = Carbon::parse($business_start_time)->diffInMinutes($business_end_time);
                $after_hours_duration += Carbon::parse($booking_end_at)->diffInMinutes($business_end_time);
            }


            // check if in booking time between business hour
            if (Carbon::parse($booking_start_at)->between($business_start_time, $business_end_time) && Carbon::parse($booking_end_at)->between($business_start_time, $business_end_time)) {
                $during_business_hours_duration = $booking_duration;
            }

            // check if in start time in busines and end time in 2nd after hour)
            if (Carbon::parse($booking_start_at)->between($business_start_time, $business_end_time) && Carbon::parse($booking_end_at)->between($business_end_time, $first_after_business_start_time . ' 23:59:59')) {
                $during_business_hours_duration = Carbon::parse($business_end_time)->diffInMinutes($booking_start_at);
                $after_hours_duration = Carbon::parse($booking_end_at)->diffInMinutes($business_end_time);
            }

            // check if in start time and end time in 2nd after hour)
            if (Carbon::parse($booking_start_at)->between($business_end_time, $first_after_business_start_time . ' 23:59:59') && Carbon::parse($booking_end_at)->between($business_end_time, $first_after_business_start_time . ' 23:59:59')) {
                $after_hours_duration = $booking_duration;
            }
        }
        return [
            'during_business_hour_duration' => $during_business_hours_duration,
            'after_hours_duration' => $after_hours_duration,
            'emergency_duration' => $emergency_duration,
        ];
    }
    public static function getServicePrices($service , $userService) : array
    {
        $hours_price =0;
        $after_hours_price =0;
        $dayRate = 0;
        $fixRate = 0;
        $providers = 1;
        if ($userService->service_types == "1")
        {
            switch ($service->rate_status) {
                case '1':   // hour
                    if ($service->standard_in_person_multiply_provider == 'true') $providers = $userService->provider_count;
                    $hours_price = $service->hours_price;
                    $after_hours_price = $service->after_hours_price;
                    break;
                case '2': // day
                    if ($service->standard_in_person_multiply_provider == 'true') $providers = $userService->provider_count;
                    $dayRate = $service->day_rate_price;
                    break;
                case '3': // both day and hour
                    if ($userService->day_rate != 1) {
                        if ($service->standard_in_person_multiply_provider == 'true') $providers = $userService->provider_count;
                        $hours_price = $service->hours_price;
                        $after_hours_price = $service->after_hours_price;
                    } else {
                        if ($service->standard_in_person_multiply_provider == 'true') $providers = $userService->provider_count;
                        $dayRate = $service->day_rate_price;
                    }
                    break;
                case '4':  // fixed
                    if ($service->fixed_rate_multiply_provider == 'true') $providers = $userService->provider_count;
                    $fixRate = $service->fixed_rate;
                    break;
            }

        }
        else
        {
            switch ($service->rate_status) {
                case '1':   // hour
                    if ($service->standard_rate_virtual_multiply_provider == 'true') $providers = $userService->provider_count;
                    $hours_price = $service->hours_price_v;
                    $after_hours_price = $service->after_hours_price_v;
                    break;
                case '2': // day
                    if ($service->standard_rate_virtual_multiply_provider == 'true') $providers = $userService->provider_count;
                    $dayRate = $service->day_rate_price_v;
                    break;
                case '3': // both day and hour
                    if ($userService->day_rate != 1) {
                        if ($service->standard_rate_virtual_multiply_provider == 'true') $providers = $userService->provider_count;
                        $hours_price = $service->hours_price_v;
                        $after_hours_price = $service->after_hours_price_v;
                    } else {
                        if ($service->standard_rate_virtual_multiply_provider == 'true') $providers = $userService->provider_count;
                        $dayRate = $service->day_rate_price_v;
                    }
                    break;
                case '4':  // fixed
                    if ($service->fixed_rate_multiply_provider == 'true') $providers = $userService->provider_count;
                    $fixRate = $service->fixed_rate_v;
                    break;
            }
        }
        return [
            'hourRate' => $hours_price * $providers,
            'afterHourRate' => $after_hours_price * $providers,
            'dayRate' => $dayRate * $providers,
            'fixRate' => $fixRate * $providers,
            'providers' => $providers,
        ];
    }
    public static function getEmergencyPrice($emergencyHours , $emergencyIndex , $serviceRates, $bookingTotalProviders) : array{
        if(is_null($emergencyIndex))
        {
            $emergencyPrice = 0;
            $finalPrice = 0;
        }
        else
        {
            $emergencyPrice = $emergencyHours[$emergencyIndex][0]->price;//$service->emergency_hour[$emergencyIndex][0]->price;
        //    if($bookingTotalProviders) $emergencyPrice = $emergencyPrice * $bookingTotalProviders;
            if($emergencyHours[$emergencyIndex][0]->price_type == "%")
            {
                if($serviceRates > 0) {
                    $emergencyPrice = ($emergencyHours[$emergencyIndex][0]->price / 100) * $serviceRates;
                    
                }
            }
            if($bookingTotalProviders && ($emergencyHours[$emergencyIndex][0]->multiply_provider ?? true)) $emergencyPrice = $emergencyPrice * $bookingTotalProviders;
            $finalPrice  = $emergencyPrice + $serviceRates;
        }

        return ['withRate' => $finalPrice , 'withoutRate' => $emergencyPrice];
    }
    public static function calSpecialization($newservices , $service_total_charge , $final_duration , $bookingDays , $booking_nature)  {
        $specialization_total_charge = 0;
        if($newservices->specialization)
        {
            $specializationArr = json_decode($newservices->specialization);
            if(!is_null( $specializationArr )){
                foreach ($specializationArr as $key => $specializationId) {
                    $specialization = ServiceSpecialization::where(['specialization_id' => $specializationId, 'service_id' => $newservices->services])->first();
                    if ($newservices->service_types == "1")  // In person
                    {
                        if($specialization->specialization_price[0]->price_type == "%")
                        {
                            if($service_total_charge > 0) $specialization_total_charge += ($specialization->specialization_price[0]->price / 100) * $service_total_charge;
                        }
                        else
                        {
                            if($specialization->specialization_price[0]->multiply_provider || $specialization->specialization_price[0]->multiply_service_duration)
                            {
                                $durationMultiply = 0;
                                $providersMultiply = 0;
                                if($specialization->specialization_price[0]->multiply_provider)
                                {
                                    $providersMultiply = $specialization->specialization_price[0]->price * $newservices->provider_count;
    
                                }
                                if($specialization->specialization_price[0]->multiply_service_duration)
                                {
                                    if($booking_nature == 'hourly') {
                                        $final_time_duration = explode(':', $final_duration);
                                        $durationMultiply = $final_time_duration[0] * $specialization->specialization_price[0]->price + $final_time_duration[1] / 60 * $specialization->specialization_price[0]->price;
                                    }elseif($booking_nature == 'daily'){
                                        $durationMultiply = $specialization->specialization_price[0]->price * $bookingDays;
                                    }
                                }
                                $specialization_total_charge += $providersMultiply + $durationMultiply;
                            }
                            else
                            {
                                $specialization_total_charge += $specialization->specialization_price[0]->price;
                            }
                        }
                    }
                    elseif ($newservices->service_types == "2")
                    {
    
                        if($specialization->specialization_price_v[0]->price_type == "%")
                        {
                            if($service_total_charge > 0) $specialization_total_charge +=($specialization->specialization_price_v[0]->price / 100) * $service_total_charge;
                        }
                        else
                        {
                            if($specialization->specialization_price_v[0]->multiply_provider || $specialization->specialization_price_v[0]->multiply_service_duration)
                            {
                                $durationMultiply = 0;
                                $providersMultiply = 0;
                                if($specialization->specialization_price_v[0]->multiply_provider)
                                {
                                    $providersMultiply = $specialization->specialization_price_v[0]->price * $newservices->provider_count;
                                }
                                if($specialization->specialization_price_v[0]->multiply_service_duration)
                                {
                                    if($booking_nature == 'hourly')
                                    {
                                    $final_time_duration = explode(':', $final_duration);
                                    $durationMultiply = $final_time_duration[0] * $specialization->specialization_price_v[0]->price + $final_time_duration[1] / 60 * $specialization->specialization_price_v[0]->price;
                                    }
                                    elseif($booking_nature == 'daily')
                                    {
                                        $durationMultiply = $specialization->specialization_price_v[0]->price * $bookingDays;
                                    }
                                }
                                $specialization_total_charge += $providersMultiply + $durationMultiply;
                            }
                            else
                            {
                                $specialization_total_charge += $specialization->specialization_price_v[0]->price;
                            }
                        }
    
                    }
                }
            }

        }
        return $specialization_total_charge;
    }

}


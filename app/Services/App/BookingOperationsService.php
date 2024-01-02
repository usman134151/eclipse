<?php

namespace app\Services\App;

use App\Models\Tenant\BookingAvailableProvider;
use App\Models\Tenant\BookingDocument;
use App\Models\Tenant\BookingDocumentUser;
use App\Models\Tenant\BookingInvitation;
use App\Models\Tenant\BookingInvitationProvider;
use App\Models\Tenant\BookingInvitationTeam;
use App\Models\Tenant\BookingPaymentCron;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\BookingRequestNotification;
use App\Models\Tenant\BookingServiceCharges;
use App\Models\Tenant\BookingSetting;
use App\Models\Tenant\BookingSpecialization;
use App\Models\Tenant\BookingUnassignProvider;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\ProviderPayment;
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
use Carbon\Carbon;
use App\Helpers\GlobalFunctions;
use App\Models\Tenant\RescheduleBookingLog;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Log;
use DB;
use Arr;

class BookingOperationsService
{



  public static function createBooking($booking, $services, $dates, $selectedIndustries, $selectedDepartments, $isImport = false, $isEdit = false)
  {
    if (!$isImport && !$isEdit)
      $booking->booking_number = self::generateBookingNumber();
    $booking->user_id = Auth::user()->id;
    //data mapping for main booking table
    $booking->accommodation_id = $services[0]['accommodation_id'];
    $booking->service_category = $services[0]['services'];
    $booking->industry_id = $selectedIndustries[0];
    $booking->provider_count = $services[0]['provider_count'];
    $booking->service_type = $services[0]['service_types'];

    if (!$isImport && !$isEdit) {

      $booking->type = 2;
      $booking->status = 1;
      $booking->booking_status = 0;
    }

    $booking->booking_start_at =  Carbon::parse($dates[0]['start_date'] . ' ' . $dates[0]['start_hour'] . ':' . $dates[0]['start_min'] . ':00')->format('Y-m-d H:i:s');;
    $booking->booking_end_at =  Carbon::parse($dates[0]['end_date'] . ' ' . $dates[0]['end_hour'] . ':' . $dates[0]['end_min'] . ':00')->format('Y-m-d H:i:s');;
    $booking->duration_hours = $dates[0]['duration_hour'];
    $booking->duration_minute = $dates[0]['duration_minute'];
    $booking->added_by = Auth::user()->id;
    $booking->provider_response = '';
    $booking->admin_response = '';

    if (is_null($booking->supervisor) || $booking->supervisor == '') {
      $booking->supervisor = 0;
    }


    $booking->save();
    //end of data mapping for main booking table
    SELF::saveDetails($services, $dates, $selectedIndustries, $booking, $selectedDepartments);

    return $booking;
  }


  public static function saveDetails($services, $dates, $selectedIndustries, $booking, $selectedDepartments)
  {
    // BookingServices::where('booking_id', $booking->id)->delete();

    foreach ($services as $service) {
      $service['booking_id'] = $booking->id;
      $service['booking_log_id'] = 0;
      $service['meetings'] = json_encode($service['meetings']);
      $service['specialization'] = json_encode($service['specialization']);
      if (is_array($service['service_consumer']))
        $service['service_consumer'] = implode(',', $service['service_consumer']);
      if (is_array($service['attendees']))
        $service['attendees'] = implode(',', $service['attendees']);
      $service['status'] = '1';
      $service['start_time'] =  Carbon::parse($dates[0]['start_date'] . ' ' . $dates[0]['start_hour'] . ':' . $dates[0]['start_min'] . ':00')->format('Y-m-d H:i:s');
      $service['end_time'] =  Carbon::parse($dates[0]['end_date'] . ' ' . $dates[0]['end_hour'] . ':' . $dates[0]['end_min'] . ':00')->format('Y-m-d H:i:s');
      $service['time_zone'] =  $dates[0]['time_zone'];

      if (key_exists('id', $service)) {
        $serviceData = '';
        if (key_exists('service_data', $service)) {
          $serviceData = $service['service_data'];
          unset($service['service_data']); // Remove the 'service_data' column
        }

        $service['updated_at'] = date('Y-m-d H:i:s');
        $service['created_at'] = date('Y-m-d H:i:s');
        BookingServices::where('id', $service['id'])
          ->update($service);
        // Now you can add 'service_data' back to the array
        if ($serviceData != '')
          $service['service_data'] = $serviceData;
      } else {
        $service['created_at'] = date('Y-m-d H:i:s');

        BookingServices::updateOrCreate(
          ['booking_id' => $booking->id, 'services' => $service['services']],
          $service
        );
      }
    }
    //store services
    BookingIndustry::where('booking_id', $booking->id)->delete();
    //saving industries
    foreach ($selectedIndustries as $industry) {
      BookingIndustry::updateOrInsert([
        'booking_id' => $booking->id,
        'industry_id' => $industry,
      ], []);
    }



    //saving industries
    foreach ($selectedDepartments as $department) {
      BookingDepartment::updateOrInsert([
        'booking_id' => $booking->id,
        'department_id' => $department['department_id'],
      ], []);
    }
  }

  private static function generateBookingNumber()
  {
    $latestBooking = Booking::orderBy('created_at', 'DESC')->first();
    if (!empty($latestBooking))
      $bookingNum = $latestBooking->id;
    else
      $bookingNum = 0;
    $bookId = '1' . str_pad($bookingNum + 1, 5, "0", STR_PAD_LEFT);
    return $bookId;
  }

  public static function getBookingCharges($booking, $services, $dates, $schedule)
  {


    foreach ($services as &$service) {
      $service = SELF::calculateServiceTotal($service, $schedule, $dates[0]['day_rate']);
    }
    //calculate booking total
    return $services;
  }

  public static function calculateServiceTotal($service, $schedule, $dayRate = false)
  {

    //step 1 : get business and after business hours
    $service['business_hours'] = 0;
    $service['after_business_hours'] = 0;
    $service['business_minutes'] = 0;
    $service['after_business_minutes'] = 0;
    $service['day_rate'] = $dayRate;
    $service = SELF::getBillableDuration($service, $schedule);
    if (is_null($service['provider_count']) || $service['provider_count'] == '')
      $service['provider_count'] = 1;
    $minDurationHours = (int)(isset($service['service_data']['minimum_assistance_hours' . $service['postFix']]) && !is_null($service['service_data']['minimum_assistance_hours' . $service['postFix']])  && ($service['service_data']['minimum_assistance_hours' . $service['postFix']] != ''))
      ? $service['service_data']['minimum_assistance_hours' . $service['postFix']]
      : 0;

    $minDurationMin = (int) (isset($service['service_data']['minimum_assistance_min' . $service['postFix']]) && !is_null($service['service_data']['minimum_assistance_min' . $service['postFix']]) && ($service['service_data']['minimum_assistance_min' . $service['postFix']] != ''))
      ? $service['service_data']['minimum_assistance_min' . $service['postFix']]
      : 0;


    if ($service['service_types'] == 2) {
      $multipleProviderCol = 'standard_rate_virtual_multiply_provider';
    } else {
      $multipleProviderCol = 'standard_in_person_multiply_provider' . $service['postFix'];
    }


    //step 2 : calculate booking billable duration with billing increments - skipping for now

    //apply standard charges to duration
    if ($service['service_data']['rate_status'] == 4) { //for fixed rate
      $service['after_business_hour_charges'] = 0;
      $service['business_hour_charges'] = 0;
      if ($service['service_data'][$multipleProviderCol]) {
        $service['service_charges'] = $service['service_data']['fixed_rate' . $service['postFix']] * $service['provider_count'];
      } else
        $service['service_charges'] = $service['service_data']['fixed_rate' . $service['postFix']];
    } elseif ($service['service_data']['rate_status'] == 1) { //for hourly rate - temp fix for day rate

      if (((int)$service['total_duration']['hours'] * 60 + (int)$service['total_duration']['mins']) < ($minDurationHours * 60 + (int)$minDurationMin)) {
        $bh = (int)$minDurationHours;
        if ($minDurationMin == '' || is_null($minDurationMin)) {
          $bm = 0;
        } else
          $bm = (int)$minDurationMin;
        $abh = 0;
        $abm = 0;
        if ($service['after_business_hours'] > 0 || $service['after_business_minutes'] > 0) {  //means min duration will be calculated on both business and after-hour rates
          $bh = (int)$service['business_hours'];
          $bm = (int)$service['business_minutes'];
          if ($bh > 0)
            $abh = $bh - $service['after_business_hours'];
          else
            $abh = $service['after_business_hours'];
          if ($bm > 0)
            $abm = $bm - $service['after_business_minutes'];
          else
            $abm = $service['after_business_minutes'];
        }
      } else {
        $bh = (int)$service['business_hours'];
        $bm = (int)$service['business_minutes'];
        $abh = (int)$service['after_business_hours'];
        $abm = (int)$service['after_business_minutes'];
      }

      if ($service['service_data'][$multipleProviderCol]) {

        $service['business_hour_charges'] = ((float)$service['service_data']['hours_price' . $service['postFix']] * (int)$service['provider_count'] * $bh) + ((((float)$service['service_data']['hours_price' . $service['postFix']]) / 60) * (int)$service['provider_count'] * $bm);
        $service['after_business_hour_charges'] = ((float)$service['service_data']['after_hours_price' . $service['postFix']] * (int)$service['provider_count'] * (int)$abh) + (((float)$service['service_data']['after_hours_price' . $service['postFix']] / 60) * (int)$service['provider_count'] * $abm);
      } else {
        $service['business_hour_charges'] = ((float)$service['service_data']['hours_price' . $service['postFix']] * $bh) + ((((float)$service['service_data']['hours_price' . $service['postFix']]) / 60) * $bm);
        $service['after_business_hour_charges'] = ((float)$service['service_data']['after_hours_price' . $service['postFix']] * $abh) + (((float)$service['service_data']['after_hours_price' . $service['postFix']] / 60) * $abm);
      }

      $service['service_charges'] = $service['business_hour_charges'] + $service['after_business_hour_charges'];
    } elseif ($service['service_data']['rate_status'] == 2) {
      $dayCharge = $service['service_data']['day_rate_price' . $service['postFix']];

      $service["business_hour_charges"] = 0;
      $service["after_business_hour_charges"] = 0;
      $service['service_charges'] = $service['total_duration']['days'] * $dayCharge + (($service['total_duration']['hours'] / 24) * $dayCharge) + (($service['total_duration']['mins'] / 24 / 60) * $dayCharge);
    }


    $service['additional_payments'] = [];
    $service['service_payment_total'] = 0;
    $service['additional_charges'] = [];
    $service['additional_charges_total'] = 0;
    //step 3: check service charges and add one time payments

    if (!is_null($service['service_data']['service_charge' . $service['postFix']])) {
      $serviceCharges = json_decode($service['service_data']['service_charge' . $service['postFix']], true);


      foreach ($serviceCharges as $serviceCharge) {

        $charges = $serviceCharge[0]['price'];

        if (array_key_exists('multiply_providers', $serviceCharge[0]) && $serviceCharge[0]['multiply_providers'])
          $charges *= $service['provider_count'];

        if (((int)$service['total_duration']['hours'] * 60 + (int)$service['total_duration']['mins']) < ($minDurationHours * 60 + (int)$minDurationMin))
          $charges *= $minDurationHours + ($minDurationMin / 60);
        elseif (array_key_exists('multiply_duration', $serviceCharge[0]) && $serviceCharge[0]['multiply_duration'])
          $charges *= $service['total_duration']['hours'] + ($service['total_duration']['mins'] / 60);

        $service['additional_charges'][] = ['label' => $serviceCharge[0]['label'], 'charges' => $charges];
        $service['additional_charges_total'] += $charges;
      }
    }

    if (!is_null($service['service_data']['service_payment' . $service['postFix']])) {
      $servicePayments = json_decode($service['service_data']['service_payment' . $service['postFix']], true);
      // dd($servicePayments);
      foreach ($servicePayments as $servicePayment) {
          //
        if (array_key_exists('charge_customer', $servicePayment[0]) && $servicePayment[0]['charge_customer']) {
          $charges = $servicePayment[0]['price'];
          if (array_key_exists('multiply_providers', $servicePayment[0]) && $servicePayment[0]['multiply_providers'])
            $charges *= $service['provider_count'];
          $service['additional_payments'][] = ['label' => $servicePayment[0]['label'], 'charges' => $charges];
          $service['service_payment_total'] += $charges;
        }
      }
    }

      //step 4 : check for specializations
    $service['specialization'] = json_decode($service['specialization'], true);
    $service['specialization_total'] = 0;
    $service['specialization_charges'] = [];
    $spCharges = [];
    if (is_array($service['specialization']) && count($service['specialization']) > 0) {
      foreach ($service['specialization'] as $specialization) {
        foreach ($service['service_data']['specializations'] as $serviceSpecialization) {
          $spCharges = [];
          if ($serviceSpecialization['id'] == $specialization) {
            $spCharges = json_decode($serviceSpecialization['pivot']['specialization_price' . $service['postFix']], true);
            $spCharges = $spCharges[0];
            /*need to clearify     "price_type" => "$"
                "hide_from_customers" => true
                 "hide_from_providers" => true and disable*/
            $charges = 0;
            if (array_key_exists('price_type', $spCharges) && $spCharges['price_type'] == "$" && array_key_exists('price', $spCharges)  && $spCharges['price'] != '') {
              $charges = $spCharges['price'];
            } elseif (array_key_exists('price_type', $spCharges) && $spCharges['price_type'] == "%" && array_key_exists('price', $spCharges) && $spCharges['price'] != '') {

              $charges = $service['service_charges'] * ($spCharges['price'] / 100);
            }

            if (array_key_exists('multiply_provider', $spCharges) && $spCharges['multiply_provider']) {

              $charges = (int)$charges * (int)$service['provider_count'];
            }
            if (((int)$service['total_duration']['hours'] * 60 + (int)$service['total_duration']['mins']) < ($minDurationHours * 60 + (int)$minDurationMin))
              $charges *= $minDurationHours + ($minDurationMin / 60);
            elseif (array_key_exists('multiply_service_duration', $spCharges) &&  $spCharges['multiply_service_duration']) {
              $charges = $charges * ($service['total_duration']['hours'] + ($service['total_duration']['mins'] / 60));
            }
            $service['specialization_charges'][] = ['label' => $serviceSpecialization['name'], 'charges' => $charges];
            $service['specialization_total'] += $charges;
          }
        }
      }
    }   //end of specialization calculations

      //step 5: check for expedited service charges and add

    $service['expedited_charges'] = SELF::getExpeditedCharge($service['start_time'], $service['service_data']['emergency_hour' . $service['postFix']]);
    if ($service['expedited_charges']['multiply_duration']) {
      if (((int)$service['total_duration']['hours'] * 60 + (int)$service['total_duration']['mins']) < ($minDurationHours * 60 + (int)$minDurationMin))
        $service['expedited_charges']['charges'] *= $minDurationHours + ($minDurationMin / 60);
      elseif (array_key_exists('multiply_service_duration', $spCharges) &&  $spCharges['multiply_service_duration']) {
        $service['expedited_charges']['charges'] = $service['expedited_charges']['charges'] * ($service['total_duration']['hours'] + ($service['total_duration']['mins'] / 60));
      }
    }

    $service['total_charges'] = $service['expedited_charges']['charges'] + $service['specialization_total'] + $service['service_payment_total'] + $service['additional_charges_total'] + $service['service_charges'];
    if (is_null($service['billed_total']) || $service['billed_total'] == 0) {
      $service['billed_total'] = $service['total_charges'];
    }

    if ($service['billed_total'] == '') {
      $service['billed_total'] = 0;
    }

    return $service;
  }

  static function getExpeditedCharge($bookingStartTime, $expeditedDataJson)
  {
    if (is_null($expeditedDataJson)) {
      return ['charges' => 0, 'hour' => 'n/a', 'multiply_duration' => false];
    }
    // Step 1: Parse JSON data to PHP arrays
    $expeditedData = json_decode($expeditedDataJson, true);

    // Step 2: Sort arrays based on the 'hour' parameter
    usort($expeditedData, function ($a, $b) {
      return $b[0]['hour'] - $a[0]['hour']; // Sort in descending order to check the larger hours first
    });

    // Step 3: Get the time difference in hours
    $currentDateTime = new DateTime();
    $bookingStartDateTime = new DateTime($bookingStartTime); // Assuming $bookingStartTime is in a format supported by DateTime

    $interval = $currentDateTime->diff($bookingStartDateTime);
    $hoursDifference = $interval->h + ($interval->days * 24); // Convert days to hours and add to hour difference
    $md = false;
    // Step 4: Check if the hoursDifference matches with any 'hour' value and add respective charges
    foreach ($expeditedData as $expeditedItemArray) {
      foreach ($expeditedItemArray as $expeditedItem) {

        if ($hoursDifference <= intval($expeditedItem['hour'])) {
          if (key_exists('multiply_duration', $expeditedItem)) {
            $md = $expeditedItem['multiply_duration'];
          }
          return ['charges' => floatval($expeditedItem['price']), 'hour' => $expeditedItem['hour'], 'multiply_duration' => $md]; // Returning the price to be added as expedited charges
        }
      }
    }

    return ['charges' => 0, 'hour' => 'n/a', 'multiply_duration' => false]; // No expedited charges applicable
  }


  public static function getBillableDuration($service, $schedule)
  {
      //for single date
    if (is_null($schedule))
      return;
    $duration = SELF::calculateDuration($service['start_time'], $service['end_time'], $service['day_rate']);

    $startDayOfWeek = Carbon::parse($service['start_time'])->format('l');
    $endDayOfWeek = Carbon::parse($service['end_time'])->format('l');
    $startTime = Carbon::parse($service['start_time'])->format('H:i:s');
    $endTime = Carbon::parse($service['end_time'])->format('H:i:s');
    $starttime = Carbon::createFromTimeString($startTime);
    $endtime = Carbon::createFromTimeString($endTime);
    $service['business_hours'] = 0;
    $service['business_minutes'] = 0;

    $service['business_start_time'] = '';
    $service['business_end_time'] = '';

    $service['after_business_hours'] = 0;
    $service['after_business_minutes'] = 0;

    $service['after_business_start_time'] = '';
    $service['after_business_end_time'] = '';

    if (!is_null($duration) && ($duration['days'] == 0 &&  $duration['hours'] < 24)) {
        //single day booking

      foreach ($schedule->timeslots as $timeSlot) {

        if ($timeSlot->timeslot_day == $startDayOfWeek && $timeSlot->timeslot_type == 1  && $service['business_hours']==0) {

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

          if ($overlapEnd > $overlapStart) {


            // Calculate the duration of the overlapping period in hours and minutes
            $overlapInterval = $overlapEnd->diff($overlapStart);
            $service['business_hours'] += $overlapInterval->h;
            $service['business_minutes'] += $overlapInterval->i;

            $service['business_start_time'] = $overlapStart->format('Y-m-d H:i:s');
            $service['business_end_time'] = $overlapEnd->format('Y-m-d H:i:s');


            // Calculate overlapping duration in minutes
            $overlapDurationInMinutes = $overlapInterval->h * 60 + $overlapInterval->i;
          }




          if ($overlapDurationInMinutes < $totalDurationInMinutes) {
            $afterBusinessDurationInMinutes = $totalDurationInMinutes - $overlapDurationInMinutes;

            $service['after_business_hours'] += (int)($afterBusinessDurationInMinutes / 60);
            $service['after_business_minutes'] += $afterBusinessDurationInMinutes % 60;

            $service['after_business_start_time'] = $overlapEnd->format('Y-m-d H:i:s');
            $service['after_business_end_time'] = $endtime->format('Y-m-d H:i:s');
          }
        }
      }

    } else {

      $days = SELF::getDaysInBetween($startDayOfWeek, $endDayOfWeek);
      //multiple day booking
      foreach ($days as $index => $day) {
        foreach ($schedule->timeslots as $timeSlot) {

          if ($timeSlot->timeslot_day == $day && $timeSlot->timeslot_type == 1) {

            // Check if the duration falls between business hours
            $slotStart = Carbon::parse($timeSlot['timeslot_start_time'])->format('H:i:s');
            $slotEnd = Carbon::parse($timeSlot['timeslot_end_time'])->format('H:i:s');

            $timeslotStart = Carbon::createFromTimeString($slotStart);
            $timeslotEnd = Carbon::createFromTimeString($slotEnd);
            if ($index == 0)
              $starttime = Carbon::createFromTimeString($startTime);
            else {
              $starttime = $timeslotStart;

              $service['after_business_hours'] += $starttime->hour;
              $service['after_business_minutes'] += 1;
            }


            if ($index + 1 == count($days))
              $endtime = Carbon::createFromTimeString($endTime); //last day stop at actual end time
            else
              $endtime = Carbon::createFromTimeString('23:59:59'); //other day calculate till 12 am

            // Calculate total duration in minutes
            $totalDurationInMinutes = $endtime->diffInMinutes($starttime);

            // Calculate overlapping duration in minutes
            $overlapDurationInMinutes = 0;
            // Find the overlapping period
            $overlapStart = $timeslotStart->greaterThan($starttime) ? $timeslotStart : $starttime;
            $overlapEnd = $timeslotEnd->lessThan($endtime) ? $timeslotEnd : $endtime;

            if ($overlapEnd > $overlapStart) {


              // Calculate the duration of the overlapping period in hours and minutes
              $overlapInterval = $overlapEnd->diff($overlapStart);
              $service['business_hours'] += $overlapInterval->h;
              $service['business_minutes'] += $overlapInterval->i;

              $service['business_start_time'] = $overlapStart->format('Y-m-d H:i:s');
              $service['business_end_time'] = $overlapEnd->format('Y-m-d H:i:s');


              // Calculate overlapping duration in minutes
              $overlapDurationInMinutes = $overlapInterval->h * 60 + $overlapInterval->i;
            }




            if ($overlapDurationInMinutes < $totalDurationInMinutes) {
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
    if ($service['after_business_minutes'] > 60) {
      $service['after_business_hours'] += ceil($service['after_business_minutes'] / 60);
      $service['after_business_minutes'] = $service['after_business_minutes'] % 60;
    }

    $service['total_duration'] = $duration;

    return $service;
  }


  public static function getDaysInBetween($startDayOfWeek, $endDayOfWeek)
  {
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

  public static function getSchedule($company, $customer)
  {

    $scheduleChecks = [
      ['model_type' => 3, 'model_id' => $customer],
      ['model_type' => 2, 'model_id' => $company],
      ['model_type' => 1, 'model_id' => 1]
    ];
    foreach ($scheduleChecks as $scheduleData) {
      $schedule = Schedule::where('model_id', $scheduleData['model_id'])->where('model_type', $scheduleData['model_type'])->with('timeslots', 'holidays')->get()->first();

      if (!is_null($schedule) && count($schedule['timeslots'])) {

        return $schedule;
      }
    }
  }

  public static function calculateDuration($startTime, $endTime, $dayRate = false)
  {
    $startDateTime = Carbon::create($startTime);
    $days = 0;
    $hours = 0;
    $minutes = 0;
    $timeError = true;
    $endDateTime =  Carbon::create($endTime);

    if ($endDateTime >= $startDateTime) {
      $timeError = false;
      $diff = $endDateTime->diff($startDateTime);
      $days = null;
      if ($dayRate) {
        $days = $diff->days;
        $hours = $diff->h;
        $minutes = $diff->i;
      } else {

        $hours =  $endDateTime->diffInHours($startDateTime);
        $minutes = $diff->i;
      }
    }
    return ['days' => $days, 'hours' => $hours, 'mins' => $minutes, 'timeError' => $timeError];
  }
  public static function createRecurring($booking_id)
  {
    try {
      DB::beginTransaction();
      $booking  = Booking::find($booking_id);
      if ($booking->frequency_id == 1 || $booking->is_recurring == 0) {
        return false;
      }
      $booking_start  = Carbon::createFromFormat('Y-m-d H:i:s', $booking->booking_start_at);
      $booking_end    = Carbon::createFromFormat('Y-m-d H:i:s', $booking->booking_end_at);
      $bookingDays    = $booking_end->diffInDays($booking_start);
      $recurring_start = Carbon::parse($booking->booking_start_at)->format('Y-m-d');
      $recurring_end = Carbon::parse($booking->recurring_end_at)->format('Y-m-d');

      $i              = 1;
      $newBooking     =  Arr::except($booking->toArray(), ['id', 'created_at', 'updated_at', 'referral_code', '']);

      //  if($booking->layout == 1)
      //  {
      $specializations  = $booking->booking_services_layout->toArray();
      //   }else{
      //       $specializations= $booking->specialization->toArray();
      //   }
      $newPayment     =  Arr::except($booking->payment->toArray(), ['id', 'created_at', 'updated_at', 'coupon_discount_amount', 'coupon_id', 'coupon_type', 'booking_id']);

      $customize_data  = $booking->customize_data->toArray();
      $newBooking['parent_id']  = $booking->id;
      //    $newBooking['supervisor']  = $booking->supervisor;
      //    dd($recurring_start,$recurring_end);
      switch ($booking->frequency_id) {
        case (2):
          for ($jobdate = $recurring_start; $jobdate <= $recurring_end;) {
            $jobdate  = Carbon::parse($jobdate)->addDays($bookingDays + 1)->format('Y-m-d');
            if ($jobdate > $recurring_end) {
              break;
            }
            $jobStartAt    = $jobdate . ' ' . $booking_start->format('H:i:s');
            $jobEndAt      = Carbon::parse($jobdate)->addDays($bookingDays)->format('Y-m-d') . ' ' . $booking_end->format('H:i:s');
            $newBooking['booking_start_at']  = $jobStartAt;
            $newBooking['booking_end_at']    = $jobEndAt;
            $newBooking['booking_number']    = $booking->booking_number . '-' . $i;

            self::saveRecurringBooking($newBooking, $booking, $specializations, $newPayment, $customize_data);
            $i++;
          }
          break;
        case (4):
          for ($jobdate = $recurring_start; $jobdate <= $recurring_end;) {
            $jobdate  = Carbon::parse($jobdate)->addDays($bookingDays + 1)->format('Y-m-d');
            if ($jobdate > $recurring_end) {
              break;
            }
            $jobStartAt    = $jobdate . ' ' . $booking_start->format('H:i:s');
            $dayName       = Carbon::parse($jobStartAt)->dayName;
            if ($dayName == "Saturday" || $dayName == "Sunday") {
              continue;
            }
            $jobEndAt      = Carbon::parse($jobdate)->addDays($bookingDays)->format('Y-m-d') . ' ' . $booking_end->format('H:i:s');
            $newBooking['booking_start_at']  = $jobStartAt;
            $newBooking['booking_end_at']    = $jobEndAt;
            $newBooking['booking_number']    = $booking->booking_number . '-' . $i;

            self::saveRecurringBooking($newBooking, $booking, $specializations, $newPayment, $customize_data);
            $i++;
          }
          // echo "WeekDaily";
          break;
        case (3):

          for ($jobdate = $recurring_start; $jobdate <= $recurring_end;) {

            if ($bookingDays < 7) {
              $jobdate  = Carbon::parse($jobdate)->addDays(7)->format('Y-m-d');
            } else {
              if (ceil($bookingDays / 7) == 1) {
                $count    = 14;
              } else {
                $count    = ceil($bookingDays / 7) * 7;
              }
              $jobdate  = Carbon::parse($jobdate)->addDays($count)->format('Y-m-d');
            }
            $jobEndDate  = Carbon::parse($jobdate)->addDays($bookingDays)->format('Y-m-d');
            if ($jobEndDate > $recurring_end) {
              break;
            }

            $jobStartAt    = $jobdate . ' ' . $booking_start->format('H:i:s');
            $jobEndAt      = Carbon::parse($jobdate)->addDays($bookingDays)->format('Y-m-d') . ' ' . $booking_end->format('H:i:s');
            // prt($jobStartAt);
            // prt($jobEndAt);
            $newBooking['booking_start_at']  = $jobStartAt;
            $newBooking['booking_end_at']    = $jobEndAt;
            $newBooking['booking_number']    = $booking->booking_number . '-' . $i;

            self::saveRecurringBooking($newBooking, $booking, $specializations, $newPayment, $customize_data);
            $i++;
          }
          break;
        case (5):
          // echo "monthly";

          $lastDayofMonth   =  Carbon::parse($recurring_start)->lastOfMonth()->format('Y-m-d');
          $diffinMonths     = Carbon::parse($recurring_end)->diffInMonths(Carbon::parse($recurring_start));
          $jobdate          = $recurring_start;

          for ($months = 1; $months <= $diffinMonths; $months++) {
            if ($lastDayofMonth == $recurring_start) {
              $jobdate    = Carbon::parse($recurring_start)->addMonthsNoOverflow($months)->format('Y-m-d');
              $jobdate    = Carbon::parse($jobdate)->endOfMonth()->format('Y-m-d');
            } else {
              $jobdate    = Carbon::parse($recurring_start)->addMonthsNoOverflow($months)->format('Y-m-d');
            }
            $jobEndDate  = Carbon::parse($jobdate)->addDays($bookingDays)->format('Y-m-d');
            if ($jobEndDate > $recurring_end) {
              echo "break";
              break;
            }
            $jobStartAt    = $jobdate . ' ' . $booking_start->format('H:i:s');
            $jobEndAt      = Carbon::parse($jobdate)->addDays($bookingDays)->format('Y-m-d') . ' ' . $booking_end->format('H:i:s');
            // prt($jobStartAt);
            // prt($jobEndAt);

            $newBooking['booking_start_at']  = $jobStartAt;
            $newBooking['booking_end_at']    = $jobEndAt;
            $newBooking['booking_number']    = $booking->booking_number . '-' . $i;

            self::saveRecurringBooking($newBooking, $booking, $specializations, $newPayment, $customize_data);
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

  public static function saveRecurringBooking($newBooking, $booking, $specializations, $newPayment, $customize_data)
  {
    try {
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
        $newService->start_time = $newStart;
        $newService->end_time = $newEnd;

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

      if (count($customize_data)) {
        // $customize_data =   self::arrayReplace($customize_data, 'booking_id',$newBookingId);

        $customize_data = array_map("customize_data", $customize_data, array($newBookingId));
        $customize_data =   self::arrayReplace($customize_data, 'booking_id', $newBookingId);
        foreach ($customize_data as $data) {
          //condition has been commented out as no array key exists -> LBT 83 -- Maarooshaa Asim 29/12/23
          // if (key_exists('customize_data', $data) && !is_null($data['customize_data']) && $data['customize_data'] != '') {
            BookingCustomizeData::insert([
              'booking_log_id' => $data['booking_log_id'],
              'booking_log_bbid' => $data['booking_log_bbid'],
              'booking_id' => $data['booking_id'],
              'service_id' => $data['service_id'],
              'customize_id' => $data['customize_id'],
              'data_value' => $data['data_value'],
              // 'customize_data' => $data['customize_data'],
              'added_by' => $data['added_by'],
              'field_title' => json_encode($data['field_title']),
            ]);
          // }
        }
        //        BookingCustomizeData::insert($customize_data); // customize data
      }
      //Update Booking Request Info
      $booking_request_information = $booking->booking_request_information;
      if ($booking_request_information) {
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

  public static function arrayReplace($Array, $Find, $Replace)
  {
    if (is_array($Array)) {
      foreach ($Array as $Key => $Val) {
        if (is_array($Array[$Key])) {
          $Array[$Key] = self::arrayReplace($Array[$Key], $Find, $Replace);
        } else {
          if ($Key === $Find) {
            $Array[$Key] = $Replace;
          }
        }
      }
    }
    return $Array;
  }

  public static function getBookingDetails($bookingId, $serviceTypes, $parameter, $dataColumn)
  {
    $booking = Booking::where('id', $bookingId)->with('payment', 'booking_services', 'services', 'customer')->first();
    $totalCharges = 0;
    foreach ($booking['booking_services'] as $index => $bookingService) {

      $postFix = $serviceTypes[$bookingService['service_types']]['postfix'];
      $serviceCharge = 0;
      if (!is_null($booking['services'][$index][$dataColumn . $postFix])) {
        $cancellationCharges = json_decode($booking['services'][$index][$dataColumn . $postFix], true);

        $charges = SELF::getCharges($cancellationCharges, $bookingService['start_time'], $parameter);

        $bookingServiceData = (json_decode($bookingService['service_calculations'], true));
        $serviceCharge = $charges['charges'];
        if ($charges['price_type'] == "$") {

          if ($charges['multiply_duration']) {


            if (!is_null($bookingServiceData) && key_exists('total_duration', $bookingServiceData))
              $serviceCharge = $serviceCharge * (($bookingServiceData['total_duration']['days'] * 24) + $bookingServiceData['total_duration']['hours'] + ($bookingServiceData['total_duration']['mins'] / 60));
            else
              $serviceCharge = 0;
          }
          if ($charges['multiply_providers']) {
            $serviceCharge = $serviceCharge * $bookingService['provider_count'];
          }
          $totalCharges += $serviceCharge;
        } else { //for percentage - will be calculated on booking
          $addtionalCharge = 0;
          $bookingTotal = 0;
          if (!is_null($booking->payment->additional_charge) && isset($booking->payment->additional_charge)) {
            $addtionalCharge = $booking->payment->additional_charge;
          }
          if (!is_null($booking->payment->total_amount) && isset($booking->payment->total_amount)) {
            $bookingTotal = $booking->payment->total_amount;
          }
          $total = ($bookingTotal - $addtionalCharge);

          $totalCharges = ($total * ($serviceCharge / 100));

          if ($charges['multiply_providers']) {
            $totalCharges =  $totalCharges * $bookingService['provider_count'];
          }
        }
      }
    }

    if ($booking->payment !== null) {
      if ($parameter == 'rescheduling')
        $booking->payment->reschedule_booking_charges = $totalCharges;

      elseif ($parameter == 'modifications')
        $booking->payment->modification_fee = $totalCharges;
      else {

        $booking->status = 3; //default cancel billable
        if ($totalCharges > 0)
          $booking->status = 4;
        $booking->payment->cancellation_charges = $totalCharges;
      }
    }


    return $booking;
  }

  public static function reinstateBooking($bookingId)
  {
    $booking = Booking::where('id', $bookingId)->with('payment', 'booking_services')->first();
    $booking->cancelled_by = 0;
    $booking->booking_cancelled_at = null;
    $status = 2;
    //determine status
    foreach ($booking->booking_services as $service) {
      $providerCount = (int)$service->provider_count;

      $assignedProvidersCount = BookingProvider::where('booking_service_id', $service->id)->count();

      if ($providerCount !== $assignedProvidersCount) {
        $status = 1;
      }
    }

    $booking->status = $status;
    $booking->cancellation_notes = '';
    $booking->cancel_provider_payment = 0;
    $booking->save();

    $booking->payment->cancellation_charges = 0;
    $booking->payment->save();
  }

  public static function cancelBooking($booking)
  {
    $booking->cancelled_by = Auth::user()->id;
    $booking->booking_cancelled_at = now();
    $booking->save();

    $booking->payment->save();
  }

  public static function rescheduleBooking($booking, $reschedule_details)
  {
    // check if recurring
    if ($booking->is_recurring && $reschedule_details['setting'] != "only_this_booking") {
      if ($booking->parent_id == 0)
        $parent_id = $booking->id;
      else
        $parent_id = $booking->parent_id;
      $start_date          = Carbon::parse($booking->booking_start_at)->toDateString();

      if ($reschedule_details['setting'] == "bookings_until") {
        // fetch all up-until bookings
        $end_date = Carbon::parse($reschedule_details['reschedule_until'])->toDateString();
        $r_bookings = Booking::where('parent_id', $parent_id)
          ->whereRaw("booking_start_at  Between  DATE('$start_date') AND DATE('$end_date')")

          ->get();
      } else {
        // fetch all subsequent bookings with parent_id == booking_id
        if ($booking->parent_id == 0)
          $parent_id = $booking->id;
        else
          $parent_id = $booking->parent_id;
        $r_bookings = Booking::where('parent_id', $parent_id)->whereRaw("DATE(booking_start_at) >= '$start_date'")->get();
      }

      //difference between existing and rescheduled
      $rescheduledStartDate = Carbon::parse($reschedule_details['booking_start_at'] . ' ' . $reschedule_details['booking_start_hour'] . ':' . $reschedule_details['booking_start_min']);
      $rescheduledEndDate = Carbon::parse($reschedule_details['booking_end_at'] . ' ' . $reschedule_details['booking_end_hour'] . ':' . $reschedule_details['booking_end_min']);



      $startTimeExisting  = strtotime($booking->booking_start_at);
      $startTimeRescheduled = strtotime($rescheduledStartDate->toDateTimeString());
      $startDifferenceInSeconds = $startTimeRescheduled - $startTimeExisting;
      $endTimeExisting  = strtotime($booking->booking_end_at);
      $endTimeRescheduled = strtotime($rescheduledEndDate->toDateTimeString());
      $endDifferenceInSeconds = $endTimeRescheduled - $endTimeExisting;


      foreach ($r_bookings as $booking) {


        // set $booking->reschedule_date according to admin/customer permissions
        $booking->booking_reschedule_at = Carbon::now();

          // $booking existing dates + diff
        $existingStartDate = Carbon::parse($booking->booking_start_at);
        $existingEndDate = Carbon::parse($booking->booking_end_at);
        $booking->reschedule_start_at = $existingStartDate->addSeconds($startDifferenceInSeconds);
        $booking->reschedule_end_at = $existingEndDate->addSeconds($endDifferenceInSeconds);

        $booking->reschedule_by = Auth::id();

        //to maintain reschedule booking logs

        $curr_log['previous_start_time'] = $booking->booking_start_at;
        $curr_log['previous_end_time'] = $booking->booking_end_at;

        $curr_log['current_start_time'] = $booking->reschedule_start_at;
        $curr_log['current_end_time'] = $booking->reschedule_end_at;
        $curr_log['booking_id'] = $booking->id;
        $curr_log['reschedule_by'] = Auth::id();
        $curr_log['charges'] = $reschedule_details['charges'];
        RescheduleBookingLog::create($curr_log);

        $message = "Booking '" . $booking->booking_number . "' rescheduled from (" . formatDateTime($curr_log['previous_start_time']) . " - " . formatDateTime($curr_log['previous_end_time']) . ") to (" . formatDateTime($curr_log['current_start_time']) . " - " . formatDateTime($curr_log['current_end_time']) . ") by " . Auth::user()->name;
        $shiftToPending = false;

        if (session()->get('isCustomer')) {
            //check if bookings auto-approved
          $customer = User::where('id', Auth::id())->with('userdetail')->first()->toArray();
          if (key_exists('user_configuration', $customer['userdetail']) && !is_null($customer['userdetail']['user_configuration'])) {
            $configurations = json_decode($customer['userdetail']['user_configuration'], true);
            if (!is_null($configurations) && key_exists('require_approval', $configurations) && $configurations['require_approval'] == "true") {
              $shiftToPending = true;
            }
          }
        }

        //  if customer and not company admin/ supervisor move booking to pending-review
        if ($shiftToPending) {
          $booking->reschedule_status = 2;
          $booking->booking_status = 0; //move booking to pending review
        } else {
          //is admin or company admin  hence directly approved
          $booking->booking_start_at = $booking->reschedule_start_at;
          $booking->booking_end_at = $booking->reschedule_end_at;
          $booking->reschedule_status = 1;

          //update time for all booking services
          foreach ($booking->booking_services as $bookingService) {
            $bookingService->start_time = $booking->booking_start_at;
            $bookingService->end_time = $booking->booking_end_at;
              // TODO :: recalculate duration and calculcations according
            $bookingService->save();
          }
        }
        $booking->payment->reschedule_booking_charges = $reschedule_details['charges'] + $reschedule_details['prev_charges'];
        $booking->save();
        $booking->payment->save();

        callLogs($booking->id, 'Booking', 'rescheduled', $message);
      }
    } else {

        // CHANGE STATUS FOR ONLY PASSED BOOKING

      // set $booking->reschedule_date according to admin/customer permissions
      $booking->booking_reschedule_at = Carbon::now();
      $booking->reschedule_start_at = Carbon::parse($reschedule_details['booking_start_at'] . ' ' . $reschedule_details['booking_start_hour'] . ':' . $reschedule_details['booking_start_min']);
      $booking->reschedule_end_at = Carbon::parse($reschedule_details['booking_end_at'] . ' ' . $reschedule_details['booking_end_hour'] . ':' . $reschedule_details['booking_end_min']);


      $booking->reschedule_by = Auth::id();

      //to maintain reschedule booking logs

      $curr_log['previous_start_time'] = $booking->booking_start_at;
      $curr_log['previous_end_time'] = $booking->booking_end_at;

      $curr_log['current_start_time'] = $booking->reschedule_start_at;
      $curr_log['current_end_time'] = $booking->reschedule_end_at;
      $curr_log['booking_id'] = $booking->id;
      $curr_log['reschedule_by'] = Auth::id();
      $curr_log['charges'] = $reschedule_details['charges'];
      RescheduleBookingLog::create($curr_log);

      $message = "Booking '" . $booking->booking_number . "' reschduled from (" . formatDateTime($curr_log['previous_start_time']) . " - " . formatDateTime($curr_log['previous_end_time']) . ") to (" . formatDateTime($curr_log['current_start_time']) . " - " . formatDateTime($curr_log['current_end_time']) . ") by " . Auth::user()->name;


      //  if customer and not company admin/ supervisor move booking to pending-review
      if (session()->get('isCustomer') && (!in_array(10, session()->get('customerRoles')))) {
        $booking->reschedule_status = 2;
        $booking->booking_status = 0; //move booking to pending review
      } else {
        //is admin or company admin  hence directly approved
        $booking->booking_start_at = $booking->reschedule_start_at;
        $booking->booking_end_at = $booking->reschedule_end_at;
        $booking->reschedule_status = 1;

        //update time for all booking services
        foreach ($booking->booking_services as $bookingService) {
          $bookingService->start_time = $booking->booking_start_at;
          $bookingService->end_time = $booking->booking_end_at;
            // TODO :: recalculate duration and calculcations according
          $bookingService->save();
        }
      }
      $booking->payment->reschedule_booking_charges = $reschedule_details['charges'] + $reschedule_details['prev_charges'];
      $booking->save();
      $booking->payment->save();

      callLogs($booking->id, 'Booking', 'rescheduled', $message);
    }
    return;
  }

  public static function getCharges($cancellationData, $bookingStartTime, $parameter)
  {

    // Step 2: Sort arrays based on the 'hour' parameter
    usort($cancellationData, function ($a, $b) {
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

        if (key_exists($parameter, $cancelItem) && $cancelItem[$parameter] == true &&  $hoursDifference <= intval($cancelItem['hour'])) {

          if (key_exists('multiply_duration', $cancelItem)) {
            $md = $cancelItem['multiply_duration'];
          }
          if (key_exists('multiply_providers', $cancelItem)) {
            $mp = $cancelItem['multiply_providers'];
          }
          return ['charges' => floatval($cancelItem['price']), 'hour' => $cancelItem['hour'], 'multiply_duration' => $md, 'multiply_providers' => $mp, 'price_type' => $cancelItem['price_type']]; // Returning the price to be added as expedited charges
        }
      }
    }

    return ['charges' => 0, 'hour' => 'n/a', 'multiply_duration' => false, 'multiply_providers' => false, 'price_type' => '$']; // No charges applicable
  }


  public static function updateServiceCalculations($service, $bookingId)
  {
    $serviceCalculations = [
      "business_hour_charges" => $service["business_hour_charges"],
      "after_business_hour_charges" =>  $service["after_business_hour_charges"],
      "service_charges" => $service["service_charges"],
      "additional_payments" => $service["additional_payments"],
      "service_payment_total" => $service["service_payment_total"],
      "additional_charges" =>  $service["additional_charges"],
      "additional_charges_total" => $service["additional_charges_total"],
      "specialization_total" => $service["specialization_total"],
      "specialization_charges" => $service["specialization_charges"],
      "expedited_charges" => $service["expedited_charges"],
      "duration_hour" => $service['business_hours'] + $service['after_business_hours'],
      "duration_minute" => $service['business_minutes'] + $service['after_business_minutes'],
      "total_duration" => $service['total_duration'],
      'day_rate' => $service['day_rate'],
      'business_hour_duration' => ($service['business_hours'] * 60) + ($service['business_minutes']),
      'after_hour_duration' => ($service['after_business_hours'] * 60) + ($service['after_business_minutes']),

    ];
    $serviceCalculations = json_encode($serviceCalculations);

    if ($service['billed_total'] == '') {
      $service['billed_total'] = 0;
    }
    BookingServices::where('id', $service['id'])->where('booking_id', $bookingId)->update(['billed_total' => $service['billed_total'], 'service_total' => $service['total_charges'], 'service_calculations' => $serviceCalculations]);
    return $service;
  }


  public static function updateTags($booking, $properties, $tags)
  {
    if (!$booking)
      return $tags;

    $propertyTags = []; // Create an empty array to store tags for each property
    $propertyIds = [];
    $options = ['Consumer', 'Participant', 'Requester'];

    foreach ($options as $propertyName) {
      if ($propertyName === 'Requester') {
        $propertyIds = [$booking->customer_id];
      } elseif ($propertyName === 'Consumer' || $propertyName === 'Participant') {
        $service = Booking::where('id', $booking->id)->with('booking_services')->first();

        if ($service) {
          $service = $service->booking_services->first();
          $column = ($propertyName === 'Consumer') ? 'service_consumer' : 'attendees';
          $propertyIds = explode(",", $service->$column);
        }
      }

      // Collect user tags for the current property
      $propertyUserTags = [];
      foreach ($propertyIds as $propertyId) {
        if ($propertyId) {
          $user = User::where('id', $propertyId)->with('userdetail')->first();
          if ($user && $user->userdetail) {
            $userTags = json_decode($user->userdetail->tags, true) ?? [];
            $propertyUserTags = array_merge($propertyUserTags, $userTags);
          }
        }
      }
      $propertyTags[$propertyName] = $propertyUserTags;
    }

    foreach ($options as $propertyName) {
      if (in_array($propertyName, $properties)) {
        $tags = array_merge($tags, $propertyTags[$propertyName]);
      } else
        $tags = array_diff($tags, $propertyTags[$propertyName]);
    }
    return array_values(array_unique(array_filter($tags)));
  }


  //   close out is needed or not for this booking
  // false => can be auto closed , true => required admin approval
  public static function checkCloseOutRequired($bookingServices)
  {
    foreach ($bookingServices as $bService) {
      // fetch service
      $service  = $bService['service'];
      if ($service) {     //ensure service exists
        $checkIn = is_null($service['check_in_procedure']) ?  [] : json_decode($service['check_in_procedure'], true);
        $closeOut = $service['close_out_procedure'] != null ? json_decode($service['close_out_procedure'], true) : [];

        // check if  Require "Check-in" for Provider to Invoice
        if (!is_null($checkIn) && key_exists('require_provider_invoice', $checkIn) && ($checkIn['require_provider_invoice'] == true || $checkIn['require_provider_invoice'] == "true")) {
          // fetch total checked out VS total providers
          $check =  BookingProvider::where('booking_service_id', $bService['id'])
              ->selectRAW('SUM(CASE WHEN (booking_providers.check_in_status = 1 OR booking_providers.check_in_status = 3)  THEN 1 ELSE 0 END) AS resolved,
          COUNT(booking_providers.id) as total_providers')->first()->toArray();
          $check['resolved'] = !is_null($check['resolved']) ? $check['resolved'] : 0;
          if ($check['resolved'] != $check['total_providers'])
            return true;
        }


        // check if Require "Authorize & Close-out" for Provider Payment - fixed
        if (!is_null($closeOut) && key_exists('provider_payment', $closeOut) && ($closeOut['provider_payment'] == true || $closeOut['provider_payment'] == "true")) {

          // fetch total checked out VS total providers
          $check =  BookingProvider::where('booking_service_id', $bService['id'])
              ->selectRAW('SUM(CASE WHEN booking_providers.check_in_status = 3 THEN 1 ELSE 0 END) AS resolved,
          COUNT(booking_providers.id) as total_providers')->first()->toArray();

          $check['resolved'] = !is_null($check['resolved']) ? $check['resolved'] : 0;
          if ($check['resolved'] != $check['total_providers'])
            return true;
        }
        // check if Require "Authorize & Close-out" for Customer Invoicing
        if (!is_null($closeOut) && key_exists('customer_invoice', $closeOut) && ($closeOut['customer_invoice'] == true || $closeOut['customer_invoice'] == "true")) {
          // fetch total checked out VS total providers

          $check =  BookingProvider::where('booking_service_id', $bService['id'])
              ->selectRAW('SUM(CASE WHEN booking_providers.check_in_status = 3 THEN 1 ELSE 0 END) AS resolved,
          COUNT(booking_providers.id) as total_providers')->first()->toArray();
          $check['resolved'] = !is_null($check['resolved']) ? $check['resolved'] : 0;
          if ($check['resolved'] != $check['total_providers'])
            return true;
        }
        // check if time extension is NOT auto-approve
        if (!is_null($closeOut) && (!key_exists('time_extension', $closeOut) || (key_exists('time_extension', $closeOut) && ($closeOut['time_extension'] == false || $closeOut['time_extension'] == "false")))) {
          // fetch total resolved time extensions VS total providers
          $timeExtensions =  BookingProvider::where('booking_service_id', $bService['id'])
              ->selectRAW('SUM(CASE WHEN booking_providers.time_extension_status < 3 THEN 1 ELSE 0 END) AS resolved,
          COUNT(booking_providers.id) as total_providers')->first()->toArray();
          $timeExtensions['resolved'] = !is_null($timeExtensions['resolved']) ? $timeExtensions['resolved'] : 0;
          if ($timeExtensions['resolved'] != $timeExtensions['total_providers'])

            if ($timeExtensions['resolved'] != $timeExtensions['total_providers'])
              return true;
        }
      }
    }
    return false;
  }

  public static function closeActiveBooking($booking,  $bookingServices)
  {

    //  check if all booking services  needs to be manually closed or not
    if (SELF::checkCloseOutRequired($bookingServices) == false) {
      // can auto close

      foreach ($bookingServices as $bookingService) {
        $bookingProviders = BookingProvider::where('booking_service_id', $bookingService->id)->get();
        if (count($bookingProviders)) {
          foreach ($bookingProviders as $booking_provider) {
            $booking_provider->check_in_status = 3;
            $startTime = Carbon::parse($bookingService->start_time);
            $endTime = Carbon::parse($bookingService->end_time);

            $checkin = $booking_provider->check_in_procedure_values;
            $checkout = $booking_provider->check_out_procedure_values;
            $paymentDetails = $booking_provider->service_payment_details;


            // fetch provider checkin checkout times if added , IF Not default to booking time
            $duration_hour = abs((isset($checkout['actual_end_hour']) ? $checkout['actual_end_hour'] : $endTime->format('H')) - (isset($checkin['actual_start_hour']) ? $checkin['actual_start_hour'] : $startTime->format('H')));
            $duration_min = abs((isset($checkout['actual_end_min']) ? $checkout['actual_end_min'] : $endTime->format('i')) - (isset($checkin['actual_start_min']) ? $checkin['actual_start_min'] : $startTime->format('i')));

            $paymentDetails['actual_duration_hour'] = $duration_hour;
            $paymentDetails['actual_duration_min'] = $duration_min;
            $booking_provider->service_payment_details = $paymentDetails;

            $details['actual_start_hour'] = isset($checkin['actual_start_hour']) ? $checkin['actual_start_hour'] : $startTime->format('H');
            $details['actual_start_min'] = (isset($checkin['actual_start_min']) ? $checkin['actual_start_min'] : $startTime->format('i'));
            $details['actual_start_timestamp'] = !is_null($checkin) && key_exists('actual_start_timestamp', $checkin) ? $checkin['actual_start_timestamp'] : $startTime;


            $details['actual_end_hour'] = isset($checkout['actual_end_hour']) ? $checkout['actual_end_hour'] : $endTime->format('H');
            $details['actual_end_min'] = isset($checkout['actual_end_min']) ? $checkout['actual_end_min'] : $endTime->format('H');;
            $details['actual_end_timestamp'] = !is_null($checkout) && key_exists('actual_end_timestamp', $checkout) ? $checkout['actual_end_timestamp'] : $endTime;

            $details['actual_duration_hour'] = abs($details['actual_end_hour'] - $details['actual_start_hour']);
            $details['actual_duration_min'] = abs($details['actual_end_min'] - $details['actual_start_min']);
            $details['time_extension_status'] = 0;

            $booking_provider->admin_approved_payment_detail = $details;        //saving approved payment details
            $booking_provider->save();
          }
        }

          // close assignment service
        $bookingService->is_closed = true;
        $bookingService->save();
      }
      // close booking
      $booking->is_closed = true;
      $booking->save();
    }
      // else booking will be closed manually

  }

  // the function will get all open bookings, with bookingServices and service end date and call closeActiveBooking function.
  public static function closeAllActiveBookings()
  {
      // loop to get all open bookings that needs to be checked (route will call this function)
      // only close bookings where
      // booking is_closed == false and fully assigned and endDate>current date

    $bookings = Booking::where(['is_closed' => 0, 'type' => 1, 'booking_status' => 1])
      ->where('status', 2)
      ->whereDate('booking_end_at', '<', today())->with('booking_services', 'booking_services.service')->get();
    foreach ($bookings as $booking) {

      SELF::closeActiveBooking($booking, $booking->booking_services);
    }
  }

  public static function timeExtensionRequest($bookingProvider, $bookingService)
  {
    $service_permission = $bookingService->service->close_out_procedure ?  json_decode($bookingService->service->close_out_procedure, true) : null;
    if (key_exists('time_extension', $service_permission) && ($service_permission['time_extension'] == "true" || $service_permission['time_extension'] == true)) {
      // service auto-approve time extension enabled

      $details['time_extension_status'] = 1;

      $checkout = $bookingProvider->check_out_procedure_values;
      $details['actual_start_hour'] = $checkout['actual_start_hour'];
      $details['actual_start_min'] = $checkout['actual_start_min'];
      $details['actual_start_timestamp'] =  $checkout['actual_start_timestamp'];
      // Carbon::createFromFormat('m/d/Y H:i', date_format(date_create($bookingService->start_time), 'm/d/Y') . ' ' . $this->closeOut[$bookingServiceId][$providerId]['actual_start_hour'] . ':' . $this->closeOut[$bookingServiceId][$providerId]['actual_start_min']);

      $details['actual_end_hour'] = $checkout['actual_end_hour'];
      $details['actual_end_min'] = $checkout['actual_end_min'];
      $details['actual_end_timestamp'] = $checkout['actual_end_timestamp'];
      // Carbon::createFromFormat('m/d/Y H : i', date_format(date_create($bookingService->end_time), 'm/d/Y') . ' ' . $this->closeOut[$bookingServiceId][$providerId]['actual_end_hour'] . ' : ' . $this->closeOut[$bookingServiceId][$providerId]['actual_end_min']);

      $startTime = strtotime("{$checkout['actual_start_hour']}:{$checkout['actual_start_min']}:00");
      $endTime = strtotime("{$checkout['actual_end_hour']}:{$checkout['actual_end_min']}:00");
      $diff = $endTime - $startTime;
      $details['actual_duration_hour'] = date('H', $diff);
      $details['actual_duration_min'] = date('i', $diff);

      $bookingProvider->admin_approved_payment_detail = $details;        //saving approved extension details
      $bookingProvider->time_extension_status = 1;
    } else {
        // admin will approve time extension on close out
      $bookingProvider->time_extension_status = 3;
    }
    $bookingProvider->save();
  }

    //the function to duplicate the booking data
    public function copyBooking($bookingID)
    {
        $user = Auth::user();
        $booking = Booking::where('id', $bookingID)->first();
        $newBooking = $booking->replicate();
        $bookingNumber = self::generateBookingNumber();
        $newBooking->booking_number = $bookingNumber;
        $newBooking->booking_title = $booking->booking_title . ' - Copy';
        $newBooking->added_by = $user->id;
        //$newBooking->user_id = $user->id;
        //save booking as draft status
        $newBooking->type = 2;
        $newBooking->save();
        //copy booking providers
        $bookingProvider = BookingProvider::where('booking_id', $bookingID)->get();
        if ($bookingProvider->isNotEmpty()) {
            foreach ($bookingProvider as $provider) {
                $newProvider = $provider->replicate();
                $newProvider->booking_id = $newBooking->id;
                $newProvider->save();
            }
        }
        //copy booking services
        $bookingService = BookingServices::where('booking_id', $bookingID)->get();
        if ($bookingService->isNotEmpty()) {
            foreach ($bookingService as $service) {
                $newService = $service->replicate();
                $newService->booking_id = $newBooking->id;
                $newService->save();
            }
        }
        //copy booking department
        $bookingDepartment = BookingDepartment::where('booking_id', $bookingID)->get();
        if ($bookingDepartment->isNotEmpty()) {
            foreach ($bookingDepartment as $department) {
                $newDepartment = $department->replicate();
                $newDepartment->booking_id = $newBooking->id;
                $newDepartment->save();
            }
        }
        //copy booking industry
        $bookingIndustry = BookingIndustry::where('booking_id', $bookingID)->get();
        if ($bookingIndustry->isNotEmpty()) {
            foreach ($bookingIndustry as $industry) {
                $newIndustry = $industry->replicate();
                $newIndustry->booking_id = $newBooking->id;
                $newIndustry->save();
            }
        }
        //copy booking service charges
        $bookingServiceCharges = BookingServiceCharges::where('booking_id', $bookingID)->get();
        if ($bookingServiceCharges->isNotEmpty()) {
            foreach ($bookingServiceCharges as $serviceCharge) {
                $newServiceCharge = $serviceCharge->replicate();
                $newServiceCharge->booking_id = $newBooking->id;
                $newServiceCharge->save();
            }
        }
        //copy booking payments
        $bookingPayment = Payment::where('booking_id', $bookingID)->get();
        if ($bookingPayment->isNotEmpty()) {
            foreach ($bookingPayment as $payment) {
                $newPayment = $payment->replicate();
                $newPayment->booking_id = $newBooking->id;
                $newPayment->save();
            }
        }
        //copy booking payment cron
        $bookingPaymentCron = BookingPaymentCron::where('booking_id', $bookingID)->get();
        if ($bookingPaymentCron->isNotEmpty()) {
            foreach ($bookingPaymentCron as $paymentCron) {
                $newPaymentCron = $paymentCron->replicate();
                $newPaymentCron->booking_id = $newBooking->id;
                $newPaymentCron->save();
            }
        }
        //copy booking provider payment
        $providerPayment = ProviderPayment::where('booking_id', $bookingID)->get();
        if ($providerPayment->isNotEmpty()) {
            foreach ($providerPayment as $payment) {
                $newPayment = $payment->replicate();
                $newPayment->booking_id = $newBooking->id;
                $newPayment->save();
            }
        }
        //copy booking request notification
        $bookingRequestNotification = BookingRequestNotification::where('booking_id', $bookingID)->get();
        if ($bookingRequestNotification->isNotEmpty()) {
            foreach ($bookingRequestNotification as $notification) {
                $newNotification = $notification->replicate();
                $newNotification->booking_id = $newBooking->id;
                $newNotification->save();
            }
        }
        //copy booking invitation
        $bookingInvitation = BookingInvitation::where('booking_id', $bookingID)->get();
        if ($bookingInvitation->isNotEmpty()) {
            foreach ($bookingInvitation as $invitation) {
                $newInvitation = $invitation->replicate();
                $newInvitation->booking_id = $newBooking->id;
                $newInvitation->save();
            }
        }
        //copy booking document
        $bookingDocument = BookingDocument::where('booking_id', $bookingID)->get();
        if ($bookingDocument->isNotEmpty()) {
            foreach ($bookingDocument as $document) {
                $newDocument = $document->replicate();
                $newDocument->booking_id = $newBooking->id;
                $newDocument->save();
            }
        }
        //copy booking reimbursement
        $bookingReimbursement = BookingReimbursement::where('booking_id', $bookingID)->get();
        if ($bookingReimbursement->isNotEmpty()) {
            foreach ($bookingReimbursement as $reimbursement) {
                $newReimbursementData = $reimbursement->replicate();
                $newReimbursementData->booking_id = $newBooking->id;
                $newReimbursementData->save();
            }
        }
        //copy booking specializations
        $bookingSpecialization = BookingSpecialization::where('booking_id', $bookingID)->get();
        if ($bookingSpecialization->isNotEmpty()) {
            foreach ($bookingSpecialization as $specialization) {
                $newSpecializationData = $specialization->replicate();
                $newSpecializationData->booking_id = $newBooking->id;
                $newSpecializationData->save();
            }
        }
        //copy booking unassign provider
        $bookingUnassignProvider = BookingUnassignProvider::where('booking_id', $bookingID)->get();
        if ($bookingUnassignProvider->isNotEmpty()) {
            foreach ($bookingUnassignProvider as $unassignProvider) {
                $newUnassignProviderData = $unassignProvider->replicate();
                $newUnassignProviderData->booking_id = $newBooking->id;
                $newUnassignProviderData->save();
            }
        }
        //copy booking available provider
        $bookingAvailableProvider = BookingAvailableProvider::where('booking_id', $bookingID)->get();
        if ($bookingAvailableProvider->isNotEmpty()) {
            foreach ($bookingAvailableProvider as $availableProvider) {
                $newAvailableProviderData = $availableProvider->replicate();
                $newAvailableProviderData->booking_id = $newBooking->id;
                $newAvailableProviderData->save();
            }
        }
        //copy booking invitation provider
        $bookingInvitationProvider = BookingInvitationProvider::where('booking_id', $bookingID)->get();
        if ($bookingInvitationProvider->isNotEmpty()) {
            foreach ($bookingInvitationProvider as $invitationProvider) {
                $newInvitationProviderData = $invitationProvider->replicate();
                $newInvitationProviderData->booking_id = $newBooking->id;
                $newInvitationProviderData->save();
            }
        }
        //copy booking invitation team
        $bookingInvitationTeam = BookingInvitationTeam::where('booking_id', $bookingID)->get();
        if ($bookingInvitationTeam->isNotEmpty()) {
            foreach ($bookingInvitationTeam as $invitationTeam) {
                $newInvitationTeamData = $invitationTeam->replicate();
                $newInvitationTeamData->booking_id = $newBooking->id;
                $newInvitationTeamData->save();
            }
        }
        //copy booking document user
        $bookingDocumentUser = BookingDocumentUser::where('booking_id', $bookingID)->get();
        if ($bookingDocumentUser->isNotEmpty()) {
            foreach ($bookingDocumentUser as $documentUser) {
                $newDocumentUserData = $documentUser->replicate();
                $newDocumentUserData->booking_id = $newBooking->id;
                $newDocumentUserData->save();
            }
        }
        return $newBooking;
    }

}

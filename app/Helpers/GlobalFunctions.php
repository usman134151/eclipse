<?php

use App\Http\Livewire\App\Provider\Reimbursement;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\Document;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\Specialization;
use App\Models\Tenant\StandardRate;
use App\Models\Tenant\Allappdetail;
use App\Models\Tenant\User;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\ProviderInvoice;
use App\Models\Tenant\ProviderRemittancePayment;
use App\Models\Tenant\Remittance;
use App\Models\Tenant\UserAddress;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\StandardTagFactory;

const PENDING = '0';
const APPROVED = '1';
const DECLINED = '2';


    function dynamic_assets($path)
    {
        if(tenant()) return tenant_asset($path);
        else return asset('storage/'.$path);
    }

    function prt($array = array())
    {
      echo "<pre>";
      //~ $PI	= Config::get('constants.PIoptions');
     print_r($array);
    }

    function getUserName($id)
    {
      $user = User::find($id);
      if(!empty($user)){
        return ucwords($user->first_name.' '.$user->last_name);
      }
    }

    function formatPayment($amount=0)
    {
      if(!is_numeric($amount))
        return '';
      if($amount < 0){
        return   '-$'.str_replace("-","",number_format($amount,2));
      }
      return '$'.number_format($amount,2);
    }


    function formatDate($date)
    {
      if(empty($date)){
        return "-";
      }
      return Carbon::parse($date)->format('m/d/Y');

    }

    function modifyTimeFormat($date)
    {
      if(empty($date) || $date == 'N/A') {
        return "-";
      }

      if(Session::get('business_time_format') == 12) {
        return date("g:i A", strtotime($date));
      } else if(Session::get('business_time_format') == 24) {
        return date("G:i", strtotime($date));
      } else {
        return date("g:i A", strtotime($date));
      }
    }

    function modifyDateTimeFormat($date)
    {
      if(empty($date) || $date == 'N/A' || !strtotime($date)) {
        return "-";
    }

      $timeFormat = Session::get('business_time_format');
      $dateFormat = ($timeFormat == 24) ? "m/d/Y G:i" : "m/d/Y g:i A";
    
      return date($dateFormat, strtotime($date));
    }

    function formatDateNew($date)
    {
      return Carbon::parse($date)->format('F d, Y');

    }

    function formatTime($date)
    {
      if (empty($date)) {
        return "-";
       }
    // Try to determine if the time is in a 12-hour or 24-hour format
    if (preg_match('/\b(?:[01]?[0-9]|2[0-3]):[0-5][0-9]\b/', $date)) {
      // 24-hour format
      $date=explode(' ',$date);
      if(count($date)>0)
      return $date[1];
      else
       return $date;
      //return Carbon::createFromFormat('H:i', $date)->format('g:i');
    } elseif (preg_match('/\b(?:[01]?[0-9]|2[0-3]):[0-5][0-9] (AM|PM)\b/i', $date)) {
      // 12-hour format with AM/PM
      return Carbon::createFromFormat('g:i A', $date)->format('g:i A');
    } else {
      // Invalid format
      return $date;
    }

    }

    function formatDateTime($date)
    {
      if(empty($date)){
        return "-";
      }
      return Carbon::parse($date)->format('m/d/Y g:i A');

    }
    function formatNumber($number)
    {
      if(empty($number)){
        return 0;
      }
        return number_format((float)$number, 2, '.', '');

    }

    function getUsersName($userids = array())
    {

      $users =  User::select(DB::raw('GROUP_CONCAT(concat(first_name," ", last_name) SEPARATOR ", ") as combinename'))
      ->wherein('id', $userids)
      ->first();
      return $users->combinename;
    }
    function getUsersNameSingle($userids = null)
    {

      $users =  User::select(DB::raw('GROUP_CONCAT(concat(first_name," ", last_name) SEPARATOR ", ") as combinename'))
      ->where('id', $userids)
      ->first();
      return $users->combinename;
    }
    function checkBookingSeries($bookingID)
    {
        $booking = Booking::find($bookingID);
        $isrecurring = $booking->frequency_id;
        return $isrecurring;
    }
   function getalphabatic($bookingID)
    {
        $booking = Booking::find($bookingID);
        $getnmber = explode('-', $booking->booking_number);
        $letters = range('A', 'Z');
        $bookingNum = array();
        foreach ($letters as $k=>$v)
        {
            $bookingNum[] = $getnmber[0].'-'.$v;
        }
        if ($getnmber)
        {
            $allBooks = Booking::WhereIn('booking_number',$bookingNum)
                ->where('parent_id', '0')
                ->where('id','!=',$bookingID)
                ->pluck('id');
            if(count($allBooks) > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    function getSpecializationsName($ids = array())
    {
      $specialization =  Specialization::select(DB::raw('GROUP_CONCAT(concat(name) SEPARATOR ", ") as combinename'))
      ->wherein('id', $ids)
      ->first();
      if($specialization->combinename){
        return $specialization->combinename;
      }else{
        return "-";
      }

    }

    function getSpecializationsNameCustomer($ids = array())
    {

          $specialization =  Specialization::select(DB::raw('GROUP_CONCAT(concat(name) SEPARATOR ", ") as combinename'))
              ->wherein('id', $ids)
              ->first();


        if(isset($specialization->combinename)){
            return $specialization->combinename;
        }else{
            return "-";
        }

    }

    function getSpecializationsNameNew($ids = array())
    {

        $specialization = Specialization::select(DB::raw('GROUP_CONCAT(concat(name) SEPARATOR ", ") as combinename'))
            ->wherein('id', $idd)
            ->first();

        if ($specialization->combinename)
        {
            return $specialization->combinename;
        }

    }

    function getSpecializationsNameNewCustomer($ids = array())
    {
        $specialization = Specialization::select(DB::raw('GROUP_CONCAT(concat(name) SEPARATOR ", ") as combinename'))
            ->wherein('id', $ids)
            ->first();

        if (isset($specialization->combinename))
        {
            return  $specialization->combinename;
        }else{
            return '-';
        }

    }
    			function getMutiWhereSingleSelect($table,$select,$where)
			{
				$data = DB::table($table)->select($select)->where($where)->first();
				if(isset($data->$select))
				return ucfirst($data->$select);
				else
				return false;
			}


    function getCombineLocation($id=null)
    {
      $address  = UserAddress::find($id);
      if($address)
      {
        $state = getMutiWhereSingleSelect('states','name',array('id'=>$address->state));
        $location[]  = explode(", ",$address->address_line1);
        $location[]  = explode(", ",$address->address_line2);
        $location[] = array($address->city,$state);
        $location = call_user_func_array('array_merge', $location);

        // prt(array_filter($location));die;

        if(!empty(array_filter($location))){
          return implode(", ",array_unique(array_filter($location)));
        }
      }else
      {
        return '-';
      }

    }

    function echoServiceOptions($sel = null)
    {
     $allServices = ServiceCategory::where('status', '1')->orderBy('name', 'asc')->get();
      $options  = '';
      foreach ($allServices as $service) {
        $id = $service->id;
        $name = $service->name;
        $selected = '';
        if (in_array($id,$sel)) {
          $selected = 'selected';
        }
        $options .= "<option value='$id' $selected >$name</option>";
      }
      echo $options;
    }
    //function getServiceChanrges($Id = null)
    //{
    //
    //    $Service = ServiceCategory::find($Id);
    //    if ($Service) {
    //
    //        $sum = 0;
    //        foreach ($Service->service_charge as $key => $value) {
    //            if (isset($value->price))
    //                $sum += $value->price;
    //        }
    //        echo $sum;
    //    }
    //}
    function getServiceChanrges($Service = null)
    {
        if ($Service) {
            $sum = 0;
            foreach ($Service as $key => $value) {
                if (isset($value[0]->price))
                    $sum += $value[0]->price;
            }
            echo $sum;
        }
    }
     function array_flatten($array)
     {
            if (!is_array($array)) {
                return FALSE;
            }
            $result = array();
            foreach ($array as $key => $value) {
                if (is_array($value)) {
                    $result = array_merge($result, array_flatten($value));
                }
                else {
                    $result[$key] = $value;
                }
            }
            return $result;
        }

    function echoAccommodationOptions($sel = null)
    {

      $allAccommodation = Accommodation::where('status', '1')->orderBy('name', 'asc')->get();
      $options  = '';
      foreach ($allAccommodation as $acc) {
        $id = $acc->id;
        $name = $acc->name;
        $selected = '';
        if (in_array($id,$sel)) {
          $selected = 'selected';
        }
        $options .= "<option value='$id' $selected >$name</option>";
      }
      echo $options;
    }

    function distance($lat1, $lon1, $lat2, $lon2, $unit)
    {
      if (($lat1 == $lat2) && ($lon1 == $lon2)) {
        return 0;
      }
      else {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
          return ($miles * 1.609344);
        } else if ($unit == "N") {
          return ($miles * 0.8684);
        } else {
          return $miles;
        }
      }
    }

    function getUserdocumentsName($userid=null)
    {

      $users =  Document::select(DB::raw('GROUP_CONCAT(document_title SEPARATOR ", ") as combinename'))
      ->where('user_id', $userid)
      ->first();
      return $users->combinename;
    }

    function clean($string)
    {
       $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
       $string = str_replace('-', '', $string); // Replaces all spaces with hyphens.

       return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    function get_percentage($number, $total)
    {
      // Can't divide by zero so let's catch that early.
      $percentage =  0;
      if ($total > 0) {
          $percentage =  ($number / $total) * 100;

      }
      return round($percentage, 2) . '%';
    }
    function customize_data($n,$b)
    {
      $n ['booking_id']= $b;
      unset($n['id']);
      unset($n['created_at']);
      unset($n['updated_at']);
      return $n;
    }

    function new_spec($n,$b)
    {
      $n ['booking_id']= $b;
      unset($n['id']);
      unset($n['created_at']);
      unset($n['updated_at']);
      return $n;
    }
    function new_spec_new($n,$b)
    {
      $n ['booking_id']= $b;
      unset($n['created_at']);
      unset($n['updated_at']);
      return $n;
    }
    function unset_id($arr)
    {
      unset($arr['id']);
      return $arr;
    }
if (!function_exists('getServiceName')) {

    function getServiceName($serviceID)
    {
        $serviceName = ServiceCategory::where('id', $serviceID)->first();
        if (is_object($serviceName))
            return $serviceName->name;
    }

}
if (!function_exists('dateFromTimeStamp')) {

    function dateFromTimeStamp($timestamp = ''): ?string
    {
        return $timestamp ? Carbon::createFromTimestamp($timestamp)->toDateString() : null;
    }
}

if (!function_exists('formatAmount')) {

    function formatAmount($amount, $currency = 'USD'): ?string
    {
        if (!$amount)
            return null;

        $currency = $currency ?? 'USD';
        $amount = (float)$amount;
        $regex = "/\B(?=(\d{3})+(?!\d))/i";
        return preg_replace($regex, ",", $amount).' '.strtoupper($currency);
//        $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
//        return $formatter->formatCurrency($amount, strtoupper($currency));
    }
}

if (!function_exists('convertDecimalToDigits')) {

    function convertDecimalToDigits($amount, $currency = 'USD'): ?string
    {
        if (!$amount)
            return null;

        return formatAmount($amount/100, $currency);
    }
}
if (!function_exists('genetrateInvoiceNumber')) {

			function genetrateInvoiceNumber($comp)
			{
				try {
					if($comp)
					{

						$latestBooking = Invoice::where('company_id',$comp->id)->count();
						if($latestBooking != 0)
						$bookingNum = $latestBooking;
						else
						$bookingNum = 0;

						$compName = strtoupper(substr($comp->name,0,3)).date('y');
						$bookId = $compName.'-'.str_pad($bookingNum + 1, 3, "0", STR_PAD_LEFT);
						return $bookId;
					}
				} catch (\Exception $e) {
					dd($e->getMessage());
				}
			}
    }

if (!function_exists('genetrateProviderInvoiceNumber')) {

  function genetrateProviderInvoiceNumber($comp)
  {
    try {
      if ($comp) {

        $latestBooking = ProviderInvoice::where('provider_id', $comp->id)->count();
        if ($latestBooking != 0)
          $bookingNum = $latestBooking;
        else
          $bookingNum = 0;

        $compName = strtoupper(substr($comp->name, 0, 3)) . date('y');
        $bookId = 'INP-' . $compName . '-' . str_pad($bookingNum + 1, 3, "0", STR_PAD_LEFT);
        return $bookId;
      }
    } catch (\Exception $e) {
      dd($e->getMessage());
    }
  }
}


if (!function_exists('genetrateReimbursementNumber')) {

  function genetrateReimbursementNumber($provider)
  {
    try {
      if ($provider) {

        $latestReimbursement = BookingReimbursement::count();
        //  Invoice::where('company_id', $comp->id)->count();
        if ($latestReimbursement != 0)
        $num = $latestReimbursement;
        else
        $num = 0;

        $name = strtoupper('RMB') . date('y');
        $reimId = $name . '-' . str_pad($num + 1, 3, "0", STR_PAD_LEFT);
        return $reimId;
      }
    } catch (\Exception $e) {
      dd($e->getMessage());
    }
  }
}
if (!function_exists('genetrateRemittanceNumber')) {

  function genetrateRemittanceNumber($provider)
  {
    try {
      if ($provider) {

          $latestRemittance = Remittance::where('provider_id', $provider->id)->count();
          if ($latestRemittance != 0)
            $remittanceNum = $latestRemittance;
          else
            $remittanceNum = 0;

          $providerName = strtoupper(substr($provider->name, 0, 3)) . date('y');
          $number = $providerName . '-' . str_pad($remittanceNum + 1, 3, "0", STR_PAD_LEFT);
          return $number;
      }
    } catch (\Exception $e) {
      dd($e->getMessage());
    }
  }
}
if (!function_exists('genetratePaymentNumber')) {

  function genetratePaymentNumber($provider)
  {
    try {
      if ($provider) {

        $latestPayment = ProviderRemittancePayment::count();
        if ($latestPayment != 0)
          $Num = $latestPayment;
        else
          $Num = 0;

        $providerName = 'PAY' . date('y');
        $number = $providerName . '-' . str_pad($Num + 1, 3, "0", STR_PAD_LEFT);
        return $number;
      }
    } catch (\Exception $e) {
      dd($e->getMessage());
    }
  }
}
?>

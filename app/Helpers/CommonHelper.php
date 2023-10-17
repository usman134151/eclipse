<?php

/***
 *  Dev :  Sakhawat Kamran
 *  Date: 21-02-2023
 */

use App\Models\Tenant\User;
use App\Models\Tenant\LoginAddress;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Tenant\Jobs\sendSms;
use App\Http\Controllers\Tenant\Jobs\sendEmail;
use App\Http\Controllers\Tenant\Mails\createEmail;
use Illuminate\Support\Facades\Mail;

##### API Related Helpers #####

/**
 *  Descrip: This function is used for all api dete in response  
 */

if (!function_exists('api_date_formate')) {
  function api_date_formate($date, $formate = null)
  {
    return strtotime($date);
  }
}

####### USE IN BOTH WEB AND API #######

/**
 * send email generic method
 *
 * @param to , subject , data , mailview, attachment:array , dispathType , delaymin
 * @return boolean
 */

if (!function_exists('sendMail')) {
  function sendMail($to, $subject, $data, $mailview, $attachment = [], $dispathType = 'dispatch',  $delaymin = 0)
  {
   
   
    try {
      $response = null;

      if ($dispathType == 'dispatch') {
        $response = sendEmail::dispatch($to, $subject, $data, $mailview)->onQueue('emails');
      } else if ($dispathType == 'dispatchSync') {
        $response = sendEmail::dispatchSync($to, $subject, $data, $mailview);
      } else if ($dispathType == 'delay') {
        $response = sendEmail::dispatch($to, $subject, $data, $mailview)->delay(now()->addMinutes($delaymin))->onQueue('emails');
      }
      
      if ($response) {
        return true;
      } else {
        return false;
      }
    
    } catch (\Exception $e) {
      dd($e);
    }
  }
}

if (!function_exists('sendWelcomeMail')) {
  function sendWelcomeMail($user)
  {
    $templateId = getTemplate('Account: Created', 'email_template');

    $params = [
      'email'       =>  $user->email, //
      'user'        =>  $user->name,
      'user_id'     =>  $user->id,
      'templateId'  =>  $templateId,
      'item_id'     => null,
      'mail_type'   => 'account',
      'templateName' => 'Account Created',
      'bookingData' => [],
    ];

    sendTemplatemail($params);
  }

  // $company = isset($user->company)? $user->company->name:'';
  // $user->subject = $company.' Portal - Welcome';
  // $user['domain'] = url('/');

  // // $email = new createEmail($user->subject, $user, 'tenant.emails.welcome_email');
  // // Mail::to('emos@email.com')->send($email);
  // sendMail($user->email, $user->subject, $user, 'tenant.emails.welcome_email', [],'dispatch');
}
/**
 * send sms generic method
 *
 * @param phone , message , dispathType , delaymin
 * @return boolean
 */

if (!function_exists('sendSms')) {
  function sendSms($phone, $message, $dispathType,  $delaymin = 0)
  {
    try {
      $response = null;
      if ($dispathType == 'dispatch') {
        $response = sendSms::dispatch($phone, $message)->onQueue('sms');
      } else if ($dispathType == 'delay') {
        $response = sendSms::dispatch($phone, $message)->delay(now()->addMinutes($delaymin))->onQueue('sms');
      }
      if ($response) {
        return true;
      } else {
        return false;
      }
    } catch (\Exception $e) {
      Log::error($e->getMessage());
    }
  }
}

/**
 * check browser saved for auth user
 *
 * @param 
 * @return boolean
 */

if (!function_exists('checkUserSavedBrowser')) {
  function checkUserSavedBrowser()
  {
    $browser = get_browser_name($_SERVER['HTTP_USER_AGENT']);
    $ipAdd   = get_ip_address();
    $isLogin = LoginAddress::where('user_id', auth()->user()->id)->where(function ($q) use ($browser, $ipAdd) {
      $q->where('browser', $browser)
        ->where('ip_address', $ipAdd);
    })->count();
    return $isLogin;
  }
}

/**
 * get user browser name
 *
 * @param $user_agent
 * @return browser name
 */

if (!function_exists('get_browser_name')) {
  function get_browser_name($user_agent)
  {
    $t = strtolower($user_agent);
    $t = " " . $t;
    if (strpos($t, 'opera') || strpos($t, 'opr/')) return 'Opera';
    elseif (strpos($t, 'edge')) return 'Edge';
    elseif (strpos($t, 'chrome')) return 'Chrome';
    elseif (strpos($t, 'safari')) return 'Safari';
    elseif (strpos($t, 'firefox')) return 'Firefox';
    elseif (strpos($t, 'msie') || strpos($t, 'trident/7')) return 'Internet Explorer';
    return 'Unkown';
  }
}

/**
 * get ip address
 *
 * @param 
 * @return ip_address
 */

if (!function_exists('get_ip_address')) {
  function get_ip_address()
  {

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from remote address
    else {
      $ip_address = $_SERVER['REMOTE_ADDR'];
    }
    return $ip_address;
  }
}


/**
 * save user browser
 *
 * @param 
 * @return ip_address
 */

if (!function_exists('getAdmin')) {
  function getAdmin()
  {
    try {
      $user = User::find(1);
      return $user;
    } catch (\Exception $e) {
    }
  }
}

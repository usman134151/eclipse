<?php

namespace App\Http\Controllers\Tenant\Helper;

use App\Http\Controllers\Tenant\Jobs\sendEmail;
use App\Http\Controllers\Tenant\Jobs\sendSms;
use App\App\Models\Tenant\LoginAddress;
use Illuminate\Support\Facades\Log;

class Helper {
    
    /**
     * send email generic method
     *
     * @param to , subject , data , mailview, attachment:array , dispathType , delaymin
     * @return boolean
     */
	public static function sendMail($to, $subject, $data, $mailview, $attachment = [], $dispathType = 'dispatch',  $delaymin = 0)
	{
		try {
            $response = null;
            if($dispathType == 'dispatch'){
                $response = sendEmail::dispatch($to, $subject, $data, $mailview)->onQueue('emails');
            }else if($dispathType == 'dispatchSync'){
                $response = sendEmail::dispatchSync($to, $subject, $data, $mailview);
            }else if($dispathType == 'delay'){
                $response = sendEmail::dispatch($to, $subject, $data, $mailview)->delay(now()->addMinutes($delaymin))->onQueue('emails');
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

    /**
     * send sms generic method
     *
     * @param phone , message , dispathType , delaymin
     * @return boolean
     */
	public static function sendSms($phone, $message, $dispathType,  $delaymin = 0)
	{
		try {
            $response = null;
            if($dispathType == 'dispatch'){
                $response = sendSms::dispatch($phone, $message)->onQueue('sms');
            }else if($dispathType == 'delay'){
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

    /**
     * check browser saved for auth user
     *
     * @param 
     * @return boolean
     */
    public static function checkUserSavedBrowser()
	{
		$browser = Helper::get_browser_name($_SERVER['HTTP_USER_AGENT']);
		$ipAdd   = Helper::get_ip_address();
		$isLogin = LoginAddress::where('user_id', auth()->user()->id)->where(function ($q) use ($browser, $ipAdd) {
			$q->where('browser', $browser)
			->where('ip_address', $ipAdd);
		})->count();
		return $isLogin;
	}

    /**
     * get user browser name
     *
     * @param $user_agent
     * @return browser name
     */
    public static function get_browser_name($user_agent)
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

    /**
     * get ip address
     *
     * @param 
     * @return ip_address
     */
    public static function get_ip_address()
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

	/**
     * save user browser
     *
     * @param 
     * @return ip_address
     */
	public static function saveUserBrowser()
  	{
    	try{
			$browser = Helper::get_browser_name($_SERVER['HTTP_USER_AGENT']);
			$ipAdd   = Helper::get_ip_address();
			$loginData  = array(
			'user_id' => auth()->user()->id,
			'browser' => $browser,
			'ip_address'=> $ipAdd
			);
			LoginAddress::updateOrCreate($loginData);
		} catch (\Exception $e) {

		}
  	}
}


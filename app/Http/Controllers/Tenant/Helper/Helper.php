<?php

namespace App\Http\Controllers\Tenant\Helper;

use App\Http\Controllers\Tenant\Jobs\sendEmail;
use Illuminate\Support\Facades\Log;

class Helper {
    
    /**
     * send email generic method
     *
     * @param to , subject , data , mailview, attachment
     * @return boolean
     */
	public static function sendMail($to, $subject, $data, $mailview, $attachment = [], $dispathType,  $delaymin = 0)
	{
		try {
            $response = null;
            if($dispathType == 'dispatch'){
                $response = sendEmail::dispatch($to, $subject, $data, $mailview)->onQueue('emails');
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
}


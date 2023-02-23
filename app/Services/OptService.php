<?php
namespace app\Services;

use App\Models\Tenant\UserOtpVerification;

class OptService
{
    
    /**
     * generating opt for new login
     *
     * @param File $csvfile
     * @return boolean
     */

    public static function optSend()
    {
        try{
            $otp = mt_rand(100000, 999999);
            $email = auth()->user()->email;
            $user = ucfirst(auth()->user()->first_name . ' ' . auth()->user()->last_name);
            $subject = $email . ' Portal - One-time Passcode';

            $params = [
                'email' => $email,
                'user' => $user,
                'subject' => $subject,
                'otp' => $otp,
            ];
            $otpData = array(
                'user_id' => auth()->user()->id,
                'otp' => 'email',
                'otp_status' => 'pending',
                'otp' => $otp,
                'otp_created' => date('Y-m-d H:i:s'),
                'otp_valid_upto' => date('Y-m-d H:i:s', strtotime('+15 minutes')),
            );

            $mail = sendMail($email, $subject, $params, 'tenant.emails.otp', [],'dispatch');
            if ($mail) {
                UserOtpVerification::where('user_id', auth()->user()->id)->updateOrCreate(['user_id' => auth()->user()->id], $otpData);
                return true;
            }
            return false;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
        return true;
    }

    public static function optExpired()
    {
        $expOTP = UserOtpVerification::where(['user_id' => auth()->user()->id,'otp_status' => 'pending'])->where('otp_valid_upto', '<', date('Y-m-d H:i:s'));
        if ($expOTP->count()) {
            $expOTP->update(array('otp_status' => 'expired'));
        }
    }


    public static function optConfirmed( $optCode = null )
    {
        $matchOtp = UserOtpVerification::where(['user_id' => auth()->user()->id, 'otp' => $optCode, 'otp_status' => 'pending']);
        
        if ($matchOtp->count()) {
            $matchOtp->update(array('otp_status' => 'verified'));
            return true;
        }
        return false;    
    }


    
}

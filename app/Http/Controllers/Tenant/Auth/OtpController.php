<?php
namespace App\Http\Controllers\Tenant\Auth;

####Task:OPT Add Services (Sakhawat Kamran) ####
use App\Services\OptService;
####END-OPT #####
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
####Task:OPT Opt Changes Done  (Sakhawat Kamran) #####
//use Illuminate\Support\Facades\Log; 
//use App\Models\Tenant\UserOtpVerification;
//use App\Http\Controllers\Tenant\Helper\Helper;
####END-OPT####
class OtpController extends Controller
{
    /**
     * load otp view
     *
     * @param File $csvfile
     * @return view
     */
    public function loadOtpView()
    {
        $user = Auth::user();
        if($user){
            return view('tenant.auth.otpcheck', compact('user'));
        }else{
            return redirect("login");
        }
        
    }

    /**
     * resend otp to user email
     *
     * @param File $csvfile
     * @return redirect url
     */
    public function resendOtpView()
    {
        try {
            ####Task:OPT Opt Changes Done  (Sakhawat Kamran) ##### 
            // send otp
            //$this->send_otp();
            OptService::optExpired();
            OptService::optSend();
            ####END-OPT####
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }

        return redirect()->route('tenant.otpverify')->with('message', 'OTP sent please check your inbox');

    }

    /**
     * vvalidate otp
     *
     * @param File $csvfile
     * @return redirect url
     */
    public function verifyOtp(Request $request)
    {
        $validated = $request->validate([
            'otp' => 'required',
        ]);
        ####Task:OPT Opt Changes Done  (Sakhawat Kamran) ##### 
        // if (isset($request->otp) && !empty($request->otp)) {
        //     $matchOtp = UserOtpVerification::where(['user_id' => auth()->user()->id, 'otp' => $request->otp, 'otp_status' => 'pending']);
        //     if ($matchOtp->count()) {
        //         $matchOtp->update(array('otp_status' => 'verified'));
        //        return redirect('home');
        //     }
        if(OptService::optConfirmed($request->otp)){
           return redirect('home');
        ####END-OPT####     
        }
        return back()->with('error', 'Invalid OTP');

    }
    ####Task:OPT Opt Changes Done  (Sakhawat Kamran) #####
    /**
     * generating opt for new login
     *
     * @param File $csvfile
     * @return boolean
     */
    // public static function send_otp()
    // {
    //     try{
    //         $otp = mt_rand(100000, 999999);
    //         $email = auth()->user()->email;
    //         $user = ucfirst(auth()->user()->first_name . ' ' . auth()->user()->last_name);
    //         $subject = $email . ' Portal - One-time Passcode';

    //         $params = [
    //             'email' => $email,
    //             'user' => $user,
    //             'subject' => $subject,
    //             'otp' => $otp,
    //         ];
    //         $otpData = array(
    //             'user_id' => auth()->user()->id,
    //             'otp' => 'email',
    //             'otp_status' => 'pending',
    //             'otp' => $otp,
    //             'otp_created' => date('Y-m-d H:i:s'),
    //             'otp_valid_upto' => date('Y-m-d H:i:s', strtotime('+15 minutes')),
    //         );

    //         $mail = Helper::sendMail($email, $subject, $params, 'tenant.emails.otp', [],'dispatch');
    //         if ($mail) {
    //             UserOtpVerification::where('user_id', auth()->user()->id)->updateOrCreate(['user_id' => auth()->user()->id], $otpData);
    //             return true;
    //         }
    //         return false;
    //     } catch (\Exception $e) {
    //         Log::error($e->getMessage());
    //     }
    //     return true;
    // }
    ####END-OPT#### 
}
<?php

namespace App\Http\Controllers\Tenant\Auth;

####Task:OPT Add Services (Sakhawat Kamran) ####
use App\Services\OptService;
//use App\Models\Tenant\UserOtpVerification;
####END-OPT####
use App\Http\Controllers\Controller;
use App\Http\Controllers\Tenant\Helper\Helper;
use App\Models\Tenant\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesUsers;

	/** @override */
	public function showLoginForm()
	{
		return view('tenant.auth.login');
	}

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	// protected $redirectTo = RouteServiceProvider::HOME;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	/**
	 * Custom Login for tenant action
	 *
	 * @return void
	 */
	public function login(Request $request)
	{
		$this->validate($request,[
			'email'=>'required|email',
			'password'=>'required'
		 ]);

		$credentials = $request->only('email', 'password');
		if (Auth::attempt($credentials)) {
		   // if (Auth::user()->status == 1) {
			if(!$request->cookie('savedBrowser') && !Helper::checkUserSavedBrowser() && env('2FA')){

				####Task:OPT Add Services (Sakhawat Kamran) ####
				OptService::optExpired();
				OptService::optSend();

				// $expOTP = UserOtpVerification::where(['otp_status' => 'pending'])->where('otp_valid_upto', '<', date('Y-m-d H:i:s'));

				// if ($expOTP->count()) {
				//     $expOTP->update(array('otp_status' => 'expired'));
				// }
				// OtpController::send_otp();

				####END-OPT####
				return redirect('otpverify');
				die();
			}else{
				return redirect('home');
			}
		   // } else {
			 //   Auth::logout();
			   // return redirect("login")->withErrors(['loginError' => __('auth.notActiveError')]);
			   // die();
			//}
		}

		return redirect("login")->withErrors(['loginError' => __('auth.loginError')]);
	}

	public function forgotPassword(Request $request)
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
		// 	try {
		// 	$validator = \Validator::make($request->all(), [
		// 		'email' => 'required|email'
		// 	]);

		// 	if ($validator->fails())
		// 	{
		// 		// $res = '';
		// 		// $errors             = $validator->errors();
		// 		// $res['success']     = false;
		// 		// $res['formErrors']  = true;
		// 		// $res['errors']      = $errors;
		// 	}
		// 	else
		// 	{
		// 		$check_user = User::where(['email'=>$request->email])->first();
				
		// 		if (! $check_user)
		// 		{
		// 			$result["success"] = false;
		// 			$result["error_message"] = __('lang.email_not_found');;
		// 			echo json_encode($result);
		// 			die();
		// 		}
		// 		else
		// 		{
		// 			$newSecurityToken = Str::random(32);
		// 			$check_user->remember_token = $newSecurityToken;
		// 			$check_user->save();
		// 			$company = User::find('1');
		// 			$company = isset($company->users_business) ? $company->users_business->company_name : '';
					
		// 			$check_user->subject = $company.' Portal - Password Reset';
		// 			$mail = Helper::sendmail($check_user->email,'',$check_user->subject,['data' => $check_user],'emails.forgot_password');
		// 		// $mainSend = Mail::send('emails.forgot_password', ['data' => $check_user], function($message) use ($check_user) {
		// 		//   $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
		// 		//   $message->to($check_user->email, $check_user->first_name . ' ' . $check_user->last_name)->subject($check_user->subject);
		// 		// });
		// 		if($mail)
		// 		{
		// 		  $res['success']         = true;
		// 		  $res['url']             = 'login';
		// 		  $res['delayTime']       = '2000';
		// 		  $res["success_message"] = __('lang.sent');
		// 		}else {
		// 		  $res['success']         = false;
		// 		  $res['url']             = 'login';
		// 		  $res['delayTime']       = '2000';
		// 		  $res["error_message"] = __('lang.err');
		// 		}
		// 	  }
		// 	}
		// 	echo json_encode($res);
		// 	die();
		//   } catch (\Exception $e) {
		// 	$res['success']         = false;
		// 	$res['delayTime']       = '2000';
		// 	$result["error_message"] = $e->getMessage();
		// 	echo json_encode($res);
		// 	die();
		//   }
		}
		return view('tenant.auth.forgot-password', ['title' => 'Forget Password']);
	}

	public function resetForgotPassword(Request $request, $securityToken)
	{
		
	}
}

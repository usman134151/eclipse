<?php

namespace App\Http\Controllers\Tenant\Auth;

####Task:OPT Add Services (Sakhawat Kamran) ####
use App\Services\OptService;
//use App\Models\Tenant\UserOtpVerification;
####END-OPT####
use App\Http\Controllers\Controller;
use App\Http\Controllers\Tenant\Helper\Helper;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
			//tmp fix to check if required directories are created
		
				$directories=['/framework/cache/','app/public','app/tmp','app/livewire-tmp'];
				foreach($directories as $directory){
							
					if (!file_exists(storage_path().$directory)) {
						
						mkdir(storage_path().$directory, 0755, true);
						
						
					}
				}

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
}

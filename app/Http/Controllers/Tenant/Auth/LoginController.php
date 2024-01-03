<?php

namespace App\Http\Controllers\Tenant\Auth;

####Task:OPT Add Services (Sakhawat Kamran) ####
use App\Services\OptService;
//use App\Models\Tenant\UserOtpVerification;
####END-OPT####
use App\Http\Controllers\Controller;
use App\Http\Controllers\Tenant\Helper\Helper;
use App\Models\Tenant\BusinessSetup;
use App\Models\Tenant\RoleUser;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\User;
use App\Models\Tenant\UserDetail;
use App\Models\Tenant\UserLoginAddress;
use App\Services\App\BookingOperationsService;
use App\Services\App\UserService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
		$welcome_text = '';
		$login_screen = null;
		$data['company_logo'] = null;



		$businessSetup = BusinessSetup::first();
		$systemTimeDetails = Schedule::where('model_type','1')->first(); 

		if($systemTimeDetails)
		{
			$data['business_timezone_id'] = $systemTimeDetails->timezone_id ? $systemTimeDetails->timezone_id : 61;
			$data['business_time_format'] = $systemTimeDetails->time_format == 1 ? 12 : 24;
		}

		if ($businessSetup) {
			$welcome_text = $businessSetup->welcome_text;
			if ($businessSetup->login_screen != null) {
				// if (\File::exists(public_path($businessSetup->login_screen)))
				if ($businessSetup->login_screen)
					$login_screen = url($businessSetup->login_screen);
			}
			if ($businessSetup->company_logo != null) {
				if (\File::exists(public_path($businessSetup->company_logo)))
					$data['company_logo'] = $businessSetup->company_logo;
			}
			$data['default_colour'] = $businessSetup->default_colour;
			$data['foreground_colour'] = $businessSetup->foreground_colour;
			$data['dark_default_colour'] = $businessSetup->dark_default_colour;
			$data['dark_foreground_colour'] = $businessSetup->dark_foreground_colour;
			$data['email_notifications'] = $businessSetup->email_notifications;
			$data['sms_notifications'] = $businessSetup->sms_notifications;
			$data['system_notifications'] = $businessSetup->system_notifications;
		}
		session($data);	//storing setup details 

		return view('tenant.auth.login', ['welcome_text' => $welcome_text, 'login_screen' => $login_screen]);
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
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required'
		]);

		$credentials = $request->only('email', 'password');
		if (Auth::attempt($credentials)) {
			if (Auth::user()->status == 1) {
			if (!$request->cookie('savedBrowser') && !Helper::checkUserSavedBrowser() && env('2FA')) {

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
			} else {
				//tmp fix to check if required directories are created

				$directories = ['/framework/cache/', 'app/public', 'app/tmp', 'app/livewire-tmp'];
				foreach ($directories as $directory) {

					if (!file_exists(storage_path() . $directory)) {

						mkdir(storage_path() . $directory, 0755, true);
					}
				}

				//saving permissions in session
				$userPermissions = userPermissions();
				Session::put('userPermissions', $userPermissions->toArray());
				$super_admin_user = RoleUser::where('role_id', 1)->where('user_id', auth()->user()->id)->orderBy('id', 'asc')->first();
				
				if ($super_admin_user) {
					Session::put('isSuperAdmin', 1);
				} 
				$is_provider = RoleUser::where('role_id', 2)->where('user_id', auth()->user()->id)->orderBy('id', 'asc')->first();
				if ($is_provider) {
					Session::put('isProvider', 1);
				} else {
					Session::put('isProvider', $is_provider);
				}
				$is_customer = RoleUser::where('role_id', 4)->where('user_id', auth()->user()->id)->orderBy('id', 'asc')->first();
				if ($is_customer) {
					Session::put('isCustomer', 1);
					//fetch customer Roles
					$service = new UserService();
					$customer_roles =  $service->getCustomerRoles(Auth::id());
					$company_admin = in_array(10, array_keys($customer_roles));
					if (count($customer_roles))
						Session::put('customerRoles', array_keys($customer_roles));
					else
						Session::put('customerRoles', []);
					Session::put('companyAdmin', $company_admin);
					
				} else {
					Session::put('isCustomer', $is_customer);
					Session::put('companyAdmin', false);

				}

				// user theme 0 -> light theme 1-> dark theme
				$userTheme = UserDetail::where('user_id', auth()->user()->id)->value('user_theme');
				Session::put('theme', $userTheme);

				//save ip from where user logged in
				UserLoginAddress::create(['user_id' => Auth::id(), 'ip_address' => request()->ip()]);

				// temp fix till cron-job is enabled to close all bookings -- Maarooshaa
				BookingOperationsService::closeAllActiveBookings();
				return redirect('home');
			}
			} else {
				$admin = User::where('id',1)->first()->name;
			  Auth::logout();
			return redirect("login")->withErrors(['loginError' => __('auth.notActiveError',['admin' => $admin])]);
			}
		}

		return redirect("login")->withErrors(['loginError' => __('auth.loginError')]);
	}
}

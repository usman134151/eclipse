<?php

namespace App\Http\Controllers\Tenant\Auth;

use App\Http\Controllers\Controller;
use App\Models\Tenant\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Password Reset Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling password reset emails and
	| includes a trait which assists in sending these notifications from
	| your application to your users. Feel free to explore this trait.
	|
	*/

	use SendsPasswordResetEmails;

	/** @override */
	public function showLinkRequestForm()
	{
		return view('tenant.auth.passwords.email');
	}

	public function forgotPassword(Request $request)
	{
		if ($request->isMethod('post'))
		{
			
			$request->validate([
				'email' => 'required|email|exists:users',
			]);

			$token = Str::random(64);

			DB::table('password_resets')->insert([
				'email' => $request->email,
				'token' => $token,
				'created_at' => Carbon::now()
			]);
		    $user=User::where('email',$request->email)->first();
			
			Mail::send('emails.forgot_password', ['token' => $token, 'data' => $user], function($message) use($request){
			 	$message->to($request->email);
			 	$message->subject('Reset Password');
			 });
			return redirect('login')->with('message', 'We have e-mailed your password reset link!');
		}
		return view('tenant.auth.forgot-password', ['title' => 'Forget Password']);
	}

	public function showResetPasswordForm($token)
	{
		return view('tenant.auth.passwords.reset', ['token' => $token]);
	}

	public function submitResetPasswordForm(Request $request)
	{
		$request->validate([
			'email' => 'required|email|exists:users',
			'password' => [
				'required',
				'string',
				'min:8',
				//'regex:/[A-Z]/',
				//'regex:/[0-9]/',
				//'regex:/[!@#$%^&*(),.?":{}|<>]/',
				'confirmed',
			],
			'password_confirmation' => 'required'
		]);

		$updatePassword = DB::table('password_resets')
			->where([
				'email' => $request->email,
				'token' => $request->token
			])
			->first();

		if(!$updatePassword)
		{
			return back()->withInput()->with('error', 'Invalid token!');
		}

		$user = User::where('email', $request->email)
			->update(['password' => Hash::make($request->password)]);
			
		DB::table('password_resets')
			->where(['email'=> $request->email])
			->delete();

		return redirect('login')->with('message', 'Your password has been changed!');
	}
}

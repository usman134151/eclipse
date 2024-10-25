<?php

namespace App\Http\Controllers\Tenant\Middleware;

use App\Models\Tenant\UserOtpVerification;;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureOtpCheckVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() &&  env('2FA')) {
            if (!$request->session()->has('optverified')) {
                $user = Auth::user();
            // check if otp status verified for auth user
            $isotpgenerated = UserOtpVerification::where('otp_status', 'verified')->where('user_id', $user->id)->first();

            if ($isotpgenerated == null) {
                return redirect('otpverify');
            }
            else{
                //create session variable to make sure query is not running multiple times
                $request->session()->put('optverified', '1');
            }
            }
            
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\UserOtpVerification;
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
        if (Auth::user()) {
            $user = Auth::user();
            // check if otp status verified for auth user
            $isotpgeneratd = UserOtpVerification::where('otp_status', 'verified')->where('user_id', $user->id)->first();

            if ($isotpgeneratd == null) {
                return redirect('otpverify');
            }
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Controllers\Tenant\Api;

use App\Models\Tenant\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Tenant\Api\ApiController;
use App\Models\Tenant\UserOtpVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Tenant\Auth\OtpController;

class AuthController extends ApiController
{
    /**
     * Create User
     * @param Request $request
     * @return User 
     */
    public function register(Request $request)
    {
        try {
           
            $validate = $this->vallidateApi(
                            $request,
                            [
                                'name' => 'required',
                                'email' => 'required|email|unique:users,email',
                                'password' => 'required'
                            ]
                        );
            if($validate   !== true )
            {
                return $validate;
            }   
            
            
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $user = User::where('email', $request->email)->first();
            $result = $user->toArray();
            return $this->response($result, 301);
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }

    /**
     * Login The User
     * @param Request $request
     * @return User
     */
    public function login(Request $request)
    {
        try {

            $validate = $this->vallidateApi(
                $request,
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]
            );
            if($validate !== true )
            {
                return $validate;
            }   

            if(!Auth::attempt($request->only(['email', 'password']))){
                return  $this->response([
                    'errors' => 'Email & Password does not match with our record.',
                ], 403);
            }

            $user = User::with('role')->where('email', $request->email)->first();
            if( $user->role->id != 2 )
            {
                return  $this->response([
                    'errors' => 'Email & Password does not match with our record.',
                ], 403);
            }
            $expOTP = UserOtpVerification::where(['otp_status' => 'pending'])->where('otp_valid_upto', '<', date('Y-m-d H:i:s'));
            if ($expOTP->count()) {
                $expOTP->update(array('otp_status' => 'expired'));
            }
            OtpController::send_otp();
            $result = $this->usersDataMap( $user->id );
            $result[ 'token' ] = $user->createToken( $request->email )->plainTextToken;
            return $this->response($result, 300);

        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }


     /**
     * logout The User
     * @param Request $request
     * @return User
     */
    public function logout(Request $request)
    {
        try {

            $user = Auth::user();
            // Revoke all tokens...
            $user->tokens()->delete();
            $result = [];
            // Revoke a specific token...
           // $user->tokens()->where('id', $tokenId)->delete();
            return $this->response($result, 302);

        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }

     /**
     * changePassword The User
     * @param Request $request
     * @return User
     */
    public function changePassword(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'email' => 'required|email'
                ]
            );
            if($validate !== true )
            {
                return $validate;
            }   
            
            $result = [];
            return $this->response($result, 303);

        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }

     /**
     * forgetPassword The User
     * @param Request $request
     * @return User
     */
    public function forgetPassword(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'email' => 'required|email'
                ]
            );
            if($validate !== true )
            {
                return $validate;
            }   
            
            $result = [];
            return $this->response($result, 303);

        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }
    
     /**
     * optSend The User
     * @param Request $request
     * @return User
     */
    public function optSend()
    {
        try {
            $user = Auth::user();
            OtpController::send_otp();
            $result = $this->usersDataMap( $user->id );
            return $this->response($result, 306);
        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }
    
     /**
     * optConfirmed The User
     * @param Request $request
     * @return User
     */
    public function optConfirmed(Request $request)
    {
        try {
            $validate = $this->vallidateApi(
                $request,
                [
                    'opt_code' => 'required'
                ]
            );
            if($validate !== true )
            {
                return $validate;
            }   
            $matchOtp = UserOtpVerification::where(['user_id' => auth()->user()->id, 'otp' => $request->opt_code, 'otp_status' => 'pending']);
            if ($matchOtp->count()) {
                $matchOtp->update(array('otp_status' => 'verified'));
                $result = $this->usersDataMap( auth()->user()->id );
                return $this->response($result, 308);
            }    
            $result = [];
            return $this->response($result, 307);

        } catch (\Throwable $th) {
            return $this->response([
                'errors' => $th->getMessage(),
            ],500);
        }
    }
    
    
}
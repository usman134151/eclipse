<?php

namespace App\Http\Controllers\Tenant\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Tenant\Api\ApiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
                                'password' => 'required',
                                'device_name' => 'required',
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
                    'password' => 'required',
                    'device_name' => 'required',
                ]
            );
            if($validate !== true )
            {
                return $validate;
            }   

            if(!Auth::attempt($request->only(['email', 'password']))){
                return  $this->response([
                    'errors' => 'Email & Password does not match with our record.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();
            $result = $this->usersDataMap($user->id);
            $result['token'] = $user->createToken($request->device_name)->plainTextToken;
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
                    'email' => 'required|email',
                    'device_name' => 'required',
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
    
}
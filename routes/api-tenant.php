<?php

use App\Http\Controllers\Tenant\Api\AssignmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tenant\Api\AuthController;
use App\Http\Controllers\Tenant\Api\TestController;
use App\Http\Controllers\Tenant\Api\UsersController;
use App\Models\User;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

###### middleware('auth:sanctum')######
// Route::middleware('auth:sanctum')->controller(TestController::class)->group(function () {
//     Route::get('test', 'test');
// });


Route::group([
    'middleware' => ['tenant', PreventAccessFromCentralDomains::class], // See the middleware group in Http Kernel
    'as' => 'tenant.',
], function () {
    

    Route::controller(AuthController::class)->prefix('auth')->group(function () {
        Route::post('register', 'register');
        Route::post('login', 'login');
        Route::post('change/password', 'changePassword');
    });
    //middleware('auth:sanctum')
    Route::controller(UsersController::class)->prefix('user')->group(function () {
        Route::get('details', 'authUser');
    });

  

    Route::namespace('App\Http\Controllers\Tenant\Api')->prefix('provider')->group(function () {
        Route::controller(AssignmentController::class)->group(function () {
            Route::post('assignments', 'index');
            Route::post('assignment', 'show');
            Route::post('assignment/update_time', 'updateTime');
        });
        Route::controller(InvoiceController::class)->group(function () {
            Route::post('invoices', 'index');
            Route::post('reimbursement','reimbursements');
        });
        Route::controller(SettingController::class)->group(function () {
            Route::get('settings', 'index');
            Route::post('change/settings', 'update');
        });
    });

});
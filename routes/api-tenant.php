<?php
use Illuminate\Support\Facades\Route;
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

Route::group([
    'middleware' => ['tenant', PreventAccessFromCentralDomains::class], // See the middleware group in Http Kernel
    'as' => 'tenant.',
], function () {
    

    Route::namespace('App\Http\Controllers\Tenant\Api')->controller(AuthController::class)->prefix('auth')->group(function () {
        Route::post('register', 'register');
        Route::post('login', 'login');
        Route::post('change/password', 'changePassword');
    });
    //middleware('auth:sanctum')
    Route::namespace('App\Http\Controllers\Tenant\Api')->controller(UsersController::class)->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('details', 'authUser');
        });
        Route::prefix('users')->group(function () {
            Route::get('notifications', 'notifications');
        });
        Route::prefix('provider')->group(function () {
            Route::post('rates', 'providerRates');
        });

    });

  

    Route::namespace('App\Http\Controllers\Tenant\Api')->prefix('provider')->group(function () {
        Route::controller(AssignmentController::class)->group(function () {
            Route::post('assignments', 'index');
            Route::post('assignment', 'show');
            Route::post('assignment/update_time', 'updateTime');
            Route::post('assignment/check_in_details', 'checkInDetails');
        });
        Route::controller(InvoiceController::class)->group(function () {
            Route::get('invoices', 'index');
        });
        Route::controller(InviteController::class)->group(function () {
            Route::post('invite/update', 'update');
        });
        Route::controller(ReimbursementController::class)->prefix('reimbursement')->group(function () {
            Route::get('create', 'create');
            Route::post('store', 'store');
        });
        Route::controller(SettingController::class)->group(function () {
            Route::get('settings', 'index');
            Route::post('change/settings', 'update');
        });

    });

});
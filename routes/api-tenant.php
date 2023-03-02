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
        Route::post('forget/password', 'forgetPassword');
        Route::post('change/password', 'changePassword');
        Route::middleware('auth:sanctum')->get('opt/resend', 'optSend');
        Route::middleware('auth:sanctum')->post('opt/confirmed', 'optConfirmed');
        Route::middleware('auth:sanctum')->get('logout','logout');
    });
    Route::middleware('auth:sanctum')->namespace('App\Http\Controllers\Tenant\Api')->controller(UsersController::class)->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('details', 'authUser');
            Route::post('details', 'show');
            Route::post('profile_image_store','storeOrUpdateProfileImage');
            Route::post('calendar','authUserCalander');
            Route::post('add_user_address','storeUserAddress');
        });
        Route::prefix('users')->group(function () {
            Route::get('notifications', 'notifications');
            Route::get('read_all_notifications', 'readAllNotification');
            Route::get('/profile', 'index');
        });
        Route::prefix('provider')->group(function () {
            Route::post('rates', 'providerRates');
            Route::post('payment_method', 'providerPaymentMethod');
        });

    });

    Route::middleware('auth:sanctum')->namespace('App\Http\Controllers\Tenant\Api')->controller(DocumentController::class)->group(function () {
        Route::prefix('user')->group(function () {
            Route::post('upload_user_document', 'store');
        });
    
    });    
    /**
     *  Chat Module 
     *  Dev: Sakhawat Kamran
     * 
     **/
    Route::middleware('auth:sanctum')->namespace('App\Http\Controllers\Tenant\Api')->controller(ChatController::class)->group(function () {
        Route::prefix('chat')->group(function () {
            Route::get(
                'rooms' , 'index'
            );
            Route::post(
                'inbox' , 'inbox'
            );
            Route::post(
                'chat_message_sync' , 'store'
            );
        });
    });        
    Route::middleware('auth:sanctum')->namespace('App\Http\Controllers\Tenant\Api')->prefix('run')->group(function () {
        Route::controller(TestController::class)->group(function () {
            Route::get('test', 'test');
        });
    });    
    Route::middleware('auth:sanctum')->namespace('App\Http\Controllers\Tenant\Api')->prefix('provider')->group(function () {
        Route::controller(AssignmentController::class)->group(function () {
            Route::post('assignments', 'index');
            Route::post('assignment', 'show');
            Route::post('assignment/update_time', 'updateTime');
            Route::post('assignment/check_in_out', 'checkInOutDetails');
            Route::post('assignment/check_in_details', 'checkInDetails');
            Route::post('assignment/check_in_submit', 'checkInStore');
            #### STEP_1 ####
            Route::post('assignment/check_out_detail', 'checkOutDetails');
            #### STEP_2 ####
            Route::post('assignment/check_out_submit', 'storeCheckIn');
            #### STEP_3 ####
            Route::post('assignment/check_out_form_submit', 'storeCheckOutForm');
            #### STEP_4 ####
            Route::post('assignment/check_out_submit_note', 'storeCheckOutNotes');
            #### STEP_5 ####
            Route::post('assignment/check_out_rating_submit', 'storeCheckOutRating');
            Route::post('assignment/set_availability', 'storeAvailability');
            Route::post('assignment/location_status', 'setLocationStatus');
            
        });
        Route::controller(InvoiceController::class)->group(function () {
            Route::get('invoices', 'index');
            Route::prefix('invoice')->group(function () {
                Route::post('create', 'create');
            });
            Route::post('invoice_submit','store');
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
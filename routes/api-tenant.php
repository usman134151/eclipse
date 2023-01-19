<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tenant\Api\AuthController;
use App\Http\Controllers\Tenant\Api\TestController;
use App\Http\Controllers\Tenant\Api\UsersController;

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

Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
});
Route::middleware('auth:sanctum')->controller(UsersController::class)->prefix('user')->group(function () {
    Route::get('details', 'authUser');
});
###### middleware('auth:sanctum')######
Route::namespace('App\Http\Controllers\Tenant\Api')->prefix('provider')->group(function () {
    Route::controller(AssignmentController::class)->group(function () {
        Route::post('assignments', 'index');
        Route::post('assignment', 'show');
    });
    Route::controller(InvoiceController::class)->group(function () {
        Route::post('invoices', 'index');
        Route::post('reimbursement','reimbursements');
    });
});
Route::middleware('auth:sanctum')->controller(TestController::class)->group(function () {
    Route::get('test', 'test');
});
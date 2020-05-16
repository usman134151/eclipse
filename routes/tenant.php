<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider
| with the namespace configured in your tenancy config.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::group([
    'middleware' => ['web', InitializeTenancyBySubdomain::class],
], function () {
    Route::get('/', function () {
        return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
    });

    Auth::routes();
    Route::group([
        'middleware' => ['auth']
    ], function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });
});

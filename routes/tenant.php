<?php

use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Features\UserImpersonation;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;

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
    'middleware' => ['web', PreventAccessFromCentralDomains::class, InitializeTenancyByDomainOrSubdomain::class],
], function () {
    Route::get('/', function () {
        return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
    });

    Route::get('/impersonate/{token}', function ($token) {
        return UserImpersonation::makeResponse($token);
    })->name('tenant.impersonate');

    Auth::routes();
    Route::middleware('auth')->group(function () {
        Route::get('/home', 'HomeController@index')->name('tenant.home');
    });
});

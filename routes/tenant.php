<?php

use App\Http\Middleware\OwnerOnly;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSubscription;
use Stancl\Tenancy\Features\UserImpersonation;
use App\Http\Controllers\Tenant as Controllers;
use App\Http\Controllers\Tenant\Auth\OtpController;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

Route::group([
    'middleware' => ['tenant', PreventAccessFromCentralDomains::class], // See the middleware group in Http Kernel
    'as' => 'tenant.',
], function () {

    Route::redirect('/', '/home');

    Route::get('/impersonate/{token}', function ($token) {
        return UserImpersonation::makeResponse($token);
    })->name('impersonate');

    Route::post('/ploi/webhook/certificateIssued', [Controllers\PloiWebhookController::class, 'certificateIssued'])->name('ploi.certificate.issued');
    Route::post('/ploi/webhook/certificateRevoked', [Controllers\PloiWebhookController::class, 'certificateRevoked'])->name('ploi.certificate.revoked');

    Route::middleware(['auth','otpcheck', CheckSubscription::class])->group(function () {
        Route::redirect('/home', '/dashboard')->name('home');

        Route::view('/dashboard', 'tenant/dashboard/index');
        
        // Admin Setting Routes
        Route::view('/admin/specialization', 'tenant/common/specialization', ["showForm"=>false]);
        Route::view('/admin/specialization/create', 'tenant/common/specialization', ["showForm"=>true]);

        Route::view('/admin/industry', 'tenant/common/industry', ["showForm"=>false]);
        Route::view('/admin/industry/create', 'tenant/common/industry', ["showForm"=>true]);

        Route::view('/admin/accommodation', 'tenant/common/accommodation', ["showForm"=>false]);
        Route::view('/admin/accommodation/create', 'tenant/common/accommodation', ["showForm"=>true]);
        
        Route::view('/admin/coupon', 'tenant/common/coupon', ["showForm"=>false]);
        Route::view('/admin/coupon/create', 'tenant/common/coupon', ["showForm"=>true]);

        Route::view('/admin/customize-form', 'tenant/common/saved-forms', ["showForm"=>false]);
        Route::view('/admin/customize-form/create', 'tenant/common/saved-forms', ["showForm"=>true]);

        Route::view('/admin/provider', 'tenant/common/provider', ["showForm"=>false]);
        Route::view('/admin/provider/create', 'tenant/common/provider', ["showForm"=>true]);

        Route::view('/admin/customer', 'tenant/common/customer', ["showForm"=>false]);
        Route::view('/admin/customer/create', 'tenant/common/customer', ["showForm"=>true]);

        Route::view('/admin/change-password', 'tenant/settings/change-password', ["showForm"=>false]);
        // End of Admin Setting Routes


        //default view 
        Route::get('/settings/user', [Controllers\UserSettingsController::class, 'show'])->name('settings.user');
        Route::post('/settings/user/personal', [Controllers\UserSettingsController::class, 'personal'])->name('settings.user.personal');
        Route::post('/settings/user/password', [Controllers\UserSettingsController::class, 'password'])->name('settings.user.password');

        Route::middleware(OwnerOnly::class)->group(function () {
            Route::get('/settings/application', [Controllers\ApplicationSettingsController::class, 'show'])->name('settings.application');
            Route::post('/settings/application/configuration', [Controllers\ApplicationSettingsController::class, 'storeConfiguration'])->name('settings.application.configuration');
            Route::get('/settings/application/invoice/{id}/download', Controllers\DownloadInvoiceController::class)->name('invoice.download');
        });
    });

    Route::namespace('App\\Http\\Controllers\\Tenant')->group(function () {
        Auth::routes();
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('otpverify', [OtpController::class, 'loadOtpView'])->name('otpverify');
        Route::get('resendotp', [OtpController::class, 'resendOtpView'])->name('resendotp');
        Route::post('otpverify', [OtpController::class, 'verifyOtp'])->name('submit.otpverify');
    });
});

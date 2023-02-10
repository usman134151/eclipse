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
        Route::redirect('/home', '/admin/dashboard')->name('home');

        Route::view('/admin/dashboard', 'tenant/dashboard/index');
        
        // All Admin Routes
        Route::view('/admin/tenants', 'tenant/admin/tenants', ["showForm"=>false]);
        Route::view('/admin/chat', 'tenant/admin/chat');

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
        

        // Admin Provider Routes
        Route::view('/admin/provider', 'tenant/common/provider', ["showForm"=>false]);
        Route::view('/admin/provider/create', 'tenant/common/provider', ["showForm"=>true]);
        Route::view('/admin/teams', 'tenant/admin/teams', ["showForm"=>false]);
        Route::view('/admin/reimbursement', 'tenant/admin/provider/reimbursement', ["showForm"=>false]);
        Route::view('/admin/provider/remittances', 'tenant/admin/provider/remittances', ["showForm"=>false]);
        Route::view('/admin/provider/pending-payments', 'tenant/admin/provider/pending-payments', ["showForm"=>false]);
        Route::view('/admin/deactivated-provider', 'tenant/admin/deactivated-provider', ["showForm"=>false]);
        Route::view('/admin/provider-applications', 'tenant/admin/provider-applications', ["showForm"=>false]);
        Route::view('/admin/provider-screenings', 'tenant/admin/provider-screenings', ["showForm"=>false]);
        // End of Admin Provider Routes

        // Admin Customer Routes
        Route::view('/admin/customer', 'tenant/common/customer', ["showForm"=>false]);
        Route::view('/admin/customer/create', 'tenant/common/customer', ["showForm"=>true]);
        Route::view('/admin/company', 'tenant/admin/company', ["showForm"=>false]);
        Route::view('/admin/company/create', 'tenant/admin/company', ["showForm"=>true]);
        Route::view('/admin/deactivated-customer', 'tenant/admin/deactivated-customer', ["showForm"=>false]);
        Route::view('/admin/draft-invoices', 'tenant/admin/draft-invoices', ["showForm"=>false]);
        Route::view('/admin/customer-invoices', 'tenant/admin/customer-invoices', ["showForm"=>false]);
        // End of Admin Customer Routes

        // Admin Department Routes
        Route::view('/admin/department', 'tenant/common/department', ["showForm"=>false]);
        Route::view('/admin/department/create', 'tenant/common/department', ["showForm"=>true]);
        // End of Admin Department Routes

        // Admin Staff Routes
        Route::view('/admin/admin-staff', 'tenant/admin/staff/admin-staff', ["showForm"=>false]);
        Route::view('/admin/admin-staff/create', 'tenant/admin/staff/admin-staff', ["showForm"=>true]);
        Route::view('/admin/deactivated-admin-staff', 'tenant/admin/staff/deactivated-admin-staff', ["showForm"=>true]);
        // End of Admin Staff Routes

        // Admin Setting Routes
        Route::view('/admin/business-setup', 'tenant/settings/business-setup', ["showForm"=>false]);
        Route::view('/admin/settings', 'tenant/settings/notification-configuration', ["showForm"=>false]);
        Route::view('/admin/settings/create', 'tenant/settings/notification-configuration', ["showForm"=>true]);
        Route::view('/admin/profile', 'tenant/settings/profile', ["showForm"=>false]);
        Route::view('/admin/templates', 'tenant/settings/email-templates', ["showForm"=>false]);
        Route::view('/admin/sms-templates', 'tenant/settings/sms-templates', ["showForm"=>false]);
        Route::view('/admin/change-password', 'tenant/settings/change-password', ["showForm"=>false]);
        // End of Admin Setting Routes

        // Admin Booking Routes
        Route::view('/admin/booknow/create', 'tenant/admin/bookings/booknow', ["showForm"=>true]);
        Route::view('/admin/bookings/today', 'tenant/admin/bookings/today', ["showForm"=>false]);
        Route::view('/admin/bookings/upcoming', 'tenant/admin/bookings/upcoming', ["showForm"=>false]);
        Route::view('/admin/bookings/past', 'tenant/admin/bookings/past', ["showForm"=>false]);
        Route::view('/admin/bookings/pending-approval', 'tenant/admin/bookings/pending-approval', ["showForm"=>false]);
        Route::view('/admin/bookings/drafts', 'tenant/admin/bookings/drafts', ["showForm"=>false]);
        Route::view('/admin/bookings/unassigned', 'tenant/admin/bookings/unassigned', ["showForm"=>false]);
        Route::view('/admin/bookings/invitations', 'tenant/admin/bookings/invitations', ["showForm"=>false]);
        // End of Admin Booking Routes

        // Admin Reports
        Route::view('/admin/reports', 'tenant/admin/reports', ["showForm"=>false]);

        Route::view('/admin/leads', 'tenant/admin/leads', ["showForm"=>false]);
        Route::view('/admin/quotes', 'tenant/admin/quotes', ["showForm"=>false]);

        Route::view('/admin/system-logs', 'tenant/settings/system-logs', ["showForm"=>false]);
        Route::view('/admin/notifications', 'tenant/common/notifications', ["showForm"=>false]);

        Route::view('/admin/accommodation/service-category/{id}', 'tenant/admin/accommodation/service-category', ["showForm"=>false]);
        Route::view('/admin/accommodation/service-category/create/{id}', 'tenant/admin/accommodation/service-category', ["showForm"=>true]);

        Route::view('/admin/referral-setting', 'tenant/admin/referral-setting', ["showForm"=>false]);

        Route::view('/admin/quickbook', 'tenant/admin/quickbook', ["showForm"=>false]);
        Route::view('/admin/quickbook-setup', 'tenant/admin/quickbook', ["showForm"=>true]);

        Route::view('/admin/stripe-setup', 'tenant/admin/stripe-setup', ["showForm"=>false]);

        Route::view('/admin/jira-status', 'tenant/admin/jira-status', ["showForm"=>false]);
        // End of All Admin Routes

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

<?php

use App\Http\Middleware\OwnerOnly;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSubscription;
use Stancl\Tenancy\Features\UserImpersonation;
use App\Http\Controllers\Tenant as Controllers;
use App\Http\Controllers\Tenant\Auth\ForgotPasswordController;
use App\Http\Controllers\Tenant\Auth\OtpController;
use App\Http\Controllers\Tenant\Auth\LoginController;
use App\Http\Controllers\Tenant\Common\BrowserHandleController;
use App\Http\Middleware\DecryptRouteParamater;
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

	Route::middleware(['auth', 'otpcheck', CheckSubscription::class])->group(function () {

		// Admin Routes
		Route::middleware(['role:admin'])->group(function () {
			// All Admin Routes
			Route::redirect('/home', '/admin/dashboard')->name('home');

			Route::view('/admin/dashboard', 'tenant/dashboard/index');

			Route::view('/admin/tenants', 'tenant/admin/tenants', ["showForm"=>false]);

            //updated by Zia - 3-10-23 - commented chat route because it will take from chatify config
           // Route::view('/admin/chat', 'tenant/admin/chat');

			Route::view('/admin/all-specialization', 'tenant/common/specialization', ["showForm"=>false]);
			Route::view('/admin/specialization/create-specialization', 'tenant/common/specialization', ["showForm"=>true]);

			Route::view('/admin/all-tags', 'tenant/common/tags', ["showForm"=>false]);
			Route::view('/admin/tags/create-tags', 'tenant/common/tags', ["showForm"=>true]);

			Route::view('/admin/all-industry', 'tenant/common/industry', ["showForm"=>false]);
			Route::view('/admin/industry/create-industry', 'tenant/common/industry', ["showForm"=>true]);

			Route::view('/admin/all-accommodation', 'tenant/common/accommodation', ["showForm"=>false]);
			Route::view('/admin/accommodation/create-accommodation', 'tenant/common/accommodation', ["showForm"=>true]);

			Route::view('/admin/all-coupon', 'tenant/common/coupon', ["showForm"=>false]);
			Route::view('/admin/coupon/create-coupon', 'tenant/common/coupon', ["showForm"=>true]);

			Route::view('/admin/customize-form', 'tenant/common/saved-forms', ["showForm"=>false]);
			Route::view('/admin/customize-form/create-form', 'tenant/common/saved-forms', ["showForm"=>true]);
			Route::view('/admin/customize-form/edit-form/{formID}', 'tenant/common/saved-forms', ["showForm" => true	]);

			Route::view('/admin/provider', 'tenant/common/provider', ["showForm"=>false, 'showProfile' => false, "status"=>1]);
			Route::view('/admin/provider/create-provider', 'tenant/common/provider', ["showForm"=>true, 'showProfile' => false, 'status'=>1])->name('create-provider');
			Route::view('/admin/teams', 'tenant/admin/teams', ["showForm"=>false]);
			Route::view('/admin/teams/create-team', 'tenant/admin/teams', ["showForm"=>true]);
			Route::view('/admin/reimbursement', 'tenant/admin/provider/reimbursement', ["showForm"=>false]);
			Route::view('/admin/provider/remittances', 'tenant/admin/provider/remittances', ["showForm"=>false]);
			Route::view('/admin/provider/pending-payments', 'tenant/admin/provider/pending-payments', ["showForm"=>false]);
			Route::view('/admin/deactivated-provider', 'tenant/common/provider', ["showForm"=>false, 'showProfile' => false,'status'=>0]);
			Route::view('/admin/provider-applications', 'tenant/admin/provider-applications', ["showForm"=>false]);
			Route::view('/admin/provider-screenings', 'tenant/admin/provider-screenings', ["showForm"=>false]);

			Route::view('/admin/provider/edit-provider/{providerID}', 'tenant/common/provider', ["showForm" => true,'showProfile'=>false,'status'=>1])->name('provider-edit');
			Route::view('/admin/provider/profile/{providerID}', 'tenant/common/provider', ["showForm" => false, 'showProfile' => true, 'status' => 1])->name('provider-profile');


			Route::view('/admin/customer', 'tenant/common/customer', ["showForm"=>false, 'showProfile' => false, 'status'=>1]);
			Route::view('/admin/deactivated-customer', 'tenant/common/customer', ["showForm" => false, 'showProfile' => false, "status" => 0]);
			Route::view('/admin/customer/create-customer', 'tenant/common/customer', ["showForm"=>true, 'showProfile' => false, "status"=>1]);
			Route::view('/admin/customer/edit-customer/{customerID}', 'tenant/common/customer', ["showForm" => true,'showProfile' => false, 'status'=>1])->name('customer-edit')->middleware(DecryptRouteParamater::class);
			Route::view('/admin/customer/profile/{customerID}', 'tenant/common/customer', ["showForm" => false,'showProfile'=>true, 'status' => 1])->name('customer-profile')->middleware(DecryptRouteParamater::class);

			Route::view('/admin/company', 'tenant/admin/company', ["showForm"=>false, "showProfile" => false]);
			Route::view('/admin/company/create-company', 'tenant/admin/company', ["showForm"=>true, "showProfile" => false])->name('company-create');
			Route::view('/admin/company/edit-company/{companyID}', 'tenant/admin/company', ["showForm" => true, "showProfile" => false])->name('company-edit')->middleware(DecryptRouteParamater::class);
			Route::view('/admin/company/profile/{companyID}', 'tenant/admin/company', ["showForm" => false, "showProfile" => true])->name('company-profile')->middleware(DecryptRouteParamater::class);


			Route::view('/admin/draft-invoices', 'tenant/admin/draft-invoices', ["showForm"=>false]);
			Route::view('/admin/customer-invoices', 'tenant/common/customer-invoices', ["showForm"=>false]);

			// Admin Department Routes
			Route::view('/admin/department/{companyID}', 'tenant/common/department', ["showForm"=>false,'status'=>1]);
			Route::view('/admin/department/create-department/{companyID}', 'tenant/common/department', ["showForm"=>true, 'status' => 1])->middleware(DecryptRouteParamater::class);
			Route::view('/admin/department/edit-department/{departmentID}', 'tenant/common/department', ["showForm" => true, 'status' => 1]);
			Route::view('/admin/department/profile/{departmentID}', 'tenant/common/department', ["showForm" => false, "showProfile"=>true , 'status' => 1])->name('department-profile');

			// End of Admin Department Routes

			// Admin Staff Routes
			Route::view('/admin/admin-staff', 'tenant/admin/staff/admin-staff', ["showForm"=>false, "showProfile" => 0]);
			Route::view('/admin/admin-staff/create-staff', 'tenant/admin/staff/admin-staff', ["showForm"=>true, "showProfile" => 0]);
			Route::view('/admin/admin-staff/edit-staff/{userID}', 'tenant/admin/staff/admin-staff', ["showForm" => true, "showProfile" => 0])->name('edit-staff')->middleware(DecryptRouteParamater::class);
			Route::view('/admin/admin-staff/profile/{userID}', 'tenant/admin/staff/admin-staff', ["showForm" => false, "showProfile" => 1])->name('profile-staff')->middleware(DecryptRouteParamater::class);

			Route::view('/admin/admin-team', 'tenant/admin/team/admin-team', ["showForm"=>false]);
			Route::view('/admin/admin-team/create-admin-team', 'tenant/admin/team/admin-team', ["showForm"=>true]);
			Route::view('/admin/role-permission', 'tenant/admin/role-permission', ["showForm"=>false]);
			Route::view('/admin/role-permission/create', 'tenant/admin/role-permission', ["showForm"=>true]);
			Route::view('/admin/deactivated-admin-staff', 'tenant/admin/staff/deactivated-admin-staff', ["showForm"=>true]);
			// End of Admin Staff Routes

			// Admin Setting Routes
			Route::view('/admin/business-setup', 'tenant/settings/business-setup', ["showForm"=>false]);
			Route::view('/admin/settings', 'tenant/settings/notification-configuration', ["showForm"=>false,'title'=>'Email Notifications',"type"=>"1"]);
            Route::view('/admin/settings/create-notifications', 'tenant/settings/notification-configuration', ["showForm"=>true,'title'=>'Email Notifications',"type"=>"1"]);

			Route::view('/admin/settings/create', 'tenant/settings/notification-configuration', ["showForm"=>true,'title'=>'Email Notifications',"type"=>"1"]);
			Route::view('/admin/profile', 'tenant/settings/profile', ["showForm"=>false]);
			Route::view('/admin/templates', 'tenant/settings/notification-configuration', ["showForm"=>false,'title'=>'System Notifications',"type"=>"2"]);
			Route::view('/admin/sms-templates', 'tenant/settings/notification-configuration', ["showForm"=>false,'title'=>'SMS Notifications',"type"=>"3"]);
			Route::view('/admin/change-password', 'tenant/settings/change-password');
			Route::view('/admin/credential-manager', 'tenant/settings/credential-manager', ["showForm" => false]);
			Route::view('/admin/credential/create-credential', 'tenant/settings/credential-manager', ["showForm" => true]);

			Route::view('/admin/setup-values', 'tenant/settings/setup-values', ["showForm"=>false]);
			Route::view('/admin/setup/create-setup', 'tenant/settings/setup-values', ["showForm"=>true]);
			// End of Admin Setting Routes

			// Admin Booking Routes
			Route::view('/admin/booknow/create', 'tenant/common/bookings/booknow', ["showForm"=>true]);
			Route::view('/admin/booknow/edit-booking/{bookingID}', 'tenant/common/bookings/booknow', ["showForm" => true])->name('booking-edit')->middleware(DecryptRouteParamater::class);
			Route::view('/admin/bookings/view-booking/{bookingID}', 'tenant/common/bookings/booking-list', ["bookingType" => "profile", 'showBookingDetails'=>true])->name('booking-view')->middleware(DecryptRouteParamater::class);

			Route::view('/admin/bookings/today', 'tenant/common/bookings/booking-list', ["bookingType"=>"Today's"]);
			Route::view('/admin/bookings/upcoming', 'tenant/common/bookings/booking-list', ["bookingType"=>"Upcoming"]);
			Route::view('/admin/bookings/past', 'tenant/common/bookings/booking-list', ["bookingType"=>"Past"]);
			Route::view('/admin/bookings/pending-approval', 'tenant/common/bookings/booking-list', ["bookingType"=>"Pending Approval"]);
			Route::view('/admin/bookings/pending-closeout', 'tenant/common/bookings/booking-list', ["bookingType" => "Pending Close-out"]);

			Route::view('/admin/bookings/drafts', 'tenant/common/bookings/booking-list', ["bookingType"=>"Draft"]);
			Route::view('/admin/bookings/unassigned', 'tenant/common/bookings/booking-list', ["bookingType"=>"Unassigned"]);
			Route::view('/admin/bookings/invitations', 'tenant/common/bookings/booking-list', ["bookingType"=>"Invitations"]);
			// End of Admin Booking Routes

			// Admin Reports
			Route::view('/admin/reports', 'tenant/admin/reports', ["showForm"=>false]);

			Route::view('/admin/leads', 'tenant/admin/leads', ["showForm"=>false]);
			Route::view('/admin/quotes', 'tenant/admin/quotes', ["showForm"=>false]);

			Route::view('/admin/system-logs', 'tenant/settings/system-logs', ["showForm"=>false]);
			Route::view('/admin/notifications', 'tenant/common/notifications', ["showForm"=>false]);

			Route::view('/admin/accommodation/all-services', 'tenant/admin/accommodation/service-category', ["showForm"=>false])->where('id', '[^//]+');
			Route::view('/admin/accommodation/create-service', 'tenant/admin/accommodation/service-category', ["showForm"=>true]);

			Route::view('/admin/referral-setting', 'tenant/admin/referral-setting', ["showForm"=>false]);

			Route::view('/admin/quickbook-connect', 'tenant/admin/quickbook', ["showForm"=>false]);
			Route::view('/admin/quickbook-setup', 'tenant/admin/quickbook', ["showForm"=>true]);

			Route::view('/admin/stripe-setup', 'tenant/admin/stripe-setup', ["showForm"=>false]);

			Route::view('/admin/jira-status', 'tenant/admin/jira-status', ["showForm"=>false]);
			// End of All Admin Routes
		});

		// Provider Routes
		Route::middleware(['role:provider'])->group(function () {
			Route::prefix('provider')->namespace('Provider')->group(function(){
				Route::view('/dashboard', 'tenant/provider/dashboard');

                //updated by Zia - 3-10-23 - commented chat route because it will take from chatify config
//				Route::view('/chat', 'tenant/provider/chat');
				Route::view('/edit-profile', 'tenant/provider/edit-profile');

				Route::view('/set-availability', 'tenant/provider/manage-availability');

				// Provider Booking Routes
				Route::view('/bookings/today', 'tenant/common/bookings/booking-list', ["bookingType"=>"Today's"]);
				Route::view('/bookings/upcoming', 'tenant/common/bookings/booking-list', ["bookingType"=>"Upcoming"]);
				Route::view('/bookings/past', 'tenant/common/bookings/booking-list', ["bookingType"=>"Past"]);
                Route::view('/bookings/active', 'tenant/common/bookings/booking-list', ["bookingType"=>"Active"]);
                Route::view('/bookings/cancelled', 'tenant/common/bookings/booking-list', ["bookingType"=>"Cancelled"]);
				Route::view('/bookings/unassigned', 'tenant/common/bookings/booking-list', ["bookingType"=>"Unassigned"]);
				Route::view('/bookings/invitations', 'tenant/common/bookings/booking-list', ["bookingType"=>"Invitations"]);

				// Provider Payment Routes
				Route::view('/reimbursement', 'tenant/provider/reimbursement');
				Route::view('/remittances', 'tenant/provider/remittances');
				Route::view('/draft-invoices', 'tenant/provider/draft-invoices');

				Route::view('/profile', 'tenant/provider/profile');

				Route::view('/drive', 'tenant/provider/drive');
				Route::view('/system-logs', 'tenant/provider/system-logs');

				Route::view('/settings', 'tenant/settings/notifications');
				Route::view('/change-password', 'tenant/provider/change-password');
				Route::view('/payment-preferences', 'tenant/provider/payment-preferences');
			});
		});

		// Customer Routes
		Route::middleware(['role:customer'])->group(function () {
			Route::prefix('customer')->namespace('Customer')->group(function(){
				Route::view('/dashboard', 'tenant/customer/dashboard');

                //updated by Zia - 3-10-23 - commented chat route because it will take from chatify config
//                Route::view('/chat', 'tenant/customer/chat');

                Route::view('booking/booknow', 'tenant/customer/booking/service-request');
                Route::view('/pending-reviews', 'tenant/customer/booking/booking-list', ["bookingType" => "Pending Approval"]);

                Route::view('/booking/today', 'tenant/customer/booking/booking-list', ["bookingType"=>"Today's"]);
				Route::view('/booking/upcoming', 'tenant/customer/booking/booking-list', ["bookingType"=>"Upcoming"]);
				Route::view('/booking/past', 'tenant/customer/booking/booking-list', ["bookingType"=>"Past"]);
                Route::view('/booking/draft', 'tenant/customer/booking/booking-list', ["bookingType"=>"Draft"]);
                Route::view('/invoices', 'tenant/customer/invoices');
                Route::view('/payments-receipts', 'tenant/customer/payment-receipts');


				Route::view('booknow/create', 'tenant/common/bookings/booknow', ["showForm" => true]);
				Route::view('/booknow/edit-booking/{bookingID}', 'tenant/common/bookings/booknow', ["showForm" => true])->name('customer-booking-edit')->middleware(DecryptRouteParamater::class);
				Route::view('/bookings/view-booking/{bookingID}', 'tenant/common/bookings/booking-list', ["bookingType" => "profile", 'showBookingDetails' => true])->name('customer-booking-view')->middleware(DecryptRouteParamater::class);


				Route::view('/departments/{companyID}','tenant/customer/departments')->middleware(DecryptRouteParamater::class);
				Route::view('/department/create-department/{companyID}', 'tenant/common/department', ["showForm" => true, 'status' => 1])->middleware(DecryptRouteParamater::class);
				Route::view('/department/edit-department/{departmentID}', 'tenant/common/department', ["showForm" => true, 'status' => 1]);
				Route::view('/department/profile/{departmentID}', 'tenant/common/department', ["showForm" => false, "showProfile" => true, 'status' => 1])->name('customer-department-profile');

				Route::view('/department-profile/{companyID}', 'tenant/customer/department-profile')->middleware(DecryptRouteParamater::class);

                Route::view('/add-team', 'tenant/customer/add-team');
				Route::view('/edit-team/{customerID}', 'tenant/customer/add-team')->name('customer-edit-team')->middleware(DecryptRouteParamater::class);

				Route::view('/team-members', 'tenant/customer/team-members');

				Route::view('/payments-setting', 'tenant/customer/payment-setting');
                Route::view('/myprofile', 'tenant/customer/myprofile');
				Route::view('/edit-profile', 'tenant/customer/edit-profile');

                Route::view('/company-profile', 'tenant/customer/company-profile');
                Route::view('/system-logs', 'tenant/customer/system-logs');
				Route::view('/reports', 'tenant/customer/reports');
				Route::view('/jira-status', 'tenant/customer/jira-status');

                Route::view('/settings', 'tenant/settings/notifications');
                Route::view('/change-password', 'tenant/customer/change-password');
			  });
		});

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
		Route::post('/saveBrowser', [BrowserHandleController::class,'store']);
	});

	Route::any('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('forgot.password');
	Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
	Route::post('/reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});

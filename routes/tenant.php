<?php

use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Features\UserImpersonation;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;

Route::group([
    'middleware' => ['web', PreventAccessFromCentralDomains::class, InitializeTenancyByDomainOrSubdomain::class],
    'as' => 'tenant.',
], function () {
    Route::redirect('/', '/home');

    Route::get('/impersonate/{token}', function ($token) {
        return UserImpersonation::makeResponse($token);
    })->name('impersonate');

    Auth::routes();
    Route::middleware('auth')->group(function () {
        Route::redirect('/home', '/posts')->name('home');

        Route::get('/posts', 'PostController@index')->name('posts.index');
        Route::post('/posts', 'PostController@store')->name('posts.store');
        Route::get('/posts/create', 'PostController@create')->name('posts.create');
        Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

        Route::get('/settings/user', 'UserSettingsController@show')->name('settings.user');
        Route::post('/settings/user/personal', 'UserSettingsController@personal')->name('settings.user.personal');
        Route::post('/settings/user/password', 'UserSettingsController@password')->name('settings.user.password');
    });
});

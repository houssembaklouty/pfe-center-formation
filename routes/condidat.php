<?php

Route::group(['namespace' => 'Condidat'], function() {
    // Dashboard
    Route::get('/', 'HomeController@index')->name('condidat.home');

    Route::group(['as' => 'condidat.', 'middleware' => 'condidat.auth'], function() {

        Route::resource('formations', 'FormationController');
    });

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('condidat.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('condidat.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('condidat.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Reset Password
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('condidat.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('condidat.password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('condidat.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('condidat.password.update');

    // Confirm Password
    Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('condidat.password.confirm');
    Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

    // Verify Email
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('condidat.verification.notice');
    // Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('condidat.verification.verify');
    // Route::post('email/resend', 'Auth\VerificationController@resend')->name('condidat.verification.resend');
});

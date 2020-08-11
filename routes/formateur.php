<?php

Route::group(['namespace' => 'Formateur'], function() {
    // Dashboard
    Route::get('/', 'HomeController@index')->name('formateur.home');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('formateur.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('formateur.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('formateur.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Reset Password
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('formateur.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('formateur.password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('formateur.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('formateur.password.update');

    // Confirm Password
    Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('formateur.password.confirm');
    Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

    // Verify Email
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('formateur.verification.notice');
    // Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('formateur.verification.verify');
    // Route::post('email/resend', 'Auth\VerificationController@resend')->name('formateur.verification.resend');
});

<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'condidat.auth' => \App\Http\Middleware\RedirectIfNotCondidat::class,
        'condidat.guest' => \App\Http\Middleware\RedirectIfCondidat::class,
        // 'condidat.verified' => \App\Http\Middleware\EnsureCondidatEmailIsVerified::class,
        // 'condidat.password.confirm' => \App\Http\Middleware\RequireCondidatPassword::class,
        'formateur.auth' => \App\Http\Middleware\RedirectIfNotFormateur::class,
        'formateur.guest' => \App\Http\Middleware\RedirectIfFormateur::class,
        // 'formateur.verified' => \App\Http\Middleware\EnsureFormateurEmailIsVerified::class,
        // 'formateur.password.confirm' => \App\Http\Middleware\RequireFormateurPassword::class,
        'client.auth' => \App\Http\Middleware\RedirectIfNotClient::class,
        'client.guest' => \App\Http\Middleware\RedirectIfClient::class,
        // 'client.verified' => \App\Http\Middleware\EnsureClientEmailIsVerified::class,
        // 'client.password.confirm' => \App\Http\Middleware\RequireClientPassword::class,
        'jobeur.auth' => \App\Http\Middleware\RedirectIfNotJobeur::class,
        'jobeur.guest' => \App\Http\Middleware\RedirectIfJobeur::class,
        // 'jobeur.verified' => \App\Http\Middleware\EnsureJobeurEmailIsVerified::class,
        // 'jobeur.password.confirm' => \App\Http\Middleware\RequireJobeurPassword::class,
        'admin.auth' => \App\Http\Middleware\RedirectIfNotAdmin::class,
        'admin.guest' => \App\Http\Middleware\RedirectIfAdmin::class,
        // 'admin.verified' => \App\Http\Middleware\EnsureAdminEmailIsVerified::class,
        // 'admin.password.confirm' => \App\Http\Middleware\RequireAdminPassword::class,
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}

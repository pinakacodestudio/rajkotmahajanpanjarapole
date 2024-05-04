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
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
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
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
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
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'adminUser'=>\App\Http\Middleware\adminUser::class,
        'editcustomer'=>\App\Http\Middleware\editcustomer::class,
        'viewcustomer'=>\App\Http\Middleware\viewcustomer::class,
        'vieworder'=>\App\Http\Middleware\vieworder::class,
        'editorder'=>\App\Http\Middleware\editorder::class,
        'viewoutboundrate'=>\App\Http\Middleware\viewoutboundrate::class,
        'addoutboundrate'=>\App\Http\Middleware\addoutboundrate::class,
        'viewfreecredit'=>\App\Http\Middleware\viewfreecredit::class,
        'editfreecredit'=>\App\Http\Middleware\editfreecredit::class,
        'viewdocument'=>\App\Http\Middleware\viewdocument::class,
        'adddocument'=>\App\Http\Middleware\adddocument::class,
        'editdocument'=>\App\Http\Middleware\editdocument::class,
        'deletdocument'=>\App\Http\Middleware\deletdocument::class,
        'viewcountry'=>\App\Http\Middleware\viewcountry::class,
        'addcountry'=>\App\Http\Middleware\addcountry::class,
        'editcountry'=>\App\Http\Middleware\editcountry::class,
        'deletecountry'=>\App\Http\Middleware\deletecountry::class,
        'viewipinfo'=>\App\Http\Middleware\viewipinfo::class,
        'addipinfo'=>\App\Http\Middleware\addipinfo::class,
        'editipinfo'=>\App\Http\Middleware\editipinfo::class,
        'deleteipinfo'=>\App\Http\Middleware\deleteipinfo::class,
        'viewbanner'=>\App\Http\Middleware\viewbanner::class,
        'addbanner'=>\App\Http\Middleware\addbanner::class,
        'editbanner'=>\App\Http\Middleware\editbanner::class,
        'deletebanner'=>\App\Http\Middleware\deletebanner::class,
        'edithomepage'=>\App\Http\Middleware\edithomepage::class,
        'viewtestimonial'=>\App\Http\Middleware\viewtestimonial::class,
        'addtestimonial'=>\App\Http\Middleware\addtestimonial::class,
        'edittestimonial'=>\App\Http\Middleware\edittestimonial::class,
        'deletetestimonial'=>\App\Http\Middleware\deletetestimonial::class,
        'viewcontactreview'=>\App\Http\Middleware\viewcontactreview::class,
        'deletecontactreview'=>\App\Http\Middleware\deletecontactreview::class,
        'viewuser'=>\App\Http\Middleware\viewuser::class,
        'adduser'=>\App\Http\Middleware\adduser::class,
        'edituser'=>\App\Http\Middleware\edituser::class,
        'deleteuser'=>\App\Http\Middleware\deleteuser::class,
        'viewrole'=>\App\Http\Middleware\viewrole::class,
        'addrole'=>\App\Http\Middleware\addrole::class,
        'editrole'=>\App\Http\Middleware\editrole::class,
        'deleterole'=>\App\Http\Middleware\deleterole::class,
        'viewblog'=>\App\Http\Middleware\viewblog::class,
        'addblog'=>\App\Http\Middleware\addblog::class,
        'editblog'=>\App\Http\Middleware\editblog::class,
        'editaboutpage'=>\App\Http\Middleware\editaboutpage::class,
        'editteamintigration'=>\App\Http\Middleware\editteamintigration::class,




    ];
}

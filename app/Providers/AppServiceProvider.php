<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    const GUARD_ADMIN = 'admin';
    public function boot()
    {
        if (Auth::guard(self::GUARD_ADMIN)->check()) {
            // dd(print_r(Auth::guard(self::GUARD_ADMIN)->check()));
            view()->share('adminName', Auth::guard(self::GUARD_ADMIN)->user() );
        }
    }
}

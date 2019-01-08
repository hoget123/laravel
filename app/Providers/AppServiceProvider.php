<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// mysql error 防止
use Illuminate\Support\Facades\Schema;
// FOR component alert sample
use Illuminate\Support\Facades\Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // mysql error 防止
        Schema::defaultStringLength(191);

        // component alert sample
        Blade::component('components.alert', 'alert');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

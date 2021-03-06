<?php

namespace App\Providers;

// resolver Specified key was too long error (https://laravel-news.com/laravel-5-4-key-too-long-error)
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // resolver Specified key was too long error (https://laravel-news.com/laravel-5-4-key-too-long-error)
        Schema::defaultStringLength(191);
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

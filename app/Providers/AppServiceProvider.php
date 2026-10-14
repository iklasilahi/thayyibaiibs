<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\View::composer('layouts.app', function ($view) {
            $navPrograms = \App\Models\Program::where('is_active', true)->orderBy('nama', 'asc')->get();
            $view->with('navPrograms', $navPrograms);
        });
    }
}

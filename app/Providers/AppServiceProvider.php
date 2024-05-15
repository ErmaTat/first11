<?php

namespace App\Providers;
use App\Models\{
    Tournament
};
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        //
        View::composer('layouts.nav', function ($view) {
        $data = Tournament::all(); // Fetch your data
        $view->with('tournaments', $data);
    });
    }
}

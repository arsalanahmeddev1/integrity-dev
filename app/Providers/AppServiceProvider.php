<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

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
    public function boot()
    {
        View::composer('*', function ($view) {
            $user = Auth::user();
            $roleName = $user ? $user->getRoleNames()->first() : 'Guest';
    
            $breadcrumbs = [
                ['page_title' => $roleName, 'url' => route('admin.dashboard')],
                ['page_title' => 'Dashboard', 'url' => route('admin.dashboard')],
            ];
    
            // agar view ne apne breadcrumbs pass kiye to unko merge kar do
            $view->with('breadcrumbs', $view->getData()['breadcrumbs'] ?? $breadcrumbs);
        });
    }
}

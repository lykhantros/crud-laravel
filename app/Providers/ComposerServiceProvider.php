<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        View::composer(['*'],'App\Http\ViewComposers\MenuComposer');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

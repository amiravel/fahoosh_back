<?php

namespace App\Providers;

use App\Utilities\Response\Response;
use App\Utilities\Response\ResponseInterface;
use Illuminate\Support\ServiceProvider;

class UtilityServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ResponseInterface::class, Response::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

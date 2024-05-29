<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ConvertService;
use App\Services\ConvertServiceInterface;

class ConvertthirdpartyProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ConvertServiceInterface::class, ConvertService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

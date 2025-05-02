<?php

namespace App\Providers;

use App\Interfaces\ManufacturerInterface;
use App\Interfaces\VehicleInterface;
use App\Repositories\ManufacturerRepository;
use App\Repositories\VehicleRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(VehicleInterface::class,VehicleRepository::class);
        $this->app->bind(ManufacturerInterface::class,ManufacturerRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

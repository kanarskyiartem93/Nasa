<?php

namespace App\Providers;

use App\Repositories\NeoEarthObjectRepository;
use App\Repositories\NeoEarthObjectRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            NeoEarthObjectRepositoryInterface::class,
            NeoEarthObjectRepository::class
        );
    }
}

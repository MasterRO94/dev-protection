<?php

namespace MasterRO\DevProtection;

use Illuminate\Support\ServiceProvider;

class DevProtectionServiceProvider extends ServiceProvider
{

    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'route-handler.php';
        }
    }

}
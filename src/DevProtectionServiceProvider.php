<?php

namespace MasterRO\DevProtection;


class DevProtectionServiceProvider
{

    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'route-handler.php';
        }
    }

}
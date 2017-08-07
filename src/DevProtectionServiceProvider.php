<?php

namespace MasterRO\DevProtection;

use Illuminate\Support\ServiceProvider;

class DevProtectionServiceProvider extends ServiceProvider
{

	/**
	 * Register protection route
	 */
	public function boot()
	{
		if (! $this->app->routesAreCached() && ! $this->app->runningInConsole()) {
			require __DIR__ . '/route-handler.php';
		}

		try {
			$kernel = $this->app['Illuminate\Contracts\Http\Kernel'];
			$kernel->pushMiddleware(ProtectionMiddleware::class);
		} catch (\Exception $e) {
			//
		}
	}
}
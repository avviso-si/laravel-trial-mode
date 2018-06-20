<?php

namespace AvvisoSI\TrialMode\Providers;

use AvvisoSI\TrialMode\Console\Commands\RemoveTrial;
use AvvisoSI\TrialMode\Console\Commands\SetTrial;
use Illuminate\Support\ServiceProvider;

class TrialModeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SetTrial::class,
                RemoveTrial::class,
            ]);
        }
    }
}
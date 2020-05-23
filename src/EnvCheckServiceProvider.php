<?php

namespace Chandra9999\EnvChecker;

use Illuminate\Support\ServiceProvider;
use Chandra\EnvChecker\Console\Commands\EnvCheckCommand;

class EnvCheckServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                EnvCheckCommand::class,
            ]);
        }
    }

    public function register()
    {

    }

    
}
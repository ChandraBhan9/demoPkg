<?php

namespace Chandra9999\EnvChecker;

use Illuminate\Support\ServiceProvider;
use Chandra9999\EnvChecker\Console\Commands\EnvCheckCommand;

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
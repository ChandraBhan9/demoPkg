<?php

namespace Chandra9999\EnvChecker;

use Illuminate\Support\ServiceProvider;
use Chandra9999\EnvChecker\Console\Commands\EnvCheckCommand;

class EnvCheckServiceProvider extends ServiceProvider
{
    
    public function boot()
    {   require_once __DIR__ . '/vendor/autoload.php';
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
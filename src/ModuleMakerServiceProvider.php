<?php

namespace Rishabh\ModuleMaker;

use Illuminate\Support\ServiceProvider;
use Rishabh\ModuleMaker\Console\InstallCommand;

class ModuleMakerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class
            ]);
        }
    }

    public function register()
    {
        //
    }
}

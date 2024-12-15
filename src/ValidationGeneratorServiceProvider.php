<?php

namespace Ahmetsabri\ValidationGenerator;

use Illuminate\Support\ServiceProvider;
use Ahmetsabri\ValidationGenerator\Console\ValidateTableCommand;

class ValidationGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->commands([
            ValidateTableCommand::class,
        ]);
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        //
    }
}

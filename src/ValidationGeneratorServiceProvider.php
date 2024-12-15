<?php

namespace Gaza\ValidationGenerator;

use Illuminate\Support\ServiceProvider;
use Gaza\ValidationGenerator\Console\ValidateTableCommand;

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

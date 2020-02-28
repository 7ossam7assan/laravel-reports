<?php

namespace MG;

use Illuminate\Support\ServiceProvider;
use MG\Commands\MakeReport;

class ReportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([MakeReport::class]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__ . '/../config/report-builder.php' => config_path('report-builder.php'),
        ], 'config');
    }
}

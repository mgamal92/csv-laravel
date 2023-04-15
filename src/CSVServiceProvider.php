<?php

namespace MG\CSV;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MG\CSV\Commands\CSVCommand;

class CSVServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('csv-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_csv-laravel_table')
            ->hasCommand(CSVCommand::class);
    }
}

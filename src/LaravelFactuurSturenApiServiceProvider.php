<?php

namespace Deinte\LaravelFactuurSturenApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Deinte\LaravelFactuurSturenApi\Commands\LaravelFactuurSturenApiCommand;

class LaravelFactuurSturenApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-factuursturen-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-factuursturen-api_table')
            ->hasCommand(LaravelFactuurSturenApiCommand::class);
    }
}

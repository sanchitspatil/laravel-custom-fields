<?php

namespace Sanchit\LaravelCustomFields;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sanchit\LaravelCustomFields\Commands\LaravelCustomFieldsCommand;

class LaravelCustomFieldsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-custom-fields')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-custom-fields_table')
            ->hasCommand(LaravelCustomFieldsCommand::class);
    }
}

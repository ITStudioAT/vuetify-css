<?php

namespace Itstudioat\VuetifyCss;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Itstudioat\VuetifyCss\Commands\VuetifyCssCommand;

class VuetifyCssServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('vuetify-css')
            ->hasConfigFile();
    }
}

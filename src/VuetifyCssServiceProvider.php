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
            ->hasConfigFile()
            ->hasAssets();
    }

      public function bootingPackage()
    {
        $this->publishes([
            __DIR__.'/../resources/js/components' => resource_path('vendor/vuetify-css/components'),
            __DIR__.'/../resources/js/css' => resource_path('vendor/vuetify-css/css'),
            __DIR__.'/../resources/js/plugin.js' => resource_path('vendor/vuetify-css/plugin.js'),
        ], 'vuetify-css-assets');
    }
}

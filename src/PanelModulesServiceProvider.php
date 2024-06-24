<?php

namespace Laraxot\PanelModules;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Laraxot\PanelModules\Commands\PanelModulesCommand;

class PanelModulesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('panel-modules')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_panel-modules_table')
            ->hasCommand(PanelModulesCommand::class);
    }
}

<?php

namespace Andcarpi\NsacL5Models;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Andcarpi\NsacL5Models\Commands\NsacL5ModelsCommand;

class NsacL5ModelsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('nsac-l5-models')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_nsac-l5-models_table')
            ->hasCommand(NsacL5ModelsCommand::class);

        $this->app['config']->set('database.connections.NSacL5', config('nsac-l5-models.Connection.Info'));

    }
}

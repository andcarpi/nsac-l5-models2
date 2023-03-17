<?php

namespace Andcarpi\NsacL5Models;

use Andcarpi\NsacL5Models\Commands\NsacL5ModelsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile();
            //->hasViews()
            //->hasMigration('create_inconformidades_table')
            //->hasCommand(NsacL5ModelsCommand::class);

        $this->app['config']->set('database.connections.'.config('nsac-l5-models.Connection.Name'), config('nsac-l5-models.Connection.Info'));
    }
}

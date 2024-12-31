<?php

declare(strict_types=1);

namespace WireContent;

use Spatie\LaravelPackageTools\Package;
use WireContent\Commands\InstallCommand;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class WireContentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('wire-content')
            ->hasViews()
            ->hasMigration('create_skeleton_table')
            ->hasCommand(InstallCommand::class);
    }
}

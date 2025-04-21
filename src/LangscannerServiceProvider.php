<?php

namespace Ktr\Langscanner;

use Ktr\Langscanner\Commands\LangscannerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LangscannerServiceProvider extends PackageServiceProvider
{
    /**
     * @param  \Spatie\LaravelPackageTools\Package  $package
     */
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-langscanner')
            ->hasConfigFile()
            ->hasCommand(LangscannerCommand::class);
    }
}

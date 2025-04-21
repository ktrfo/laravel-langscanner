<?php

namespace Ktr\Langscanner\Tests;

use Ktr\Langscanner\LangscannerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LangscannerServiceProvider::class,
        ];
    }
}

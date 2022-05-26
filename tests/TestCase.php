<?php

namespace MartinLindhe\VueInternationalizationGenerator\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use MartinLindhe\VueInternationalizationGenerator\GeneratorProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            GeneratorProvider::class,
        ];
    }
}

<?php

namespace MartinLindhe\VueInternationalizationGenerator\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use MartinLindhe\VueInternationalizationGenerator\GeneratorProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        if (!file_exists(resource_path('js'))) {
            mkdir(resource_path('js'));
        }

        if (file_exists(base_path(config('vue-i18n-generator.jsFile')))) {
            unlink(base_path(config('vue-i18n-generator.jsFile')));
        }
    }
    protected function getPackageProviders($app)
    {
        return [
            GeneratorProvider::class,
        ];
    }
}

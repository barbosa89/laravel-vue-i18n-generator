<?php

namespace MartinLindhe\VueInternationalizationGenerator\Tests\Unit;

use InvalidArgumentException;
use MartinLindhe\VueInternationalizationGenerator\Tests\TestCase;
use MartinLindhe\VueInternationalizationGenerator\Commands\GenerateInclude;

class GenerateIncludeCommandTest extends TestCase
{
    public function test_generate_lang_files(): void
    {
        $this->artisan('vue-i18n:generate')
            ->expectsOutput('Written to : ' . base_path() . config('vue-i18n-generator.jsFile'))
            ->assertExitCode(GenerateInclude::SUCCESS);
    }

    public function test_generate_lang_files_with_umd_format(): void
    {
        $this->artisan('vue-i18n:generate', [
            '--umd' => true,
        ])
        ->expectsOutput('Written to : ' . base_path() . config('vue-i18n-generator.jsFile'))
        ->assertExitCode(GenerateInclude::SUCCESS);
    }

    public function test_thrown_exception_with_invalid_format(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->artisan('vue-i18n:generate', [
            '--format' => 'invalid',
        ]);
    }

    public function test_generate_lang_files_with_multi_option(): void
    {
        $this->artisan('vue-i18n:generate', [
            '--multi' => true,
        ])
        ->assertExitCode(GenerateInclude::SUCCESS);
    }

    public function test_generate_lang_files_by_name(): void
    {
        $this->artisan('vue-i18n:generate', [
            '--lang-files' => 'validations,passwords',
        ])
        ->expectsOutput('Written to : ' . base_path() . config('vue-i18n-generator.jsFile'))
        ->assertExitCode(GenerateInclude::SUCCESS);
    }

    public function test_generate_lang_file_with_custon_file_name(): void
    {
        $fileName = '/resources/js/custom-file-name.js';

        $this->artisan('vue-i18n:generate', [
            '--file-name' => $fileName,
        ])
        ->expectsOutput('Written to : ' . base_path() . $fileName)
        ->assertExitCode(GenerateInclude::SUCCESS);
    }
}

<?php

namespace MartinLindhe\VueInternationalizationGenerator\Tests\Unit;

use Illuminate\Console\Command;
use MartinLindhe\VueInternationalizationGenerator\Tests\TestCase;

class GenerateIncludeCommandTest extends TestCase
{
    public function test_generate_lang_files(): void
    {
        $this->artisan('vue-i18n:generate')
            ->expectsOutput('Written to : ' . base_path() . config('vue-i18n-generator.jsFile'))
            ->assertExitCode(Command::SUCCESS);
    }
}

<?php

namespace Ktr\Langscanner\Tests;

use Illuminate\Filesystem\Filesystem;
use Ktr\Langscanner\RequiredTranslations;

class RequiredTranslationsTest extends TestCase
{
    /** @test */
    public function it_finds_all_required_translations(): void
    {
        $requiredTranslations = new RequiredTranslations(
            [
                'paths' => [__DIR__ . '/fixtures/test-files'],
                'excluded_paths' => [],
                'translation_methods' => ['__', 'trans', 'trans_choice', '@lang', 'Lang::get'],
                'lang_dir_path' => base_path('lang'),
            ],
            new Filesystem(),
        );

        $this->assertEquals([
            'Well this is ackward' => '__.txt',
            'Well this is even more ackward' => '__.txt',
            'This will go in the JSON array' => '__.txt',
            'lang.first_match' => 'alt_lang.txt',
            'lang_get.first' => 'lang_get.txt',
            'lang_get.second' => 'lang_get.txt',
            'trans.first_match' => 'trans.txt',
            'trans' => 'trans.txt',
            'trans.third_match' => 'trans.txt',
            'trans_choice.with_params' => 'trans_choice.txt',
        ], $requiredTranslations->all());
    }
}

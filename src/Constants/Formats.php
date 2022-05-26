<?php

namespace MartinLindhe\VueInternationalizationGenerator\Constants;

class Formats
{
    public const ES6 = 'es6';
    public const UMD = 'umd';
    public const JSON = 'json';

    public static function toArray(): array
    {
        return [
            self::ES6,
            self::UMD,
            self::JSON,
        ];
    }
}

<?php

namespace Dbt\MakesRandomStrings\Tests;

use Dbt\MakesRandomStrings\MakesRandomStringsTrait;
use PHPUnit\Framework\TestCase;

class UnitTestCase extends TestCase
{
    use MakesRandomStringsTrait;

    public static function ri (int $min, int $max): int
    {
        return rand($min, $max);
    }
}

<?php /** @noinspection PhpUnhandledExceptionInspection */

namespace Dbt\MakesRandomStrings\Tests;

class MakesRandomStringsTraitTest extends UnitTestCase
{
    /** @test */
    public function making_a_random_string (): void
    {
        $ri = $randomInteger = random_int(1, 100);
        $rs = self::rs($ri);

        $this->assertIsString($rs);
        $this->assertSame($ri, strlen($rs));
    }
}

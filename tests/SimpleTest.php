<?php

declare(strict_types=1);

namespace Tests;

class SimpleTest extends AbstractTestCase
{
    public function testSuccess() : void
    {
        self::assertTrue(true);
        $sum = 2 + 2 - 1;
        self::assertEquals(4, $sum, 'число не равно 4');
    }
}
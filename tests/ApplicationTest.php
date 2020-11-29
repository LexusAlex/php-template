<?php

declare(strict_types=1);

namespace Tests;

class ApplicationTest extends AbstractTestCase
{
    public function testSumFive ()
    {
        $this->assertEquals(5, $this->application->sum([1,3,1]), 'сумма элементов массива не соответствует 5');
    }

    public function testSumZero ()
    {
        $this->assertEquals(0, $this->application->sum([]));
    }
}
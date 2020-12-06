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
    /**
     * @param $value
     * @param $expected
     * @dataProvider Values
     */
    public function testValidValues($value, $expected){

        $pattern = '/^[a-f0-9_-]{2,6}$/i';

        $this->assertEquals($expected, preg_match($pattern,$value));
    }

    public function Values() {
        return [
            ['ab12',1],
            ['',0],
            ['--_09f',1],
            ['1',0],
            ['123456789',0],
            ['русские буквы',0],
            ['aBcDeF',1],
        ];
    }

}
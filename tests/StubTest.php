<?php

declare(strict_types=1);

namespace Tests;

use Tests\fakes\FakeClass;

class StubTest extends AbstractTestCase
{
    public function testStub()
    {
        $stub = $this->createMock(FakeClass::class);
        $stub->method('fake')->willReturn('test');
        $this->assertSame('test', $stub->fake());
    }
}
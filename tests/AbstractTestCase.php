<?php

declare(strict_types=1);

namespace Tests;

use Application\Application;
use PHPUnit\Framework\TestCase;

abstract class AbstractTestCase extends TestCase
{
    public Application $application;

    protected function setUp(): void
    {
        $this->application = new Application();
        parent::setUp();
    }
}
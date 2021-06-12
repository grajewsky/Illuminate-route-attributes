<?php

declare(strict_types=1);

namespace GSSC\Routes\Tests\Unit;

use GSSC\Routes\Tests\TestCase;
use GSSC\Routes\RoutesServiceProvider;

class RoutesServiceProviderTest extends TestCase
{
    public function testServiceProvider()
    {
        $serviceProvider = \Mockery::spy(RoutesServiceProvider::class);
        $serviceProvider->shouldReceive('getControllersPaths')->andReturn([realpath(__DIR__ . '/../resources/Controllers')]);
        $serviceProvider->boot();
    }
}

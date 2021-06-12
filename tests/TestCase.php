<?php

declare(strict_types=1);

namespace GSSC\Routes\Tests;

use GSSC\Routes\Providers\ServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app): array
    {
         return [
             ServiceProvider::class
         ];
    }
}

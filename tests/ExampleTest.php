<?php

namespace Responseams\Notifications\Tests;

use Orchestra\Testbench\TestCase;
use Responseams\Notifications\NotificationsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [NotificationsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}

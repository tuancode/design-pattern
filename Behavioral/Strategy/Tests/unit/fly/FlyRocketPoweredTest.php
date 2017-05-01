<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit\Fly;

use DesignPattern\Behavioral\Strategy\Src\Fly\FlyRocketPowered;
use PHPUnit\Framework\TestCase;

/**
 * Class FlyRocketPowered.
 */
class FlyRocketPoweredTest extends TestCase
{
    /**
     * Test fly action.
     */
    public function testFly()
    {
        $flyBehavior = new FlyRocketPowered();
        $this->assertEquals('Woo-hoo! I am flying with a rocket.', $flyBehavior->fly());
    }
}

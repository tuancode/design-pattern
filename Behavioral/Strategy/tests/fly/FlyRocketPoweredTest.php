<?php

namespace DesignPattern\Behavioral\Strategy\tests\fly;

use DesignPattern\Behavioral\Strategy\src\fly\FlyRocketPowered;
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

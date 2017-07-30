<?php

namespace SimUDuck\Tests\Unit\Fly;

use SimUDuck\Fly\FlyRocketPowered;
use PHPUnit\Framework\TestCase;

/**
 * FlyRocketPowered uni test class.
 */
class FlyRocketPoweredTest extends TestCase
{
    public function testFly()
    {
        $flyBehavior = new FlyRocketPowered();
        $this->assertEquals('Woo-hoo! I am flying with a rocket.', $flyBehavior->fly());
    }
}

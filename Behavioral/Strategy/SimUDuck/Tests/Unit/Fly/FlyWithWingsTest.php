<?php

namespace SimUDuck\Tests\fly;

use SimUDuck\Fly\FlyWithWings;
use PHPUnit\Framework\TestCase;

/**
 * FlyWithWings unit test class.
 */
class FlyWithWingsTest extends TestCase
{
    public function testFly()
    {
        $flyBehavior = new FlyWithWings();
        $this->assertEquals('I am flying.', $flyBehavior->fly());
    }
}

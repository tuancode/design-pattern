<?php

namespace DesignPattern\Behavioral\Strategy\tests\fly;

use DesignPattern\Behavioral\Strategy\Src\Fly\FlyWithWings;
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

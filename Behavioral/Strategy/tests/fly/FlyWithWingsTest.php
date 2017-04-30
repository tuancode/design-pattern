<?php

namespace DesignPattern\Behavioral\Strategy\tests\fly;

use DesignPattern\Behavioral\Strategy\src\fly\FlyWithWings;
use PHPUnit\Framework\TestCase;

/**
 * Class FlyWithWings.
 */
class FlyWithWingsTest extends TestCase
{
    /**
     * Test fly action.
     */
    public function testFly()
    {
        $flyBehavior = new FlyWithWings();
        $this->assertEquals('I am flying!', $flyBehavior->fly());
    }
}

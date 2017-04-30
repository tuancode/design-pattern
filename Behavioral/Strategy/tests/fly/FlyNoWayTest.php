<?php

namespace DesignPattern\Behavioral\Strategy\tests\fly;

use DesignPattern\Behavioral\Strategy\src\fly\FlyNoWay;
use PHPUnit\Framework\TestCase;

/**
 * Class FlyNoWayTest.
 */
class FlyNoWayTest extends TestCase
{
    /**
     * Test fly action.
     */
    public function testFly()
    {
        $flyBehavior = new FlyNoWay();
        $this->assertEquals('I cannot fly!', $flyBehavior->fly());
    }
}

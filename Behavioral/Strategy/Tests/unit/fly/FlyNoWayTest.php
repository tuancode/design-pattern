<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit\Fly;

use DesignPattern\Behavioral\Strategy\Src\Fly\FlyNoWay;
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

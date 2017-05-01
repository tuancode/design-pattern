<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit\Fly;

use DesignPattern\Behavioral\Strategy\Src\Fly\FlyNoWay;
use PHPUnit\Framework\TestCase;

/**
 * FlyNoWay unit test class.
 */
class FlyNoWayTest extends TestCase
{
    public function testFly()
    {
        $flyBehavior = new FlyNoWay();
        $this->assertEquals('I cannot fly!', $flyBehavior->fly());
    }
}

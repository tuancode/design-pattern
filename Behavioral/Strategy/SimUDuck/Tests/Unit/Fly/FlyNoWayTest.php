<?php

namespace SimUDuck\Tests\Unit\Fly;

use SimUDuck\Fly\FlyNoWay;
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

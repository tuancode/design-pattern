<?php

namespace DesignPattern\Behavioral\Strategy\src\test\quack;

use DesignPattern\Behavioral\Strategy\src\quack\Squeak;
use PHPUnit\Framework\TestCase;

/**
 * Class SqueakTest.
 */
class SqueakTest extends TestCase
{
    /**
     * Test quack action.
     */
    public function testQuack()
    {
        $quackBehavior = new Squeak();
        $this->assertEquals('Squeak...squeak...squeak!', $quackBehavior->quack());
    }
}

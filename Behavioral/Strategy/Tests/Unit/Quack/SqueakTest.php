<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit\Quack;

use DesignPattern\Behavioral\Strategy\Src\Quack\Squeak;
use PHPUnit\Framework\TestCase;

/**
 * Class SqueakTest.
 */
class SqueakTest extends TestCase
{
    /**
     * Test Quack action.
     */
    public function testQuack()
    {
        $quackBehavior = new Squeak();
        $this->assertEquals('Squeak...squeak...squeak!', $quackBehavior->quack());
    }
}

<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit\Quack;

use DesignPattern\Behavioral\Strategy\Src\Quack\Squeak;
use PHPUnit\Framework\TestCase;

/**
 * Squeak unit test class.
 */
class SqueakTest extends TestCase
{
    public function testQuack()
    {
        $quackBehavior = new Squeak();
        $this->assertEquals('Squeak...squeak...squeak!', $quackBehavior->quack());
    }
}

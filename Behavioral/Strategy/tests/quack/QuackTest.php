<?php

namespace DesignPattern\Behavioral\Strategy\tests\quack;

use DesignPattern\Behavioral\Strategy\src\quack\Quack;
use PHPUnit\Framework\TestCase;

/**
 * Class QuackTest.
 */
class QuackTest extends TestCase
{
    /**
     * Test quack action.
     */
    public function testQuack()
    {
        $quackBehavior = new Quack();
        $this->assertEquals('Quack...quack...quack!', $quackBehavior->quack());
    }
}

<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit\Quack;

use DesignPattern\Behavioral\Strategy\Src\Quack\Quack;
use PHPUnit\Framework\TestCase;

/**
 * Class QuackTest.
 */
class QuackTest extends TestCase
{
    /**
     * Test Quack action.
     */
    public function testQuack()
    {
        $quackBehavior = new Quack();
        $this->assertEquals('Quack...quack...quack!', $quackBehavior->quack());
    }
}

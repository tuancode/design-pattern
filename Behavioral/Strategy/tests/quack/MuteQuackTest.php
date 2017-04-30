<?php

namespace DesignPattern\Behavioral\Strategy\tests\quack;

use DesignPattern\Behavioral\Strategy\src\quack\MuteQuack;
use PHPUnit\Framework\TestCase;

/**
 * Class MuckQuackTest.
 */
class MuteQuackTest extends TestCase
{
    /**
     * Test quack action.
     */
    public function testQuack()
    {
        $quackBehavior = new MuteQuack();
        $this->assertEquals('I cannot quack!', $quackBehavior->quack());
    }
}

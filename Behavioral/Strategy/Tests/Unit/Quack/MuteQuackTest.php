<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit\Quack;

use DesignPattern\Behavioral\Strategy\Src\Quack\MuteQuack;
use PHPUnit\Framework\TestCase;

/**
 * Class MuckQuackTest.
 */
class MuteQuackTest extends TestCase
{
    /**
     * Test Quack action.
     */
    public function testQuack()
    {
        $quackBehavior = new MuteQuack();
        $this->assertEquals('I cannot quack!', $quackBehavior->quack());
    }
}

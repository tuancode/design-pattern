<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit\Quack;

use DesignPattern\Behavioral\Strategy\Src\Quack\MuteQuack;
use PHPUnit\Framework\TestCase;

/**
 * MuteQuack unit test class.
 */
class MuteQuackTest extends TestCase
{
    public function testQuack()
    {
        $quackBehavior = new MuteQuack();
        $this->assertEquals('I cannot quack!', $quackBehavior->quack());
    }
}

<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit\Quack;

use DesignPattern\Behavioral\Strategy\Src\Quack\QuackMute;
use PHPUnit\Framework\TestCase;

/**
 * QuackMute unit test class.
 */
class QuackMuteTest extends TestCase
{
    public function testQuack()
    {
        $quackBehavior = new QuackMute();
        $this->assertEquals('I cannot quack!', $quackBehavior->quack());
    }
}

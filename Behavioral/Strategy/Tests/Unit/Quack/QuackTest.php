<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit\Quack;

use DesignPattern\Behavioral\Strategy\Src\Quack\Quack;
use PHPUnit\Framework\TestCase;

/**
 * Quack unit test class.
 */
class QuackTest extends TestCase
{
    public function testQuack()
    {
        $quackBehavior = new Quack();
        $this->assertEquals('Quack...quack...quack!', $quackBehavior->quack());
    }
}

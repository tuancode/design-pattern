<?php

namespace SimUDuck\Tests\Unit;

use SimUDuck\MallardDuck;
use PHPUnit\Framework\TestCase;

/**
 * MallardDuck unit test class.
 */
class MallardDuckTest extends TestCase
{
    public function testDisplaySuccess()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals('I am Mallard Duck.', $mallardDuck->display());
    }

    public function testSwimSuccess()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals('I am swimming.', $mallardDuck->swim());
    }

    public function testPerformFlyToFlyWithWings()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals('I am flying.', $mallardDuck->performFly());
    }

    public function testPerformQuackToQuack()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals('Quack...quack...quack!', $mallardDuck->performQuack());
    }
}

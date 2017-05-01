<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit;

use DesignPattern\Behavioral\Strategy\Src\RedheadDuck;
use PHPUnit\Framework\TestCase;

/**
 * RedheadDuck unit test class.
 */
class RedheadDuckTest extends TestCase
{
    public function testDisplaySuccess()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals('I am Redhead Duck.', $redheadDuck->display());
    }

    public function testSwimSuccess()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals('I am swimming.', $redheadDuck->swim());
    }

    public function testPerformQuackSuccess()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals('Quack...quack...quack!', $redheadDuck->performQuack());
    }

    public function testPerformFlyWithWings()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals('I am flying.', $redheadDuck->performFly());
    }
}

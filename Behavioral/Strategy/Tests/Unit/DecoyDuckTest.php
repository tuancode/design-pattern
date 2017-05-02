<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit;

use DesignPattern\Behavioral\Strategy\Src\DecoyDuck;
use PHPUnit\Framework\TestCase;

/**
 * DecoyDuck unit test class.
 */
class DecoyDuckTest extends TestCase
{
    public function testDisplaySuccess()
    {
        $redheadDuck = new DecoyDuck();
        $this->assertEquals('I am Decoy Duck.', $redheadDuck->display());
    }

    public function testSwimSuccess()
    {
        $redheadDuck = new DecoyDuck();
        $this->assertEquals('I am swimming.', $redheadDuck->swim());
    }

    public function testPerformFlyToFlyNoWay()
    {
        $redheadDuck = new DecoyDuck();
        $this->assertEquals('I cannot fly!', $redheadDuck->performFly());
    }

    public function testPerformQuackToMuteQuack()
    {
        $redheadDuck = new DecoyDuck();
        $this->assertEquals('I cannot quack!', $redheadDuck->performQuack());
    }
}

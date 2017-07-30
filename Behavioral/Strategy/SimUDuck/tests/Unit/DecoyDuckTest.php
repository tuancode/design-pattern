<?php

namespace SimUDuck\Tests\Unit;

use SimUDuck\DecoyDuck;
use PHPUnit\Framework\TestCase;

/**
 * DecoyDuck unit test class.
 */
class DecoyDuckTest extends TestCase
{
    public function testDisplaySuccess()
    {
        $decoyDuck = new DecoyDuck();
        $this->assertEquals('I am Decoy Duck.', $decoyDuck->display());
    }

    public function testSwimSuccess()
    {
        $decoyDuck = new DecoyDuck();
        $this->assertEquals('I am swimming.', $decoyDuck->swim());
    }

    public function testPerformFlyToFlyNoWay()
    {
        $decoyDuck = new DecoyDuck();
        $this->assertEquals('I cannot fly!', $decoyDuck->performFly());
    }

    public function testPerformQuackToMuteQuack()
    {
        $decoyDuck = new DecoyDuck();
        $this->assertEquals('I cannot quack!', $decoyDuck->performQuack());
    }
}

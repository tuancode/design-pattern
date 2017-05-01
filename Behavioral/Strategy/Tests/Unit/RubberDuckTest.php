<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Unit;

use DesignPattern\Behavioral\Strategy\Src\RubberDuck;
use PHPUnit\Framework\TestCase;

/**
 * RubberDuck unit test class.
 */
class RubberDuckTest extends TestCase
{
    public function testDisplaySuccess()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals('I am Rubber Duck.', $rubberDuck->display());
    }

    public function testSwimSuccess()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals('I am swimming.', $rubberDuck->swim());
    }

    public function testPerformQuackAsSqueak()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals('Squeak...squeak...squeak!', $rubberDuck->performQuack());
    }

    public function testPerformFlyNoWay()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals('I cannot fly!', $rubberDuck->performFly());
    }
}

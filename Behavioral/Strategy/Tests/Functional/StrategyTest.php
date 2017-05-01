<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Functional;

use DesignPattern\Behavioral\Strategy\Src\Fly\FlyRocketPowered;
use DesignPattern\Behavioral\Strategy\Src\MallardDuck;
use DesignPattern\Behavioral\Strategy\Src\RedheadDuck;
use DesignPattern\Behavioral\Strategy\Src\RubberDuck;
use PHPUnit\Framework\TestCase;

/**
 * StrategyTest functional test class.
 */
class StrategyTest extends TestCase
{
    /**
     * Test MallardDuck can display, swim, quack, fly.
     */
    public function testMallardDuck()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals('I am Mallard Duck.', $mallardDuck->display());
        $this->assertEquals('I am swimming.', $mallardDuck->swim());
        $this->assertEquals('Quack...quack...quack!', $mallardDuck->performQuack());
        $this->assertEquals('I am flying.', $mallardDuck->performFly());
    }

    /**
     * Test RedheadDuck can display, swim, quack, fly.
     */
    public function testRedheadDuck()
    {
        $redheadDuck = new RedheadDuck();
        $this->assertEquals('I am Redhead Duck.', $redheadDuck->display());
        $this->assertEquals('I am swimming.', $redheadDuck->swim());
        $this->assertEquals('Quack...quack...quack!', $redheadDuck->performQuack());
        $this->assertEquals('I am flying.', $redheadDuck->performFly());
    }

    /**
     * Test RubberDuck can display, swim, squeak instead of quack.
     * Test RubberDuck cannot fly.
     * Test add fly behavior to help RubberDuck can fly.
     */
    public function testRubberDuck()
    {
        $rubberDuck = new RubberDuck();
        // RubberDuck can display, swim and squeak.
        $this->assertEquals('I am Rubber Duck.', $rubberDuck->display());
        $this->assertEquals('I am swimming.', $rubberDuck->swim());
        $this->assertEquals('Squeak...squeak...squeak!', $rubberDuck->performQuack());

        // But it cannot fly
        $this->assertEquals('I cannot fly!', $rubberDuck->performFly());

        // Add a rocket powered to help the duck can fly.
        // Note the fly behavior changed at runtime. A big advantage of "Favor composition over inheritance" principle.
        // Has-a relation give us a flexible way to change behavior at runtime.
        $rubberDuck->setFlyBehavior(new FlyRocketPowered());
        $this->assertEquals('Woo-hoo! I am flying with a rocket.', $rubberDuck->performFly());
    }
}

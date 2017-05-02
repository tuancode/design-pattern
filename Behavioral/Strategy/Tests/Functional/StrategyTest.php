<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Functional;

use DesignPattern\Behavioral\Strategy\Src\Fly\FlyRocketPowered;
use DesignPattern\Behavioral\Strategy\Src\MallardDuck;
use DesignPattern\Behavioral\Strategy\Src\Quack\QuackMute;
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
     * Test RedheadDuck can display, swim, quack, fly.
     * Test RubberDuck can display, swim, squeak, but cannot fly.
     */
    public function testObjectCanBeConfiguredWithDifferentAlgorithm()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals('I am Mallard Duck.', $mallardDuck->display());
        $this->assertEquals('I am swimming.', $mallardDuck->swim());
        $this->assertEquals('Quack...quack...quack!', $mallardDuck->performQuack());
        $this->assertEquals('I am flying.', $mallardDuck->performFly());

        $redheadDuck = new RedheadDuck();
        $this->assertEquals('I am Redhead Duck.', $redheadDuck->display());
        $this->assertEquals('I am swimming.', $redheadDuck->swim());
        $this->assertEquals('Quack...quack...quack!', $redheadDuck->performQuack());
        $this->assertEquals('I am flying.', $redheadDuck->performFly());

        $rubberDuck = new RubberDuck();
        $this->assertEquals('I am Rubber Duck.', $rubberDuck->display());
        $this->assertEquals('I am swimming.', $rubberDuck->swim());
        $this->assertEquals('Squeak...squeak...squeak!', $rubberDuck->performQuack());
        $this->assertEquals('I cannot fly!', $rubberDuck->performFly());
    }

    /**
     * Test RubberDuck set FlyRocketPowered algorithm to help it can fly.
     * Test RubberDuck set QuackMute algorithm to remove its quack ability.
     */
    public function testObjectCanDynamicallyChangeAlgorithmAtRuntime()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals('Squeak...squeak...squeak!', $rubberDuck->performQuack());
        $this->assertEquals('I cannot fly!', $rubberDuck->performFly());

        $rubberDuck->setFlyBehavior(new FlyRocketPowered());
        $this->assertEquals('Woo-hoo! I am flying with a rocket.', $rubberDuck->performFly());

        $rubberDuck->setQuackBehavior(new QuackMute());
        $this->assertEquals('I cannot quack!', $rubberDuck->performQuack());
    }
}

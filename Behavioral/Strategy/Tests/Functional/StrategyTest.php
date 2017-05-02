<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Functional;

use DesignPattern\Behavioral\Strategy\Src\Fly\FlyRocketPowered;
use DesignPattern\Behavioral\Strategy\Src\MallardDuck;
use DesignPattern\Behavioral\Strategy\Src\Quack\MuteQuack;
use DesignPattern\Behavioral\Strategy\Src\DecoyDuck;
use DesignPattern\Behavioral\Strategy\Src\RubberDuck;
use PHPUnit\Framework\TestCase;

/**
 * StrategyTest functional test class.
 */
class StrategyTest extends TestCase
{
    /**
     * Test MallardDuck can display, swim, fly, quack.
     * Test DecoyDuck can display, swim, but cannot fly and quack.
     * Test RubberDuck can display, swim, squeak, but cannot fly.
     */
    public function testObjectCanBeConfiguredWithDifferentAlgorithm()
    {
        $mallardDuck = new MallardDuck();
        $this->assertEquals('I am Mallard Duck.', $mallardDuck->display());
        $this->assertEquals('I am swimming.', $mallardDuck->swim());
        $this->assertEquals('I am flying.', $mallardDuck->performFly());
        $this->assertEquals('Quack...quack...quack!', $mallardDuck->performQuack());

        $decoyDuck = new DecoyDuck();
        $this->assertEquals('I am Decoy Duck.', $decoyDuck->display());
        $this->assertEquals('I am swimming.', $decoyDuck->swim());
        $this->assertEquals('I cannot fly!', $decoyDuck->performFly());
        $this->assertEquals('I cannot quack!', $decoyDuck->performQuack());

        $rubberDuck = new RubberDuck();
        $this->assertEquals('I am Rubber Duck.', $rubberDuck->display());
        $this->assertEquals('I am swimming.', $rubberDuck->swim());
        $this->assertEquals('I cannot fly!', $rubberDuck->performFly());
        $this->assertEquals('Squeak...squeak...squeak!', $rubberDuck->performQuack());
    }

    /**
     * Test RubberDuck set FlyRocketPowered algorithm to help it can fly.
     * Test RubberDuck set QuackMute algorithm to remove its quack ability.
     */
    public function testObjectCanDynamicallyChangeAlgorithmAtRuntime()
    {
        $rubberDuck = new RubberDuck();
        $this->assertEquals('I cannot fly!', $rubberDuck->performFly());
        $this->assertEquals('Squeak...squeak...squeak!', $rubberDuck->performQuack());

        $rubberDuck->setFlyBehavior(new FlyRocketPowered());
        $this->assertEquals('Woo-hoo! I am flying with a rocket.', $rubberDuck->performFly());

        $rubberDuck->setQuackBehavior(new MuteQuack());
        $this->assertEquals('I cannot quack!', $rubberDuck->performQuack());
    }
}

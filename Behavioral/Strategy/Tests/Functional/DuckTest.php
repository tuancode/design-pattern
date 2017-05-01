<?php

namespace DesignPattern\Behavioral\Strategy\Tests\Functional;

use DesignPattern\Behavioral\Strategy\Src\Fly\FlyRocketPowered;
use DesignPattern\Behavioral\Strategy\Src\MallardDuck;
use DesignPattern\Behavioral\Strategy\Src\RedheadDuck;
use DesignPattern\Behavioral\Strategy\Src\RubberDuck;
use PHPUnit\Framework\TestCase;

/**
 * DuckTest functional.
 */
class DuckTest extends TestCase
{
    /**
     * @var MallardDuck
     */
    private $mallardDuck;

    /**
     * @var RedheadDuck
     */
    private $redheadDuck;

    /**
     * @var RubberDuck
     */
    private $rubberDuck;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->mallardDuck = new MallardDuck();
        $this->redheadDuck = new RedheadDuck();
        $this->rubberDuck = new RubberDuck();
    }

    /**
     * Test MallardDuck behaviors.
     */
    public function testMallardDuck()
    {
        $this->assertEquals('I am Mallard Duck.', $this->mallardDuck->display());
        $this->assertEquals('I am swimming.', $this->mallardDuck->swim());
        $this->assertEquals('I am flying.', $this->mallardDuck->performFly());
        $this->assertEquals('Quack...quack...quack!', $this->mallardDuck->performQuack());
    }

    /**
     * Test RedheadDuck behaviors.
     */
    public function testRedheadDuck()
    {
        $this->assertEquals('I am Redhead Duck.', $this->redheadDuck->display());
        $this->assertEquals('I am swimming.', $this->redheadDuck->swim());
        $this->assertEquals('I am flying.', $this->redheadDuck->performFly());
        $this->assertEquals('Quack...quack...quack!', $this->redheadDuck->performQuack());
    }

    /**
     * Test RubberDuck behaviors.
     */
    public function testRubberDuck()
    {
        $this->assertEquals('I am Rubber Duck.', $this->rubberDuck->display());
        $this->assertEquals('I am swimming.', $this->rubberDuck->swim());
        $this->assertEquals('I cannot fly!', $this->rubberDuck->performFly());
        $this->assertEquals('Squeak...squeak...squeak!', $this->rubberDuck->performQuack());

        // Change fly behavior at runtime. A big advantage of "Favor composition over inheritance" principle
        // Has-a relation give us a flexible way to change behavior at runtime.
        $this->rubberDuck->setFlyBehavior(new FlyRocketPowered());
        $this->assertEquals('Woo-hoo! I am flying with a rocket.', $this->rubberDuck->performFly());
    }
}

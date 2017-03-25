<?php

namespace DesignPattern\Behavioral\Strategy\src;

use DesignPattern\Behavioral\Strategy\src\fly\FlyBehaviorInterface;
use DesignPattern\Behavioral\Strategy\src\quack\QuackBehaviorInterface;

/**
 * A supper duck.
 */
abstract class AbstractDuck
{
    /**
     * @var FlyBehaviorInterface
     */
    protected $flyBehavior;

    /**
     * @var QuackBehaviorInterface
     */
    protected $quackBehavior;


    /**
     * Display a kind of duck.
     */
    abstract public function display() : void;

    /**
     * Present how a duck swim.
     */
    public function swim() : void
    {
        echo 'I can swim.';
    }

    /**
     * Common perform a fly behavior.
     */
    public function performFly() : void
    {
        $this->flyBehavior->fly();
    }

    /**
     * Common perform a quack behavior.
     */
    public function performQuack() : void
    {
        $this->quackBehavior->quack();
    }

    /**
     * Optional sets a fly behavior.
     *
     * @param FlyBehaviorInterface $flyBehavior
     *
     * @return self
     */
    public function setFlyBehavior(FlyBehaviorInterface $flyBehavior) : self
    {
        $this->flyBehavior = $flyBehavior;

        return $this;
    }

    /**
     * Optional sets a quack behavior.
     *
     * @param QuackBehaviorInterface $quackBehavior
     *
     * @return self
     */
    public function setQuackBehavior(QuackBehaviorInterface $quackBehavior) : self
    {
        $this->quackBehavior = $quackBehavior;

        return $this;
    }
}

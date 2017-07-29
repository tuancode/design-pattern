<?php

namespace SimUDuck;

use SimUDuck\Fly\FlyBehaviorInterface;
use SimUDuck\Quack\QuackBehaviorInterface;

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
     *
     * @return string
     */
    abstract public function display(): string;

    /**
     * Present how a duck swim.
     *
     * @return string
     */
    public function swim(): string
    {
        return 'I am swimming.';
    }

    /**
     * Common perform a fly behavior.
     *
     * @return string
     */
    public function performFly(): string
    {
        return $this->flyBehavior->fly();
    }

    /**
     * Common perform a Quack behavior.
     *
     * @return string
     */
    public function performQuack(): string
    {
        return $this->quackBehavior->quack();
    }

    /**
     * Optional sets a fly behavior.
     *
     * @param FlyBehaviorInterface $flyBehavior
     *
     * @return AbstractDuck
     */
    public function setFlyBehavior(FlyBehaviorInterface $flyBehavior): AbstractDuck
    {
        $this->flyBehavior = $flyBehavior;

        return $this;
    }

    /**
     * Optional sets a Quack behavior.
     *
     * @param QuackBehaviorInterface $quackBehavior
     *
     * @return AbstractDuck
     */
    public function setQuackBehavior(QuackBehaviorInterface $quackBehavior): AbstractDuck
    {
        $this->quackBehavior = $quackBehavior;

        return $this;
    }
}

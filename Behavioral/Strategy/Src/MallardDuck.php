<?php

namespace DesignPattern\Behavioral\Strategy\Src;

use DesignPattern\Behavioral\Strategy\Src\Fly\FlyWithWings;
use DesignPattern\Behavioral\Strategy\Src\Quack\Quack;

/**
 * MallardDuck can swim, Quack, fly.
 */
class MallardDuck extends AbstractDuck
{
    /**
     * Init fly and Quack behavior.
     */
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    /**
     * {@inheritdoc}
     */
    public function display(): string
    {
        return 'I am Mallard Duck.';
    }
}

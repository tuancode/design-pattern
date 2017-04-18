<?php

namespace DesignPattern\Behavioral\Strategy\src;

use DesignPattern\Behavioral\Strategy\src\fly\FlyWithWings;
use DesignPattern\Behavioral\Strategy\src\quack\Quack;

/**
 * MallardDuck can swim, quack, fly.
 */
class MallardDuck extends AbstractDuck
{
    /**
     * Init fly and quack behavior.
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

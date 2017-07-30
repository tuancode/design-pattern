<?php

namespace SimUDuck;

use SimUDuck\Fly\FlyWithWings;
use SimUDuck\Quack\Quack;

/**
 * MallardDuck can swim, Quack, fly.
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

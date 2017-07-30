<?php

namespace SimUDuck;

use SimUDuck\Fly\FlyNoWay;
use SimUDuck\Quack\Squeak;

/**
 * RubberDuck can swim, squeak.
 * It cannot Quack, fly.
 */
class RubberDuck extends AbstractDuck
{
    /**
     * Init fly and Quack behavior.
     */
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Squeak();
    }

    /**
     * {@inheritdoc}
     */
    public function display(): string
    {
        return 'I am Rubber Duck.';
    }
}

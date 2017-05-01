<?php

namespace DesignPattern\Behavioral\Strategy\Src;

use DesignPattern\Behavioral\Strategy\Src\Fly\FlyNoWay;
use DesignPattern\Behavioral\Strategy\Src\Quack\Squeak;

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

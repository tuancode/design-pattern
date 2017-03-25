<?php

namespace DesignPattern\Behavioral\Strategy\src;

use DesignPattern\Behavioral\Strategy\src\fly\FlyNoWay;
use DesignPattern\Behavioral\Strategy\src\quack\Squeak;

/**
 * RubberDuck can swim, squeak.
 * It cannot quack, fly.
 */
class RubberDuck extends AbstractDuck
{
    /**
     * Init fly and quack behavior.
     */
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Squeak();
    }

    /**
     * {@inheritdoc}
     */
    public function display(): void
    {
        echo 'I am Rubber Duck.';
    }
}

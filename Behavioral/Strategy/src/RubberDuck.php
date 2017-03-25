<?php

namespace Strategy\src;

use Strategy\src\fly\FlyNoWay;
use Strategy\src\quack\Squeak;

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

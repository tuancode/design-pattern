<?php

namespace Strategy\src;

use Strategy\src\fly\FlyWithWings;
use Strategy\src\quack\Quack;

/**
 * RedheadDuck can swim, quack, fly.
 */
class RedheadDuck extends AbstractDuck
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
    public function display(): void
    {
        echo 'I am Redhead Duck.';
    }
}

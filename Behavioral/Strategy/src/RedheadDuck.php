<?php

namespace DesignPattern\Behavioral\Strategy\src;

use DesignPattern\Behavioral\Strategy\src\fly\FlyWithWings;
use DesignPattern\Behavioral\Strategy\src\quack\Quack;

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
    public function display(): string
    {
        return 'I am Redhead Duck.';
    }
}

<?php

namespace SimUDuck;

use SimUDuck\Fly\FlyNoWay;
use SimUDuck\Quack\MuteQuack;

/**
 * DecoyDuck can display, swim, but cannot fly and quack.
 */
class DecoyDuck extends AbstractDuck
{
    /**
     * Init fly and quack behavior.
     */
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }

    /**
     * {@inheritdoc}
     */
    public function display(): string
    {
        return 'I am Decoy Duck.';
    }
}

<?php

namespace DesignPattern\Behavioral\Strategy\src\quack;

/**
 * Interface QuackBehaviorInterface
 */
interface QuackBehaviorInterface
{
    /**
     * Present a quack behavior.
     */
    public function quack() : void;
}

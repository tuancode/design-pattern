<?php

namespace DesignPattern\Behavioral\Strategy\Src\Quack;

/**
 * Interface QuackBehaviorInterface.
 */
interface QuackBehaviorInterface
{
    /**
     * Present a Quack behavior.
     */
    public function quack(): string;
}

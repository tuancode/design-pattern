<?php

namespace DesignPattern\Behavioral\Strategy\src\quack;

/**
 * Quack represent a real quack.
 */
class Quack implements QuackBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function quack(): string
    {
        return 'Quack...quack...quack!';
    }
}

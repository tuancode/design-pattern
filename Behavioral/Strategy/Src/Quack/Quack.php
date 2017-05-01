<?php

namespace DesignPattern\Behavioral\Strategy\Src\Quack;

/**
 * Quack represent a real Quack.
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

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
    public function quack(): void
    {
        echo 'Quack...quack...quack!';
    }
}

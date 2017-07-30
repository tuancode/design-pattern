<?php

namespace SimUDuck\Quack;

/**
 * Squeak represent a different kind of Quack.
 * For Ex. A rubber duck cannot Quack, but squeak.
 */
class Squeak implements QuackBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function quack(): string
    {
        return 'Squeak...squeak...squeak!';
    }
}

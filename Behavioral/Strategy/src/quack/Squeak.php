<?php

namespace DesignPattern\Behavioral\Strategy\src\quack;

/**
 * Squeak represent a different kind of quack.
 * For Ex. A rubber duck cannot quack, but squeak.
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

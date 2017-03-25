<?php

namespace Strategy\src\quack;

/**
 * Squeak represent a different kind of quack.
 * For Ex. A rubber duck cannot quack, but squeak.
 */
class Squeak implements QuackBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function quack(): void
    {
        echo 'Squeak...squeak...squeak!';
    }
}

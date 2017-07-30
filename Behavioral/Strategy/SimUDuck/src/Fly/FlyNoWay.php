<?php

namespace SimUDuck\Fly;

/**
 * FlyNoWay represent an inability to fly behavior.
 */
class FlyNoWay implements FlyBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function fly(): string
    {
        return 'I cannot fly!';
    }
}

<?php

namespace DesignPattern\Behavioral\Strategy\Src\Fly;

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

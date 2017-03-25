<?php

namespace DesignPattern\Behavioral\Strategy\src\fly;

/**
 * FlyNoWay represent an inability to fly behavior.
 */
class FlyNoWay implements FlyBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function fly(): void
    {
        echo 'I cannot fly!';
    }
}
<?php

namespace DesignPattern\Behavioral\Strategy\src\fly;

/**
 * FlyRocketPowered represent an ability to fly by using rocket powered.
 */
class FlyRocketPowered implements FlyBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function fly(): string
    {
        return 'Woo-hoo! I am flying with a rocket.';
    }
}

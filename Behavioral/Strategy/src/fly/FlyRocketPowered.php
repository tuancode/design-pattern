<?php

namespace Strategy\src\fly;

/**
 * FlyRocketPowered represent an ability to fly by using rocket powered.
 */
class FlyRocketPowered implements FlyBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function fly(): void
    {
        echo 'I am flying with a rocket.';
    }
}

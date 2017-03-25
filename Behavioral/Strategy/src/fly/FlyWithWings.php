<?php

namespace Strategy\src\fly;

/**
 * FlyWithWing represent a fly behavior with wings.
 */
class FlyWithWings implements FlyBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function fly(): void
    {
        echo 'I am flying!';
    }
}
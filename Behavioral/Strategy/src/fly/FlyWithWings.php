<?php

namespace DesignPattern\Behavioral\Strategy\src\fly;

/**
 * FlyWithWing represent a fly behavior with wings.
 */
class FlyWithWings implements FlyBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function fly(): string
    {
        return 'I am flying!';
    }
}

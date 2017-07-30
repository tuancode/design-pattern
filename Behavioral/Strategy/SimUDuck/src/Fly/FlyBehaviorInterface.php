<?php

namespace SimUDuck\Fly;

/**
 * Interface FlyBehaviorInterface.
 */
interface FlyBehaviorInterface
{
    /**
     * Present a fly behavior.
     *
     * @return string
     */
    public function fly(): string;
}

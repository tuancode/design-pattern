<?php

namespace DesignPattern\Behavioral\Strategy\src\fly;

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

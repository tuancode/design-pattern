<?php

namespace DesignPattern\Behavioral\Strategy\Src\Fly;

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

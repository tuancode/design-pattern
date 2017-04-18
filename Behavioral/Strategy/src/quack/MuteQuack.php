<?php

namespace DesignPattern\Behavioral\Strategy\src\quack;

/**
 * MuteQuack represent an inability to quack behavior.
 */
class MuteQuack implements QuackBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function quack(): string
    {
        return 'I cannot quack!';
    }
}

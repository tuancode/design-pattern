<?php

namespace DesignPattern\Behavioral\Strategy\Src\Quack;

/**
 * QuackMute represent an inability to Quack behavior.
 */
class QuackMute implements QuackBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function quack(): string
    {
        return 'I cannot quack!';
    }
}

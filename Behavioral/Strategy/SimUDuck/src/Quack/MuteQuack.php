<?php

namespace SimUDuck\Quack;

/**
 * MuteQuack represent an inability to quack.
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

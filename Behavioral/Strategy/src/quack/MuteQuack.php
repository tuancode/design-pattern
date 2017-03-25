<?php

namespace Strategy\src\quack;

/**
 * MuteQuack represent a inability to quack behavior.
 */
class MuteQuack implements QuackBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function quack(): void
    {
        echo 'I cannot quack!';
    }
}

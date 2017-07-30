<?php

namespace AdventureGame;

use AdventureGame\Weapon\AxeBehavior;

/**
 * The Knight.
 */
class Knight extends AbstractCharacter
{
    /**
     * Init Knight weapon.
     */
    public function __construct()
    {
        $this->weapon = new AxeBehavior();
    }

    /**
     * {@inheritdoc}
     */
    public function fight(): string
    {
        return 'Take a kick';
    }
}

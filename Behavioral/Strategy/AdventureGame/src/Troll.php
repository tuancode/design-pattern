<?php

namespace AdventureGame;

use AdventureGame\Weapon\KnifeBehavior;

/**
 * The Troll.
 */
class Troll extends AbstractCharacter
{
    /**
     * Init Troll's weapon.
     */
    public function __construct()
    {
        $this->weapon = new KnifeBehavior();
    }

    /**
     * {@inheritdoc}
     */
    public function fight(): string
    {
        return 'Hit below the belt';
    }
}

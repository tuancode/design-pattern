<?php

namespace AdventureGame;

use AdventureGame\Weapon\SwordBehavior;

/**
 * The King.
 */
class King extends AbstractCharacter
{
    /**
     * Init King's weapon.
     */
    public function __construct()
    {
        $this->weapon = new SwordBehavior();
    }

    /**
     * {@inheritdoc}
     */
    public function fight(): string
    {
        return 'Throws a punch';
    }
}

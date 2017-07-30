<?php

namespace AdventureGame;

use AdventureGame\Weapon\BowAndArrowBehavior;

/**
 * The Queen.
 */
class Queen extends AbstractCharacter
{
    /**
     * Init Queen's weapon.
     */
    public function __construct()
    {
        $this->weapon = new BowAndArrowBehavior();
    }

    /**
     * {@inheritdoc}
     */
    public function fight(): string
    {
        return 'Slap on the face';
    }
}

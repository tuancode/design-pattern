<?php

namespace AdventureGame\Weapon;

/**
 * BowAndArrowBehavior represent the way to use bow and arrow as weapon for fighting.
 */
class BowAndArrowBehavior implements WeaponBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function useWeapon(): string
    {
        return 'Shooting an arrow with a bow';
    }
}

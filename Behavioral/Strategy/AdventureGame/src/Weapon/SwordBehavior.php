<?php

namespace AdventureGame\Weapon;

/**
 * SwordBehavior represent the way to use sword as weapon for fighting.
 */
class SwordBehavior implements WeaponBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function useWeapon(): string
    {
        return 'Swinging a sword';
    }
}

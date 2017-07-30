<?php

namespace AdventureGame\Weapon;

/**
 * AxeBehavior represent the way to use axe as weapon for fighting.
 */
class AxeBehavior implements WeaponBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function useWeapon(): string
    {
        return 'Chopping with an axe';
    }
}

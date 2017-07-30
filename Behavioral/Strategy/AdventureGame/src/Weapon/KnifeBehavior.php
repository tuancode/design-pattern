<?php

namespace AdventureGame\Weapon;

/**
 * KnifeBehavior represent the way to use knife as weapon for fighting.
 */
class KnifeBehavior implements WeaponBehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function useWeapon(): string
    {
        return 'Cutting with knife';
    }
}

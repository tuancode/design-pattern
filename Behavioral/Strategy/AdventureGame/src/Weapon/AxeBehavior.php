<?php

namespace AdventureGame\Weapon;

/**
 * Class AxeBehavior.
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

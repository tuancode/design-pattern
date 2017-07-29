<?php

namespace AdventureGame\Weapon;

/**
 * Interface WeaponBehaviorInterface.
 */
interface WeaponBehaviorInterface
{
    /**
     * Use weapon for fighting.
     *
     * @return string
     */
    public function useWeapon(): string;
}

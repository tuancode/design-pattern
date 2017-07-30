<?php

namespace AdventureGame\Weapon;

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

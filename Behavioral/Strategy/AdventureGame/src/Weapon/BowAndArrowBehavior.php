<?php

namespace AdventureGame\Weapon;

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

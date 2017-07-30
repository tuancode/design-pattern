<?php

namespace AdventureGame\Weapon;

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

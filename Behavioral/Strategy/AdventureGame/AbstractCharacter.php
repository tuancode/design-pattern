<?php

namespace AdventureGame;

use AdventureGame\Weapon\WeaponBehaviorInterface;

/**
 * Class AbstractCharacter.
 */
abstract class AbstractCharacter
{
    /**
     * @var WeaponBehaviorInterface
     */
    protected $weapon;

    /**
     * Fight with enemy.
     *
     * @return mixed
     */
    abstract public function fight(): string;

    /**
     * @param WeaponBehaviorInterface $weapon
     */
    public function setWeapon(WeaponBehaviorInterface $weapon)
    {
        $this->weapon = $weapon;
    }
}

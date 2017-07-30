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
     * Use weapon to fight.
     *
     * @return string
     */
    public function fightWithWeapon(): string
    {
        return $this->weapon->useWeapon();
    }

    /**
     * @param WeaponBehaviorInterface $weapon
     *
     * @return AbstractCharacter
     */
    public function setWeapon(WeaponBehaviorInterface $weapon): AbstractCharacter
    {
        $this->weapon = $weapon;

        return $this;
    }
}

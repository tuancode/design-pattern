<?php

namespace AdventureGame\Tests\Functional;

use AdventureGame\King;
use AdventureGame\Knight;
use AdventureGame\Queen;
use AdventureGame\Troll;
use AdventureGame\Weapon\AxeBehavior;
use AdventureGame\Weapon\KnifeBehavior;
use PHPUnit\Framework\TestCase;

/**
 * StrategyTest functional test class.
 */
class StrategyTest extends TestCase
{
    public function testObjectCanBeConfiguredWithDifferentAlgorithm()
    {
        $king = new King();
        $this->assertEquals('Throws a punch', $king->fight());
        $this->assertEquals('Swinging a sword', $king->fightWithWeapon());

        $queen = new Queen();
        $this->assertEquals('Slap on the face', $queen->fight());
        $this->assertEquals('Shooting an arrow with a bow', $queen->fightWithWeapon());

        $knight = new Knight();
        $this->assertEquals('Take a kick', $knight->fight());
        $this->assertEquals('Chopping with an axe', $knight->fightWithWeapon());

        $troll = new Troll();
        $this->assertEquals('Hit below the belt', $troll->fight());
        $this->assertEquals('Cutting with knife', $troll->fightWithWeapon());
    }

    public function testObjectCanDynamicallyChangeAlgorithmAtRuntime()
    {
        $king = new King();
        $this->assertEquals('Swinging a sword', $king->fightWithWeapon());
        $king->setWeapon(new AxeBehavior());
        $this->assertEquals('Chopping with an axe', $king->fightWithWeapon());

        $queen = new Queen();
        $this->assertEquals('Shooting an arrow with a bow', $queen->fightWithWeapon());
        $queen->setWeapon(new KnifeBehavior());
        $this->assertEquals('Cutting with knife', $queen->fightWithWeapon());
    }
}

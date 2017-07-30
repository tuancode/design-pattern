<?php

namespace AdventureGame\Tests\Unit;

use AdventureGame\Knight;
use PHPUnit\Framework\TestCase;

/**
 * Knight unit test class.
 */
class KnightTest extends TestCase
{
    public function testFightSuccess()
    {
        $knight = new Knight();
        $this->assertEquals('Take a kick', $knight->fight());
    }

    public function testFightWithAnAxeWeaponSuccess()
    {
        $knight = new Knight();
        $this->assertEquals('Chopping with an axe', $knight->fightWithWeapon());
    }
}

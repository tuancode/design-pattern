<?php

namespace AdventureGame\Tests\Unit;

use AdventureGame\Troll;
use PHPUnit\Framework\TestCase;

/**
 * Troll unit test class.
 */
class TrollTest extends TestCase
{
    public function testFightSuccess()
    {
        $troll = new Troll();
        $this->assertEquals('Hit below the belt', $troll->fight());
    }

    public function testFightWithAKnifeWeaponSuccess()
    {
        $troll = new Troll();
        $this->assertEquals('Cutting with knife', $troll->fightWithWeapon());
    }
}

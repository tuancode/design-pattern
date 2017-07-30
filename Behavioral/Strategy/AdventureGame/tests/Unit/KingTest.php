<?php

namespace AdventureGame\Tests\Unit;

use AdventureGame\King;
use PHPUnit\Framework\TestCase;

/**
 * King unit test class.
 */
class KingTest extends TestCase
{
    public function testFightSuccess()
    {
        $king = new King();
        $this->assertEquals('Throws a punch', $king->fight());
    }

    public function testFightWithASwordWeaponSuccess()
    {
        $king = new King();
        $this->assertEquals('Swinging a sword', $king->fightWithWeapon());
    }
}

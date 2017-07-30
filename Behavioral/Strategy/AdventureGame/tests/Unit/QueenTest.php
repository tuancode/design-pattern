<?php

namespace AdventureGame\Tests\Unit;

use AdventureGame\Queen;
use PHPUnit\Framework\TestCase;

/**
 * Queen unit test class.
 */
class QueenTest extends TestCase
{
    public function testFightSuccess()
    {
        $queen = new Queen();
        $this->assertEquals('Slap on the face', $queen->fight());
    }

    public function testFightWithABowAndArrowWeaponSuccess()
    {
        $queen = new Queen();
        $this->assertEquals('Shooting an arrow with a bow', $queen->fightWithWeapon());
    }
}

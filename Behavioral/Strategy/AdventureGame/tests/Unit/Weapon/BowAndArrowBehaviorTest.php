<?php

namespace AdventureGame\Tests\Unit\Weapon;

use AdventureGame\Weapon\BowAndArrowBehavior;
use PHPUnit\Framework\TestCase;

/**
 * BowAndArrowBehavior unit test class.
 */
class BowAndArrowBehaviorTest extends TestCase
{
    public function testUseWeapon()
    {
        $bowAndArrow = new BowAndArrowBehavior();
        $this->assertEquals('Shooting an arrow with a bow', $bowAndArrow->useWeapon());
    }
}

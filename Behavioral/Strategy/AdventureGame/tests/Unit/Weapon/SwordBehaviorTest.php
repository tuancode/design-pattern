<?php

namespace AdventureGame\Tests\Unit\Weapon;

use AdventureGame\Weapon\SwordBehavior;
use PHPUnit\Framework\TestCase;

/**
 * Sword unit test class.
 */
class SwordBehaviorTest extends TestCase
{
    public function testUseWeapon()
    {
        $sword = new SwordBehavior();
        $this->assertEquals('Swinging a sword', $sword->useWeapon());
    }
}

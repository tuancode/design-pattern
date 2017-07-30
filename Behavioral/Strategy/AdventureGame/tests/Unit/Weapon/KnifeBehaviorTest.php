<?php

namespace AdventureGame\Tests\Unit\Weapon;

use AdventureGame\Weapon\KnifeBehavior;
use PHPUnit\Framework\TestCase;

/**
 * Knife unit test class.
 */
class KnifeBehaviorTest extends TestCase
{
    public function testUseWeapon()
    {
        $knife = new KnifeBehavior();
        $this->assertEquals('Cutting with knife', $knife->useWeapon());
    }
}

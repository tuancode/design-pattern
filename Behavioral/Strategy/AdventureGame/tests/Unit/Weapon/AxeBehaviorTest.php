<?php

namespace AdventureGame\Tests\Unit\Weapon;

use AdventureGame\Weapon\AxeBehavior;
use PHPUnit\Framework\TestCase;

/**
 * AxeBehavior unit test class.
 */
class AxeBehaviorTest extends TestCase
{
    public function testUseWeapon()
    {
        $axe = new AxeBehavior();
        $this->assertEquals('Chopping with an axe', $axe->useWeapon());
    }
}

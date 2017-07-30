<?php

namespace SimUDuck\Tests\Unit\Quack;

use SimUDuck\Quack\Squeak;
use PHPUnit\Framework\TestCase;

/**
 * Squeak unit test class.
 */
class SqueakTest extends TestCase
{
    public function testQuack()
    {
        $quackBehavior = new Squeak();
        $this->assertEquals('Squeak...squeak...squeak!', $quackBehavior->quack());
    }
}

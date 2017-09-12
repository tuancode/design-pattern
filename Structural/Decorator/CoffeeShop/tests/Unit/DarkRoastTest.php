<?php

namespace CoffeeShop\Tests\Unit;

use CoffeeShop\DarkRoast;
use PHPUnit\Framework\TestCase;

/**
 * DarkRoast unit test class.
 */
class DarkRoastTest extends TestCase
{
    public function testDescription()
    {
        $darkRoast = new DarkRoast();

        $this->assertAttributeEquals(DarkRoast::DESCRIPTION, 'description', $darkRoast);
    }

    public function testCost()
    {
        $darkRoast = new DarkRoast();

        $this->assertEquals(DarkRoast::COST, $darkRoast->cost());
    }
}

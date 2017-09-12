<?php

namespace CoffeeShop\Tests\Unit;

use CoffeeShop\Decaf;
use PHPUnit\Framework\TestCase;

/**
 * Decaf unit test class.
 */
class DecafTest extends TestCase
{
    public function testDescription()
    {
        $decaf = new Decaf();

        $this->assertAttributeEquals(Decaf::DESCRIPTION, 'description', $decaf);
    }

    public function testCost()
    {
        $decaf = new Decaf();

        $this->assertEquals(Decaf::COST, $decaf->cost());
    }
}

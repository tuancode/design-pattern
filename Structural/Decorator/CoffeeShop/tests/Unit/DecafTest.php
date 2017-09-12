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
        $expected = 'Decaf';
        $decaf = new Decaf();

        $this->assertAttributeEquals($expected, 'description', $decaf);
    }

    public function testCost()
    {
        $expected = 1.05;
        $decaf = new Decaf();

        $this->assertEquals($expected, $decaf->cost());
    }
}
